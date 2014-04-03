</div> <!-- #page -->
</div> <!-- #background_distant-->
<footer data-stellar-ratio="0.3">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
					<img id="woman_silhouette" src="<?php bloginfo('template_directory') ?>/images/woman_silhouette.png" />
			</div>
			<div class="col-sm-7">
				<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="name"><?php echo get_theme_mod('fashionation_first_name'); ?> <?php echo get_theme_mod('fashionation_last_name'); ?></h2>
				<p>
					<span class="description"><?php bloginfo( 'description' ); ?></span><br/>
					<span class="phone">P. <?php echo get_theme_mod('fashionation_phone'); ?></span><br/>
					<span class="email">E. <?php echo get_theme_mod('fashionation_email'); ?></span>
				</p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>