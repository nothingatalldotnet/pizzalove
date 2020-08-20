<?php
	/**
	* Template Name: Checkout page
	*/
	get_header();
?>
	<div class="content">
		<div class="checkout-wrapper padded">
			<h1>Checkout</h1>
<?php
	echo do_shortcode('[woocommerce_checkout]');
	echo '	</div>';
	echo '</div>';
	get_footer();