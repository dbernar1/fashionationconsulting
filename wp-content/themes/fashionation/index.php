<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php echo get_bloginfo('name'); ?><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
<div id="page">
<header id="masthead">
	<?php if ( get_theme_mod( 'fashionation_logo' ) ) : ?>
	    <div class='site-logo'>
	        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' 
	    	   title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' 
	       	   rel='home'>
		        <img src='<?php echo esc_url( get_theme_mod( 'fashionation_logo' ) ); ?>' 
		      		 alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
		 	</a>
	    </div>
	<?php else : ?>
	    <hgroup>
	        <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
	        <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
	    </hgroup>
	<?php endif; ?>
</header> <!-- #masthead -->

<?php while (have_posts()) : the_post(); ?>

	<p><?php the_field('home_page_section_1'); ?></p>


<?php endwhile; ?>


<?php get_footer(); ?>

<h1>Footer</h1>

</div> <!-- #page -->
<?php wp_footer(); ?>
</body>
</html>