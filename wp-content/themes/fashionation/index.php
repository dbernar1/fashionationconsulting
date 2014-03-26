<?php get_header(); ?>

<h1>index.php in fashionation folder is working!</h1>

<?php while (have_posts()) : the_post(); ?>

	<p><?php the_field('home_page_section_1'); ?></p>


<?php endwhile; ?>

<?php get_footer(); ?>