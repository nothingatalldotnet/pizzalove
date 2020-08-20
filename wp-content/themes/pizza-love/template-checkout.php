<?php
	/**
	* Template Name: Checkout page
	*/
	get_header();
?>
	<div class="content">
		<div class="checkout-wrapper padded">
			<h1>Checkout</h1>
<?php
	echo do_shortcode('[woocommerce_checkout]');
?>
		</div>
	</div>
	<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
        	{"@type": "ListItem","position": 1,"item": {"@id": "<?php echo get_site_url(); ?>", "name": "Home"}},
        	{"@type": "ListItem","position": 2,"item": {"@id": "<?php echo get_site_url(); ?>/basket","name": "Basket"}}
        	{"@type": "ListItem","position": 2,"item": {"@id": "<?php echo get_the_permalink(); ?>","name": "Checkout"}}
        ]
    }
    </script>
<?php
	get_footer();