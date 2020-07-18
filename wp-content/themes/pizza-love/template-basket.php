<?php
	/**
	* Template Name: Basket page
	*/
	get_header();
?>
	<div class="content">
		<div class="article-wrapper">
		<h2>Basket</h2>
<?php
	echo do_shortcode('[woocommerce_cart]');
	echo '</div>';
	get_footer();