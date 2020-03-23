<nav class="navbar navbar-expand-lg navbar-light" style="background:#fff;">
	<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
		<?php $uploads = wp_upload_dir(); 
		echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/03/hepaware-logo.png' ) . '" width="125" alt="Hepaware Logo">'; ?>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hepawareNav" aria-controls="hepawareNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars fa-2x"></i>
	</button>
	<div class="collapse navbar-collapse" id="hepawareNav">
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => '',
			'container_class'   => '',
			'container_id'      => '',
			'menu_class'        => 'navbar-nav mx-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		)); ?>
  </div>
</nav>
