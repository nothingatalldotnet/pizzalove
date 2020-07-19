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
		<div class="flex menu-page padded">
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
			$prod_name = get_the_title();
			$prod_url = get_the_permalink();
			$prod_tags = get_the_terms(get_the_ID(), 'product_tag');

			echo '<div class="product">';
			echo '	<img src="'.$prod_image.'">';
			echo '	<div>';
			echo '		<h3>'.$prod_name.'</h3>';
			echo '		<p>'.$prod_excerpt.'</p>';
			echo '		<a href="'.$prod_url.'" class="red-button">Buy</a>';
			echo '		<div class="tags">';

			if($prod_tags && !is_wp_error($prod_tags)) {
				foreach($prod_tags as $prod_tag) {
					echo '<span>'.$prod_tag->name.'</span> ';
				}
			}
			echo '		</div>';
			echo '	</div>';
			echo '</div>';

		}
	}

?>
			</div>

			<div id="" class="menu-filters">
				<h3>Categories</h3>
				<ul>
<?php
	for($i=0; $i < count($category_array); $i++) {
		echo "<li>".$category_array[$i]['name']."</li>";
	}
?>
				</ul>
				<h3>Tags</h3>
				<ul>
<?php
	for($i=0; $i < count($tag_array); $i++) {
		echo "<li>".$tag_array[$i]['name']."</li>";
	}
?>
				</ul>
			</div>
		</div>
	</div>
<?php
	get_footer();