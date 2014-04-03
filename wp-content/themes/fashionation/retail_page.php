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
		<h1 class="section_heading"><?php the_title(); ?></h1>
		<div class="section_content"><?php the_content(); ?></div>
	</div>
</div>

<?php endwhile; ?>

<?php $args = array( 'post_type' => 'post' ); ?>
<?php $loop = new WP_Query( $args ); ?>
<?php $i = 0; while ( $loop->have_posts() ) : $loop->the_post(); ?>

<?php if ($i % 3 == 0) : ?>
	<!-- First product in row -->
	<div class="row">
<?php endif; ?>

	<div class='col-sm-4'>
		<div class="product-container">
			<?php $image = wp_get_attachment_image_src(get_field('product_image'), 'large' ); ?>
			<img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('product_image')) ?>" />
			<h1 class="product_heading"><?php the_title(); ?></h1>
			<div class="product_content"><?php the_content(); ?></div>
		</div>
	</div>

<?php if ($i % 3 == 2) : ?>
	<!-- Last product in row -->
	</div> <!-- .row -->
<?php endif; ?>

<?php $i++; ?>

<?php endwhile; ?>

<?php get_footer(); ?>