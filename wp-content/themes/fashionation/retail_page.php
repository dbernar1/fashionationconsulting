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

<div class="row">

<?php query_posts('category_name=Products'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class='col-sm-4'>
		<?php $image = wp_get_attachment_image_src(get_field('product_image'), 'large' ); ?>
		<img class="img-responsive img-thumbnail" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('product_image')) ?>" />
		<p><?php the_field('product_title'); ?></p>
		<p><?php the_field('product_description'); ?></p>
	</div>

<?php endwhile; endif; ?>

</div> <!-- .row -->

<?php get_footer(); ?>