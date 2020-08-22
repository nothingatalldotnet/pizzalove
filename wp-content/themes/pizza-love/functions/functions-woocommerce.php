<?php
	add_filter('wc_add_to_cart_message_html', '__return_null' );

	function remove_content_editior_for_products() {
		remove_post_type_support('product', 'editor');
	}
	add_action('init', 'remove_content_editior_for_products');


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


	function show_price_in_attribute_dropdown($html, $args) {
	    if(sizeof($args['product']->get_variation_attributes()) == 1) {

		    $options = $args['options'];
		    $product = $args['product'];
		    $attribute = $args['attribute'];
		    $name = $args['name'] ? $args['name'] : 'attribute_' . sanitize_title( $attribute );
		    $id = $args['id'] ? $args['id'] : sanitize_title( $attribute );
		    $class = $args['class'];
		    $show_option_none = $args['show_option_none'] ? true : false;
		    $show_option_none_text = $args['show_option_none'] ? $args['show_option_none'] : __( 'Choose an option', 'woocommerce' );

		    if ( empty( $options ) && ! empty( $product ) && ! empty( $attribute ) ) {
		        $attributes = $product->get_variation_attributes();
		        $options    = $attributes[ $attribute ];
		    }

			$html = '<select id="'.esc_attr($id).'" class="'.esc_attr($class).'" name="'.esc_attr( $name ).'" data-attribute_name="attribute_' . esc_attr( sanitize_title( $attribute ) ) . '" data-show_option_none="' . ( $show_option_none ? 'yes' : 'no' ) . '">';
			$html .= '<option value="">'.esc_html( $show_option_none_text ).'</option>';

		    if(!empty($options)) {
				foreach($options as $option) {
					$selected = sanitize_title($args['selected']) === $args['selected'] ? selected($args['selected'], sanitize_title( $option ), false) : selected( $args['selected'], $option, false );

					$price_html = '';
					foreach($product->get_available_variations() as $variation) {
						if($variation['attributes'][$name] == $option){
							$price_html = strip_tags($variation['price_html']);
							break;
						}
					}
					
					error_log("PRICE:".$price_html);
					$html .= '<option value="'.esc_attr($option).'" '.$selected.'>'.esc_html(apply_filters('woocommerce_variation_option_name', $option) . ' - '.$price_html).'</option>';
		        }
		    }
		    $html .= '</select>';

		   }
	    return $html;
	}
	add_filter('woocommerce_dropdown_variation_attribute_options_html', 'show_price_in_attribute_dropdown', 10, 2);