<footer class="ha-footer pb-2">
	<div class="container pt-5">
		<div class="row">
			<div class="col col-sm-6 col-md-4">
				<h4 class="text-white">Contact</h4>
				
					HepAware, Delaware<br />
					(302) 287-2805<br />
					hepawarede@gmail.com
				

			</div>
			<div class="col col-sm-6 col-md-4 footer-links">
				<h4 class="text-white">Helpful Links</h4>
					<ul>
						<li>Information</li>
						<li>Get Involved</li>
						<li>Happenings</li>
						<li>In The News</li>
						<li>Resources</li>
					</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 donate--footer tablet--btn">
				<h4 class="pl-5 text-white pb-3">Donate</h4>
				<?php get_template_part( 'parts/page', 'donate-button' ); ?>
			</div>
		</div>
	</div>
	<div class="col text-center copyright">
		<p><small>Copyright &copy; <?php echo date('Y'); ?> HepAware</small></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
