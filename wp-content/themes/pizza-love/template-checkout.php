<?php
	/**
	* Template Name: Checkout page
	*/
	get_header();
?>
	<div class="content">
		<div class="article-wrapper">
			<h2>Checkout</h2>
<?php
	echo do_shortcode('[woocommerce_checkout]');
	echo '</div>';
	get_footer();