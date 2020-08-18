<?php
	add_filter('wc_add_to_cart_message_html', '__return_null' );

	function woocommerce_custom_single_add_to_cart_text() {
		return __('Buy Now', 'woocommerce'); 
	}
	add_filter('woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text');

	function woo_declare_support() {
		add_theme_support('woocommerce');
	}
	add_action('after_theme_setup', 'woo_declare_support');

	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
	  
	function show_sale_on_basket( $price, $values, $cart_item_key ) {
		$slashed_price = $values['data']->get_price_html();
		$is_on_sale = $values['data']->is_on_sale();
		if ( $is_on_sale ) {
			$price = $slashed_price;
		}
		return $price;
	}
	add_filter('woocommerce_cart_item_price', 'show_sale_on_basket', 30, 3);





	function shipping_notes() {
		echo "here is notes";
	}
	add_action('woocommerce_proceed_to_checkout', 'shipping_notes', 20 );
