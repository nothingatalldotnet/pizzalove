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


	function cart_notes() {
		echo "<h2 class='red'>Important!</h2>";
		echo "Deliveries are dispatched once per hour on the hour.<br><br>";
		echo "If you are picking up in the shop, please allow 60 minutes before picking up your pizza.<br><br>";
		echo "If you have any dietary concerns or any specific delivery/pick up details, please leave this information in the notes section on checkout.";
	}
	add_action('woocommerce_before_cart_totals', 'cart_notes', 20);


	function order_notes() {
		echo "<h2 class='red'>Important!</h2>";
		echo "Deliveries are dispatched once per hour on the hour.<br><br>";
		echo "If you are picking up in the shop, please allow 60 minutes before picking up your pizza.<br><br>";
		echo "If you have any dietary concerns or any specific delivery/pick up details, please leave this information in the notes section above.";
	}
	add_action('woocommerce_checkout_before_order_review', 'order_notes', 20);

	function add_basket_count_to_nav($items) {

		if((!(is_checkout()))&&(!(is_cart()))) {
			$basket_count = '<li class="menu-item">';
			$basket_count .= sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count());
			$basket_count .= ' - '.WC()->cart->get_cart_total();
			$basket_count .= '</li>';
			
			$items = $items . $basket_count;
		}
		return $items;
	}
	add_filter('wp_nav_menu_main-menu_items', 'add_basket_count_to_nav');