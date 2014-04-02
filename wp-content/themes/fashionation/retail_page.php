<?php 
	/*
	Template Name: Retail Page
	*/
?>

<?php get_header(); ?>



<div id="page" class="container">
<?php while (have_posts()) : the_post(); ?>

<div class="row">
	<div class='col-sm-12'>
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
	</div>
</div>

<?php endwhile; ?>

<?php query_posts('category_name=Products'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row">
	<div class='col-sm-12'>
		<?php the_title(); ?>
	</div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>