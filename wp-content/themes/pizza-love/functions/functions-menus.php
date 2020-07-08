<?php
	function navMenus() {
		register_nav_menu('main-menu',__('Main Menu'));
		register_nav_menu('main-menu-mobile',__('Mobile Main Menu'));
		register_nav_menu('footer-menu',__('Footer Menu'));
		register_nav_menu('footer-tiny-menu',__('Footer Tiny Menu'));
	}
	add_action('init', 'navMenus');

	function navCurrent($classes, $item) {
		if(in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ) {
			$classes[] = 'active ';
		}
		return $classes;
	}
	add_filter('nav_menu_css_class' , 'navCurrent' , 10 , 2);


	function clear_nav_menu_item_id($id, $item, $args) {
		return "";
	}
	add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);