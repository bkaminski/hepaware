<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<header>
	<?php get_template_part( 'parts/page', 'header' ); ?>

</header>

<section>
	<?php get_template_part( 'parts/page', 'body' ); ?>

</section>
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
