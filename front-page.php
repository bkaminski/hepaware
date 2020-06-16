<?php get_header(); ?>
<header>
	<?php get_template_part( 'parts/home', 'hero' ); ?>

</header>
<main>
	<?php get_template_part( 'parts/home', 'main' ); ?>

</main>
<section>
	<?php get_template_part( 'parts/home', 'mission' ); ?>

</section>
<section>
	<?php get_template_part( 'parts/home', 'affiliates' ); ?>

</section>
<article>
	<?php get_template_part( 'parts/home', 'news' ); ?>

</article>
<?php get_footer(); ?>
