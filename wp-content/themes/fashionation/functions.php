<?php

function fashionation_theme_customizer( $wp_customize ) {
  //Remove sections
  //$wp_customize->remove_section( 'static_front_page' );

  //Contact info
  $wp_customize->add_section( 'fashionation_contact_info_section' , array(
    'title'       => __( 'Contact Info', 'fashionation' ),
    'priority'    => 40,
    'description' => 'Enter contact information to display in footer.',
  ));

  $wp_customize->add_setting('fashionation_first_name');
  $wp_customize->add_setting('fashionation_last_name');
  $wp_customize->add_setting('fashionation_phone');
  $wp_customize->add_setting('fashionation_email');

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fashionation_first_name', array(
    'label' => __('First name', 'fashionation' ),
    'section' => 'fashionation_contact_info_section',
    'settings' => 'fashionation_first_name'
  )));

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fashionation_last_name', array(
    'label' => __('Last name', 'fashionation' ),
    'section' => 'fashionation_contact_info_section',
    'settings' => 'fashionation_last_name'
  )));

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fashionation_phone', array(
    'label' => __('Phone', 'fashionation' ),
    'section' => 'fashionation_contact_info_section',
    'settings' => 'fashionation_phone'
  )));

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fashionation_email', array(
    'label' => __('Email', 'fashionation' ),
    'section' => 'fashionation_contact_info_section',
    'settings' => 'fashionation_email'
  )));

}
add_action('customize_register', 'fashionation_theme_customizer');

function fashionation_register_and_enqueue_styles_and_scripts() {
  wp_register_style( 'bootstrap_style', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' );
  wp_register_script( 'bootstrap_script', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array('jquery') );
  wp_register_style( 'style.css', get_stylesheet_uri(), array('bootstrap_style') );
  wp_register_script( 'stellar_script', get_template_directory_uri() . '/js/jquery.stellar.min.js', array( 'jquery') );
  wp_register_script( 'fashionation_script', get_template_directory_uri() . '/js/fashionation.js', array( 'jquery', 'stellar_script') );

  wp_enqueue_style( 'style.css' );
  wp_enqueue_style( 'bootstrap_style' );
  wp_enqueue_script( 'bootstrap_script' );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'stellar_script' );
  wp_enqueue_script( 'fashionation_script' );

}
add_action( 'wp_enqueue_scripts', 'fashionation_register_and_enqueue_styles_and_scripts' );

function register_pages_menu() {
  register_nav_menu('pages-menu',__( 'Pages Menu', 'fashionation' ));
}
add_action( 'init', 'register_pages_menu' );

function removemediabuttons()
{
  global $current_user;
  get_currentuserinfo();

  if($current_user->user_level) {
    remove_action( 'media_buttons', 'media_buttons' );
  }
}
add_action('admin_head','removemediabuttons');

// Rename 'Posts' to 'Products'
function fashionation_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Products';
    $submenu['edit.php'][5][0] = 'Products';
    $submenu['edit.php'][10][0] = 'Add Product';
    $submenu['edit.php'][16][0] = 'Product Tags';
    
}

function fashionation_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Products';
    $labels->singular_name = 'Product';
    $labels->add_new = 'Add Product';
    $labels->add_new_item = 'Add Product';
    $labels->edit_item = 'Edit Product';
    $labels->new_item = 'Product';
    $labels->view_item = 'View Product';
    $labels->search_items = 'Search Products';
    $labels->not_found = 'No Products found';
    $labels->not_found_in_trash = 'No Products found in Trash';
    $labels->all_items = 'All Products';
    $labels->menu_name = 'Products';
    $labels->name_admin_bar = 'Products';
}
 
add_action( 'admin_menu', 'fashionation_change_post_label' );
add_action( 'init', 'fashionation_change_post_object' );

function searchfilter($query) {
  if ($query->is_search && !is_admin() ) {
    $query->set('post_type',array('post'));
  }

  return $query;
}

add_filter('pre_get_posts','searchfilter');

add_filter( 'request', 'my_request_filter' );
function my_request_filter( $query_vars ) {
  if( isset( $_GET['s'] ) ) {

    $s = trim( $_GET['s'] );



    if ( empty( $s ) ) {
      $query_vars['s'] = " ";
    }
  }
  return $query_vars;
}


?>