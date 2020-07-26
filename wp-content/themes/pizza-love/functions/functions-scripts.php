<?php
	function enqueue_scripts() {
		// Google Maps API
//		wp_enqueue_script( 'gmaps-api', '//maps.googleapis.com/maps/api/js?key=AIzaSyBU_po7B-zsXyGkLaeuTsWmwbd08-pil3A', null, null, true );

		wp_enqueue_script('isotope-js', get_stylesheet_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), 'v' . filemtime( get_stylesheet_directory() . '/assets/js/isotope.min.js'), true);
		wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), 'v' . filemtime( get_stylesheet_directory() . '/assets/js/scripts.js'), true);
		wp_enqueue_style('theme-normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css', array(), 'v' . filemtime( get_stylesheet_directory() . '/assets/css/normalize.css'), 'all');
		wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), 'v' . filemtime( get_stylesheet_directory() . '/assets/css/style.css'), 'all');
		wp_localize_script('custom-js', 'ajaxUrl', array('url' => admin_url() . 'admin-ajax.php',));
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_scripts');


	function add_admin_style() {
		wp_enqueue_style( 'pizza-admin-style', get_stylesheet_directory_uri() . '/style-admin.css', array(), 'v' . filemtime( get_stylesheet_directory() . '/style-admin.css'), 'all' );
	}
	add_action('admin_head', 'add_admin_style');

	function remove_script_types($tag, $handle) {
		return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
	}
	add_filter('style_loader_tag', 'remove_script_types', 10, 2);
	add_filter('script_loader_tag', 'remove_script_types', 10, 2);