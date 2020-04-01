<div class="home-main">
		<div class="container">
			<h2 class="h5 text-center secondary-heading text-uppercase pt-5 pb-5">Main Content Area</h2>
			<div class="card-deck pb-5">
				<div class="card border-red1">
					<?php $uploads = wp_upload_dir(); 
					echo '<img class="card-img-top" src="' . esc_url( $uploads['baseurl'] . '/2020/03/sample1.jpg' ) . '" alt="Image of person holding a sparkler">'
					;?>

					<div class="card-body">
						<h5 class="card-title text-center">Card title</h5>
						<p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
					<div class="card-footer text-center">
						<a class="btn btn-outline-red2 btn-lg rounded-0 pr-5 pl-5" href="#" role="button">Learn more</a>
					</div>
				</div>
				<div class="card border-red1">
					<?php $uploads = wp_upload_dir(); 
					echo '<img class="card-img-top" src="' . esc_url( $uploads['baseurl'] . '/2020/03/sample2.jpg' ) . '" alt="Image of a group of people having a conversation">'
					;?>

					<div class="card-body">
						<h5 class="card-title text-center">Card title</h5>
						<p class="card-text text-center">This card has supporting text below as a natural lead-in to additional content.</p>
					</div>
					<div class="card-footer text-center">
						<a class="btn btn-outline-red2 btn-lg rounded-0 pr-5 pl-5" href="#" role="button">Learn more</a>
					</div>
				</div>
				<div class="card border-red1">
					<?php $uploads = wp_upload_dir(); 
					echo '<img class="card-img-top" src="' . esc_url( $uploads['baseurl'] . '/2020/03/sample3.jpg' ) . '" alt="Image of a crowded city shopping district">'
					;?>
					
					<div class="card-body">
						<h5 class="card-title text-center">Card title</h5>
						<p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					</div>
					<div class="card-footer text-center">
						<a class="btn btn-outline-red2 btn-lg rounded-0 pr-5 pl-5" href="#" role="button">Learn more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
