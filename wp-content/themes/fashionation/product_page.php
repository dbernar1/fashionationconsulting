<?php 
	/*
	Template Name: Product Page
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

<?php $args = array( 'post_type' => 'post' ); ?>
<?php $loop = new WP_Query( $args ); ?>
<?php $i = 0; while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div class="row">

		<div class='col-sm-7 col-sm-offset-5'>
			<div class="row product-container">

				<div class="col-sm-4">
					<?php $image = wp_get_attachment_image_src(get_field('product_image'), 'thumbnail' ); ?>
					<img class="img-responsive img-thumbnail img-circle" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('product_image')) ?>" />
				</div>

				<div class="col-sm-8">
					<h1 class="section_heading"><?php the_title(); ?></h1>
					<div class="section_content"><?php the_content(); ?></div>	
				</div>

			</div>
		</div>

	</div> <!-- .row -->

<?php $i++; endwhile; ?>

<?php get_footer(); ?>