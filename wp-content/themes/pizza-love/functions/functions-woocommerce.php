<?php
	add_filter( 'wc_add_to_cart_message_html', '__return_null' );

	function woocommerce_custom_single_add_to_cart_text() {
		return __('Buy Now', 'woocommerce'); 
	}
	add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 