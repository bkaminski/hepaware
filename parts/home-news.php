<div class="news-area">
	<div class="container pb-5">
		<h2 class="h5 text-center secondary-heading text-uppercase pt-5 pb-5">In The News</h2>
			<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<div class="row">
					<div class="col-md-6">
						<figure>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'large', array( 'class' => 'img-thumbnail' ) ); ?>
									
							</a>
						</figure>
					</div>
					<div class="col-md-6">
						<h3><?php the_title(); ?></h3>
						<small>
							<u>Posted on: <?php echo get_the_date(); ?></u>
						
						</small>
						<?php the_excerpt(); ?>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>
