<?php 
	/*
	Template Name: Contact Page
	*/
?>

<?php get_header(); ?>

<div id="page" class="container">

<?php while (have_posts()) : the_post(); ?>

	<div class="row">
		<div class='col-sm-7 col-sm-offset-5'>
			<h1 class="section_heading"><?php the_title(); ?></h1>
			<div class="section_content"><?php the_content(); ?></div>
		</div>
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>