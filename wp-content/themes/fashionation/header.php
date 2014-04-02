<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php echo get_bloginfo('name'); ?><?php wp_title( '|', true, 'right' ); ?></title>
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
		      <?php if ( get_theme_mod( 'fashionation_logo' ) ) : ?>
					    <div class='site-logo'>
				        <a class="navbar-brand"
				        	 href='<?php echo esc_url( home_url( '/' ) ); ?>' 
					    	   title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' 
				       	   rel='home'>
					        <img src='<?php echo esc_url( get_theme_mod( 'fashionation_logo' ) ); ?>' 
						      		 alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
							 	</a>
					    </div>
					<?php else : ?>
				    <hgroup>
			        <h1 class='site-title'>
			        	<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
			        		<?php bloginfo( 'name' ); ?>
			        	</a>
			        </h1>
			        <h2 class='site-description'>~ <?php bloginfo( 'description' ); ?> ~</h2>
				    </hgroup>
					<?php endif; ?>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav nav-justified">
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
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>	
</header> <!-- #masthead -->
