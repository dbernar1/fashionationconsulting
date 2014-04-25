<?php 
	/*
	Template Name: Service Page
	*/
?>

<?php get_header(); ?>

<div id="page" class="container">

<?php while (have_posts()) : the_post(); ?>

	<?php if ( strlen( get_the_content() ) > 0 ) : ?>

	<div class="row">
		<div class='col-sm-7 col-sm-offset-5'>
			<h1 class="section_heading"><?php the_title(); ?></h1>
			<div class="section_content"><?php the_content(); ?></div>
		</div>
	</div>

	<?php endif; ?>

<?php endwhile; ?>

<?php $args = array( 'post_type' => 'service',
										 'order' => 'ASC' ); ?>
<?php $loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div class="row">

		<div class='col-sm-7 col-sm-offset-5'>
					<h1 class="section_heading"><?php the_title(); ?></h1>
					<div class="section_content">
						<?php the_content(); ?>
					</div>
					<div class="section_content price_info pull-right"><strong><?php print_custom_field('pricing_info'); ?></strong></div>
		</div>

	</div> <!-- .row -->

<?php endwhile; ?>

<?php get_footer(); ?>