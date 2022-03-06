<?php

get_header();
?>
	<div class="page-notfound">

		<div class="row">
			<div class="col-7 mx-auto text-center">
				<div class="notfound-box">
					<p>404</p>
				</div>
				<h2 class="notfound-title"></h2>
				<p class= "description-404"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></p>
			</div>
		</div>

	</div>

<?php
get_footer();
