<?php
	/**
	* Template Name: Menu page
	*/
	get_header();
	$category_array = array();

	$terms = get_terms( 'product_tag' );
	$tag_array = array();
	if (! empty( $terms ) && ! is_wp_error($terms)){
	    foreach($terms as $term) {
	        $tag_array[] = array('name' => $term->name, 'slug' => $term->slug);
	    }
	}

?>
	<div class="content">
		<div id="drop-filters">
        	<h4 class="filter-title"> <a data-toggle="collapse"> Filters <i class="indicator glyphicon glyphicon-chevron-down-custom pull-right"><span class="sp-1"></span><span class="sp-2"></span></i> </a> </h4>
        	<div class="filter-list">
				<h3>Categories</h3>
				<ul>
					<li><label>All <input type='radio' name='category' class="all" checked="checked" value=''><span class='radiomark'></span></label></li>
<?php
	for($i=0; $i < count($category_array); $i++) {
		echo "<li><label>".$category_array[$i]['name']."<input type='radio' name='category' value='".$category_array[$i]['slug']."'><span class='radiomark'></span></label></li>";
	}
?>
				</ul>
				<h3>Tags</h3>
				<ul>
<?php
for($i=0; $i < count($tag_array); $i++) {
	echo "<li><label>".$tag_array[$i]['name']."<input type='checkbox' name='tag' value='".$tag_array[$i]['slug']."'><span class='checkmark'></span></label></li>";
}
?>
				</ul>
			</div>
		</div>
		<div class="menu-page padded">
			<div class="menu-content">
<?php
	$cat_args = array(
		'orderby' => 'title',
		'order' => 'ASC',
		'hide_empty' => true
	);
	$product_categories = get_terms('product_cat', $cat_args);
	foreach ($product_categories as $product_category) {
		$this_term = $product_category->name;
		$this_slug = $product_category->slug;
		array_push($category_array, array('name' => $this_term, 'slug' => $this_slug)); 

		$product_args = array(
			'posts_per_page' => -1,
			'tax_query' => array(
			'relation' => 'AND',
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => $product_category->slug
				)
			),
			'post_type' => 'product',
			'orderby' => 'title,'
		);
		$products = new WP_Query($product_args);

		while($products->have_posts()) {
			$products->the_post();
			$prod_id = get_the_ID();
			$product = wc_get_product($prod_id);
			$prod_name = $product->get_name();
			$prod_addons = WC_Product_Addons_Helper::get_product_addons($prod_id);
			$prod_url = site_url()."/basket?add-to-cart=".$prod_id;
			$prod_tags = get_the_terms($prod_id, 'product_tag');
			$prod_image = get_the_post_thumbnail_url();
			$prod_price = $product->get_price_html();

			$prod_tag_display = "";
			$prod_tag_class = "";

			if($prod_tags && !is_wp_error($prod_tags)) {
				foreach($prod_tags as $prod_tag) {
					$prod_tag_class .= " ".$prod_tag->slug;
					$prod_tag_display .= '<span>'.$prod_tag->name.'</span> ';
				}
			}

			echo '<div class="product '.$this_slug.$prod_tag_class.'">';
			echo '	<h3>'.$prod_name.'</h3>';
			echo '	<div class="product-information">';
			echo '		<form class="cart" action="'.esc_url(apply_filters("woocommerce_add_to_cart_form_action", $product->get_permalink())).'" method="post" enctype="multipart/form-data">';

			do_action('woocommerce_before_add_to_cart_button');
			
			echo '			<button type="submit" name="add-to-cart" value="'.esc_attr($product->get_id()).'" class="red-button single_add_to_cart_button button alt">'.esc_html( $product->single_add_to_cart_text() ).'</button>';
			echo '			<span class="'.esc_attr(apply_filters("woocommerce_product_price_class", "price")).'">'.$product->get_price_html().'</span>';
			echo '		</form>';
			echo '		<img src="'.$prod_image.'">';
			echo '	</div>';
			echo '	<div class="tags">'.$prod_tag_display."</div>";
			echo '</div>';
		}
	}

?>
			</div>

			<div class="menu-filters">
				<div class="filters">
					<h3>Categories</h3>
					<ul>
						<li><label>All <input type='radio' name='category' value='' class="all" checked="checked"><span class='radiomark'></span></label></li>
<?php
	for($i=0; $i < count($category_array); $i++) {
		echo "<li><label>".$category_array[$i]['name']."<input type='radio' name='category' value='".$category_array[$i]['slug']."'><span class='radiomark'></span></label></li>";
	}
?>
					</ul>
					<h3>Tags</h3>
					<ul>
<?php
	for($i=0; $i < count($tag_array); $i++) {
		echo "<li><label>".$tag_array[$i]['name']."<input type='checkbox' name='tag' value='".$tag_array[$i]['slug']."'><span class='checkmark'></span></label></li>";
	}
?>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php
	get_footer();