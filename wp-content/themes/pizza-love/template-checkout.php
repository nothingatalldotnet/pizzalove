<?php
	/**
	* Template Name: Checkout page
	*/
	get_header();
?>
	<div class="content">
		<div class="checkout-wrapper padded">
			<h2>Checkout</h2>
<?php
	echo do_shortcode('[woocommerce_checkout]');
	echo '	</div>';
	echo '</div>';
	get_footer();