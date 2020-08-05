<?php
	get_header();
	echo '<div class="content">';

	if(have_posts()) {
		while(have_posts()) {
			the_post();

			echo '<div class="single-product-wrapper padded">';

				the_content();
				echo do_shortcode('[product_page]');
			echo '</div>';
		}
	}

	echo '</div>';
	get_footer();
?>