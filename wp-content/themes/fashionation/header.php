<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="resource-type" content="document" />
	<meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
	<meta http-equiv="content-language" content="en-us" />
	<meta name="author" content="<?php echo get_theme_mod('fashionation_first_name'); ?> <?php echo get_theme_mod('fashionation_last_name'); ?>" />
	<meta name="contact" content="<?php echo get_theme_mod('fashionation_email'); ?>" />
	<meta name="copyright" content="Copyright (c) <?php echo date('Y'); ?>. All Rights Reserved." />
	<meta name="description" content="<?php echo get_theme_mod('fashionation_first_name'); ?> <?php echo get_theme_mod('fashionation_last_name'); ?> is a
	certified fashion consultant providing various fashion related services and products including Extreme Closet Makeovers, Color Consultations, 
	Retail Makeovers, Womens Clothing, Speaking engagments, and Girl's Night Out home shopping experiences." />
	<meta name="keywords" content="fashion, consultation, consulting, consultant, makeover, retail, clothing, women, speaking, girls night out, socks,
	leggings, capris" />	
	<title><?php wp_title( '~', true, 'right' ); ?><?php echo get_bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>
<body>

<div id="background_distant" data-stellar-background-ratio="0.1">
<div id="background_near" data-stellar-background-ratio="0.2"></div>

<header>
	<div class="container">
		<nav id="site-top-navigation" class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
			    <hgroup>
		        <h1 class='site-title'>
		        	<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
		        		<?php bloginfo( 'name' ); ?>
		        	</a>
		        </h1>
		        <h2 class='site-description'>~ <?php bloginfo( 'description' ); ?> ~</h2>
			    </hgroup>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
      	<?php wp_nav_menu( array(
      		'theme_location'	=> 'pages-menu',
				  'depth'       		=> 0,
					'sort_column' 		=> 'menu_order',
					'container'				=> 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'		=> 'bs-example-navbar-collapse-1',
					'menu_class'  		=> 'nav navbar-nav nav-justified',
					'include'     		=> '',
					'exclude'     		=> '',
					'echo'        		=> true,
					'show_home'   		=> false,
					'link_before' 		=> '',
					'link_after'  		=> '' ) );
				?> 
		  </div><!-- /.container-fluid -->
		</nav>
	</div>	
</header> <!-- #masthead -->
