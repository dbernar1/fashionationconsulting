<?php get_header(); ?>

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
