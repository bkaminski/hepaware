<div class="news-area">
	<div class="container pb-5">
		<h2 class="h5 text-center secondary-heading text-uppercase pt-5 pb-5">In The News</h2>
		<div class="row">
			<div class="col-md-6">
				<?php $uploads = wp_upload_dir(); 
				echo '<img class="img-fluid" src="' . esc_url( $uploads['baseurl'] . '/2020/04/business-man-1031755_1920.jpg' ) . '" alt="news image">'
				;?>

			</div>
			<div class="col-md-6">
				<h3>Headline About Topic</h3>
				<p class="pb-3">Donec imperdiet felis sed metus varius semper. Suspendisse gravida id felis fermentum consequat. Suspendisse tempor ligula est, eget suscipit mi consectetur vel. Sed et ex porta, mollis eros at, ultrices velit. Integer tempor, augue sagittis tempus malesuada, neque magna sagittis nunc, nec venenatis lorem nibh nec dolor.</p>
				<a class="btn btn-outline-red2 btn-lg pl-5 pr-5 rounded-0" href="#">Read More</a>
			</div>
		</div>
	</div>
</div>
