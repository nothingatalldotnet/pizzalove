<?php

	function getProductPopupInfo() {
		global $wpdb;

		if(isset($_REQUEST)) {
			$prouct_id = $_REQUEST['pid'];

			echo do_shortcode('[product_page id='.$prouct_id.']');
		}
		die();
	}

	add_action('wp_ajax_popup_product', 'getProductPopupInfo');
	add_action('wp_ajax_nopriv_popup_product', 'getProductPopupInfo');