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
<!-- <body> -->
<?php get_header(); ?>

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
		        <li><a href="#one">Home</a></li>
		        <li><a href="#two">About</a></li>
		        <li><a href="#three">Contact</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>	
</header> <!-- #masthead -->

<div id="page" class="container">

<?php while (have_posts()) : the_post(); ?>

	<div class="row">
		<div class='col-sm-7 col-sm-offset-5'>
			<h1 id="one" class="section_heading"><?php the_field('section_1_heading'); ?></h1>
			<p class="section_content"><?php the_field('section_1_content'); ?></p>
		</div>
	</div>

	<div class="row">
		<div class='col-sm-7 col-sm-offset-5'>
			<h1 id="two" class="section_heading"><?php the_field('section_2_heading') ?></h1>
			<p class="section_content"><?php the_field('section_2_content'); ?></p>
		</div>
	</div>

	<div class="row">
		<div class='col-sm-7 col-sm-offset-5'>
			<h1 id="three" class="section_heading"><?php the_field('section_3_heading') ?></h1>
			<p class="section_content"><?php the_field('section_3_content'); ?></p>
		</div>
	</div>

<?php endwhile; ?>


<?php get_footer(); ?>
</div> <!-- #page -->

</div> <!-- #background_distant-->

<footer data-stellar-ratio="0.3">
<!-- <footer> -->

	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<img id="woman_silhouette" src="<?php bloginfo('template_directory') ?>/images/woman_silhouette.png" />
			</div>
			<div class="col-sm-7">
				<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
				<h2><?php echo get_theme_mod('fashionation_first_name'); ?> <?php echo get_theme_mod('fashionation_last_name'); ?></h2>
				<p>
					<span><?php bloginfo( 'description' ); ?></span><br/>
					<span>P. <?php echo get_theme_mod('fashionation_phone'); ?></span><br/>
					<span>E. <?php echo get_theme_mod('fashionation_email'); ?></span>
				</p>
			</div>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>