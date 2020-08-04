<?php
	/**
	* Template Name: Basket page
	*/
	get_header();
?>
	<div class="content">
		<div class="basket-wrapper padded">
		<h2>Basket</h2>
<?php
	echo do_shortcode('[woocommerce_cart]');
	echo '	</div>';
	echo '</div>';
	get_footer();