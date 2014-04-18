<?php get_header(); ?>

<div id="page" class="container">

<?php while (have_posts()) : the_post(); ?>

	<div class="row">
		<div class='col-sm-7 col-sm-offset-5'>
			<p>page.php</p>
			<h1 class="section_heading"><?php the_title(); ?></h1>
			<div class="section_content"><?php the_content(); ?></div>
		</div>
	</div>

<?php endwhile; ?>

</div>

<?php get_footer(); ?>
