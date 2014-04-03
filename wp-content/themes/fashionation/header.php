<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
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
