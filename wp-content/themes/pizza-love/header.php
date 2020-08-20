<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
		<meta name="theme-color" content="#ED1C24">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script src="https://kit.fontawesome.com/bb20656c21.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
		<link rel="icon" type="image/png" href="<?php site_url()."/favicon.ico"; ?>">
		<title><?php echo wp_title(); ?></title>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WFFS8BK');</script>
		<script type='application/ld+json'>
			{
				"@context":"https://schema.org",
				"@type":"WebSite",
				"@id":"#website",
				"url":"https://pizza-love.co.uk",
				"name":"PizzaLove"
			}
		</script>
		<script type='application/ld+json'>
			{
				"@context": "https://schema.org",
				"@type": "Restaurant",
				"image": [
					"https://example.com/photos/16x9/photo.jpg"
				],
				"@id": "https://pizza-love.co.uk",
				"name": "PizzaLove",
				"address": {
					"@type": "PostalAddress",
					"streetAddress": "<?php echo get_field('contact_address_1', 'option').', '. get_field('contact_address_3', 'option'); ?>",
					"addressLocality": "<?php echo get_field('contact_town', 'option'); ?>",
					"addressRegion": "<?php echo get_field('contact_region', 'option'); ?>",
					"postalCode": "<?php echo get_field('contact_postcode', 'option'); ?>",
					"addressCountry": "<?php echo get_field('contact_country', 'option'); ?>"
				},
				"geo": {
					"@type": "GeoCoordinates",
					"latitude": 
					"longitude": 
				},
				"url":"https://pizza-love.co.uk",
				"telephone": "",
				"servesCuisine": "Pizza",
				"priceRange": "$",
				"menu": "https://pizza-love.co.uk/menu",
				"acceptsReservations": "false"
			}
		</script>
	</head>
	<body <?php body_class(); ?>>
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFFS8BK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<header>
			<nav class="fixed-nav-bar">
				<div id="menu" class="menu">
					<a class="logo" href="<?php echo site_url(); ?>" title="PizzaLove Home">
						<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.svg'; ?>" class="site-logo" alt="PizzaLove Logo">
					</a>
					<div class="menus">
						<ul class="social menu-items">
							<li class="phone"><a href="tel:<?php echo get_field('contact_phone', 'option'); ?>" title="Order by phone"><?php echo get_field('contact_phone', 'option'); ?></a></li>
<?php
	if(get_field('social_facebook', 'option') != "") {
		echo '<li><a href="'.get_field('social_facebook', 'option').'" target="_blank" title="PizzaLove on Facebook"><i class="fab fa-facebook-f fa-lg"></i></a></li>';
	}
	if(get_field('social_twitter', 'option') != "") {
		echo '<li><a href="https://twitter.com/'.get_field('social_twitter', 'option').'" target="_blank" title="PizzaLove on Twitter"><i class="fab fa-twitter fa-lg"></i></a></li>';		
	}
	if(get_field('social_instagram', 'option') != "") {
		echo '<li><a href="'.get_field('social_instagram', 'option').'" target="_blank" title="PizzaLove on Instagram"><i class="fab fa-instagram fa-lg"></i></a></li>';
	}
?>
						</ul>
<?php
	wp_nav_menu(array('theme_location' => 'main-menu', 'menu_id' => 'nav', 'menu_class' => 'menu-items', 'container' => ''));
?>
					</div>
				</div>
			</nav>
			<nav id="drop-menu">
				<div id="menu-toggle">
					<input type="checkbox">
				    <span></span>
				    <span></span>
				    <span></span>
					<?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_id' => 'mobile-nav', 'menu_class' => 'menu-items', 'container' => '')); ?>
				</div>
			</nav>
			<div id="mobile-logo">
				<a class="logo" href="<?php echo site_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.svg'; ?>" class="site-logo" alt="PizzaLove Logo">
				</a>
			</div>
		</header>