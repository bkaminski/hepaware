<div class="int-body">
	<div class="container mainbody pt-3">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="row pb-3">
				<div class="col-md-12">
					<figure>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'full', array( 'class' => 'img-thumbnail' ) ); ?>
								
						</a>
					</figure>
				</div>
				<div class="col-md-12">
					<h2><?php the_title(); ?></h2>
					<small><u>Posted on: <?php echo get_the_date(); ?></u></small>
					<?php the_content(); ?>

				</div>
			</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
	<div class="container-fluid no-padding">
		<div class="col-md-12 pt-3 pb-3 tag-area text-white">
			<?php the_tags('<span class="badge badge-light mr-2"><i class="fas fa-tags"></i> Topics:</span>  ', ', '); ?>
				
		</div>
	</div>
</div>
