<!DOCTYPE html>
<html>
<head>
	<title>Fashionation</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<?php wp_head(); ?>
</head>
<body>

<h1>Header</h1>

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
