<?php get_header(); ?>
<header>
	<?php get_template_part( 'parts/home', 'hero' ); ?>

</header>
<main>
	<?php get_template_part( 'parts/home', 'main' ); ?>

</main>
<section>
	<?php get_template_part( 'parts/home', 'content-block-1' ); ?>

</section>
<section>
	<?php get_template_part( 'parts/home', 'affiliates' ); ?>

</section>
<aside>
	<?php get_template_part( 'parts/home', 'news' ); ?>

</aside>
<?php get_footer(); ?>
