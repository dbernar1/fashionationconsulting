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

?>