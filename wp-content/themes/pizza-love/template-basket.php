<?php
	/**
	* Template Name: Basket page
	*/
	get_header();
?>
	<div class="content">
		<div class="basket-wrapper padded">
			<h1>Your <span class="red">Basket</span></h1>
<?php
	echo do_shortcode('[woocommerce_cart]');
?>
		</div>
	</div>
	<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
        	{"@type": "ListItem","position": 1,"item": {"@id": "<?php echo get_site_url(); ?>", "name": "Home"}},
        	{"@type": "ListItem","position": 2,"item": {"@id": "<?php echo get_the_permalink(); ?>","name": "Basket"}}
        ]
    }
    </script>
<?php
	get_footer();