<?php
	get_header();
?>
	<div class="content">
		<div class="block-cta">
			<img src="<?php echo site_url(); ?>/wp-content/themes/pizza-love/assets/images/pizza.png">
			<div>
				<h1 class="title">Oh no! <span class="red">404!</span></h1>
				<p><?php echo get_field('404_text','option'); ?></p><br><br>
				<a href="<?php echo site_url(); ?>" class="red-button">PIZZA ME!</a>
			</div>
		</div>
	</div>
	<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
        	{"@type": "ListItem","position": 1,"item": {"@id": "<?php echo get_site_url(); ?>", "name": "Home"}},
        	{"@type": "ListItem","position": 2,"item": {"@id": "<?php echo get_the_permalink(); ?>","name": "404"}}
        ]
    }
    </script>
<?php
	echo '</div>';
	get_footer();