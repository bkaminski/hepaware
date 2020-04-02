<div class="int-body">
	<div class="container mainbody pt-3">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="row pb-3">
				<div class="col-md-4">
					<figure>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'large', array( 'class' => 'img-thumbnail' ) ); ?>
								
						</a>
					</figure>
				</div>
				<div class="col-md-8">
					<h1><?php the_title(); ?></h1>
					<small>
						<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
							<u>Posted on: <?php echo get_the_date(); ?></u>
								
						</time>
					</small>
					<?php the_excerpt(); ?>
				</div>
			</div>
			<hr>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>
