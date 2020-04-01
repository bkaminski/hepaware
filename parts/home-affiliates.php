<div class="affiliates">
	<div class="container pb-5">
		<h2 class="h5 text-center secondary-heading text-uppercase pt-5 pb-5">Affiliates</h2>
		<div class="row">
			<div class="col-md-3">
				<?php $uploads = wp_upload_dir(); 
				echo '<img class="img-fluid" src="' . esc_url( $uploads['baseurl'] . '/2020/04/johnson-johnson-logo.png' ) . '" alt="affiliate logo">'
				;?>
					
			</div>
			<div class="col-md-3">
				<?php $uploads = wp_upload_dir(); 
				echo '<img class="img-fluid" src="' . esc_url( $uploads['baseurl'] . '/2020/04/CVS-Pharmacy-Logo-1.png' ) . '" alt="affiliate logo">'
				;?>
				
			</div>
			<div class="col-md-3">
				<?php $uploads = wp_upload_dir(); 
				echo '<img class="img-fluid" src="' . esc_url( $uploads['baseurl'] . '/2020/04/riteaid.png' ) . '" alt="affiliate logo">'
				;?>

			</div>
			<div class="col-md-3">
				<?php $uploads = wp_upload_dir(); 
				echo '<img class="img-fluid" src="' . esc_url( $uploads['baseurl'] . '/2020/04/Walgreens-Logo.png' ) . '" alt="affiliate logo">'
				;?>
				
			</div>
		</div>
	</div>
</div>
