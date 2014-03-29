<?php

function fashionation_theme_customizer( $wp_customize ) {
  // Fun code will go here

	//Logo
	$wp_customize->add_section( 'fashionation_logo_section' , array(
    'title'       => __( 'Logo', 'fashionation' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
  ));

  $wp_customize->add_setting( 'fashionation_logo' );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'fashionation_logo', array(
    'label'    => __( 'Logo', 'fashionation' ),
    'section'  => 'fashionation_logo_section',
    'settings' => 'fashionation_logo',
	)));


  //Background color
  $wp_customize->add_section( 'fashionation_colors_section' , array(
    'title'       => __( 'Colors', 'fashionation' ),
    'priority'    => 30,
    'description' => 'Select colors',
  ));

  $wp_customize->add_setting('fashionation_background_color', array(
  	'default' => '#fff',
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fashionation_background_color', array(
  	'label' => __('Background Color', 'fashionation' ),
  	'section' => 'fashionation_colors_section',
  	'settings' => 'fashionation_background_color',
  )));

}
add_action('customize_register', 'fashionation_theme_customizer');

function fashionation_customize_css()
{
    ?>
         <style type="text/css">
             html { background:<?php echo get_theme_mod('fashionation_background_color'); ?>; }
         </style>
    <?php
}
add_action( 'wp_head', 'fashionation_customize_css');

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

?>