<?php
	/**
	* Template Name: Home page
	*/
	get_header();

	$is_open = get_field('current_status','option');
	$is_taking_orders = get_field('accept_online_orders','option');

	if(have_posts()) {
		while(have_posts()) {
			the_post(); 
			$banner_title_black = get_field('banner_title_blank');
			$banner_title_red = get_field('banner_title_red');
			$banner_text = get_field('banner_text');
			$banner_cta_link = get_field('banner_cta_button_link');
			$banner_cta_text = get_field('banner_cta_button_text');
			$banner_cta_phone = get_field('banner_cta_button_phone_number');
			$banner_cta_phone_text = get_field('banner_cta_button_phone_text');
			$banner_image = get_field('banner_image');
			$about_title_black = get_field('about_title_black');
			$about_title_red = get_field('about_title_red');
			$about_text = get_field('about_text');
			$about_cta_link = get_field('about_cta_button_link');
			$about_cta_text = get_field('about_cta_button_text');
			$about_image_1 = get_field('about_image_1');
			$about_image_2 = get_field('about_image_2');
			$contact_title_black = get_field('contact_title_black');
			$contact_title_red = get_field('contact_title_red');
			$contact_text = get_field('contact_text'); 
			$opening_title_black = get_field('opening_times_title_black');
			$opening_title_red = get_field('opening_times_title_red');
			$signup_title_black = get_field('signup_title_black');
			$signup_title_red = get_field('signup_title_red');
		}
	}
?>

	<div class="content">
		<div class="block-cta">
			<img src="<?php echo site_url(); ?>/wp-content/themes/pizza-love/assets/images/pizza.png">
			<div>
				<h2 class="title"><?php echo $banner_title_black; ?> <span class="red"><?php echo $banner_title_red; ?></span></h2>
				<?php echo $banner_text; ?><br><br>
				<a href="<?php echo $banner_cta_link; ?>" class="red-button"><?php echo $banner_cta_text; ?></a>
				<a href="tel:<?php echo $banner_cta_phone; ?>" class="red-button"><?php echo $banner_cta_phone_text; ?></a>
			</div>
		</div>

<?php
	// POPULAR
	if(have_rows('featured_repeater')) {
		$featured_title_black = get_field('featured_title_black');
		$featured_title_red = get_field('featured_title_red');
?>
		<div class="block-popular padded">
			<h2><?php echo $featured_title_black; ?> <span class="red"><?php echo $featured_title_red; ?></span></h2>
			<div class="carousel">
<?php
		while(have_rows('featured_repeater')) {
			the_row();
			$this_pizza_id = get_sub_field('pizza');
			$this_pizza_short_text = get_sub_field('short_text');
			$this_pizza = wc_get_product($this_pizza_id);
			$this_pizza_title = $this_pizza->get_name();
			$this_pizza_url = $this_pizza->get_permalink();
			$this_pizza_add_to_cart = site_url()."/basket?add-to-cart=".$this_pizza_id;
			$this_pizza_image = wp_get_attachment_url($product->get_image_id());
?>
				<article>
					<img src="/wp-content/themes/pizza-love/assets/images/pizza.png">
					<div>
						<h3><?php echo $this_pizza_title; ?></h3>
						<p><?php echo $this_pizza_short_text; ?></p>
<?php
			if((!$is_open)&&(!$is_taking_orders)) {
				echo '<a href="'.$this_pizza_url.'" class="black-button">More Info</a>';
			} else {
				echo '<a href="'.$this_pizza_add_to_cart.'" class="red-button">Buy Now</a>';
			}
?>
					</div>
				</article>
<?php
		}
?>
			</div>
		</div>
<?php
	}
?>
		<div class="block-about padded">
			<h2><?php echo $about_title_black; ?>  <span class="red"><?php echo $about_title_red; ?></span></h2>
			<div>
				<?php echo $about_text; ?>
				<a href="<?php echo $about_cta_link; ?>" class="red-button"><?php echo $about_cta_text; ?></a></p>
			</div>
		</div>

		<div class="block-signup">
			<h2><?php echo $signup_title_black; ?>  <span class="red"><?php echo $signup_title_red; ?></span></h2>
			<div id="mc_embed_signup" class="notice">
				<form action="https://pizza-love.us10.list-manage.com/subscribe/post?u=e604c7e138bbb47c93fcd753b&amp;id=c30d23d4e8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email address" required>
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e604c7e138bbb47c93fcd753b_c30d23d4e8" tabindex="-1" value=""></div>
						<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</div>
				</form>
			</div>
		</div>

		<div class="block-map padded">
			<h2><?php echo $contact_title_black; ?> <span class="red"><?php echo $contact_title_red; ?></span></h2>
			<div class="flex">
				<div class="left">
					<div class="gmap_canvas">
						<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=ol3%206hx&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					</div>
				</div>
				<div class="right"><?php echo $contact_text; ?>
					<ul>
<?php
		if(get_field('contact_email', 'option') != "") {
			echo '<li><i class="fas fa-envelope"></i><span><a href="email:'.get_field("contact_email", "option").'" title="Order by email">'.get_field("contact_email", "option").'</a></span></li>';
		}
		if(get_field('contact_phone', 'option') != "") {
			echo '<li><i class="fas fa-phone"></i><span><a href="tel:'.get_field("contact_phone", "option").'" title="Order by phone">'.get_field("contact_phone", "option").'</a></span></li>';
		}
		if(get_field('contact_address_1', 'option') != "") {
			echo '<li><i class="fas fa-store"></i><span>'.get_field("contact_address_1", "option");
			if(get_field('contact_address_2', 'option') != "") {
				echo '<br>'.get_field("contact_address_2", "option");
			}
			if(get_field('contact_address_3', 'option') != "") {
				echo '<br>'.get_field("contact_address_3", "option");
			}
			if(get_field('contact_town', 'option') != "") {
				echo '<br>'.get_field("contact_town", "option");
			}
			if(get_field('contact_country', 'option') != "") {
				echo '<br>'.get_field("contact_country", "option");
			}
			if(get_field('contact_postcode', 'option') != "") {
				echo '<br>'.get_field("contact_postcode", "option");
			}
			echo '</span></li>';
		}
?>					</ul>

					<h3 id="opening-times"><?php echo $opening_title_black; ?>  <span class="red"><?php echo $opening_title_red; ?></span></h3>
					<table>
						<tr>
							<td>Monday</td>
<?php
	$open = "Closed";
	$closed = "Closed";
	$monday_group = get_field('monday', 'option');
	if($monday_group['openclosed']) {
		$open  = $monday_group['open'];
		$closed  = $monday_group['close'];
	}
?>
							<td><?php echo $open; ?></td>
							<td><?php echo $closed; ?></td>
						</tr>
						<tr>
							<td>Tuesday</td>
<?php
	$open = "Closed";
	$closed = "Closed";
	$tuesday_group = get_field('tuesday', 'option');
	if($tuesday_group['openclosed']) {
		$open  = $tuesday_group['open'];
		$closed  = $tuesday_group['close'];
	}
?>
							<td><?php echo $open; ?></td>
							<td><?php echo $closed; ?></td>
						</tr>
						<tr>
							<td>Wednesday</td>
<?php
	$open = "Closed";
	$closed = "Closed";
	$wednesday_group = get_field('wednesday', 'option');
	if($wednesday_group['openclosed']) {
		$open  = $wednesday_group['open'];
		$closed  = $wednesday_group['close'];
	}
?>
							<td><?php echo $open; ?></td>
							<td><?php echo $closed; ?></td>
						</tr>
						<tr>
							<td>Thursday</td>
<?php
	$open = "Closed";
	$closed = "Closed";
	$thursday_group = get_field('thursday', 'option');
	if($thursday_group['openclosed']) {
		$open  = $thursday_group['open'];
		$closed  = $thursday_group['close'];
	}
?>
							<td><?php echo $open; ?></td>
							<td><?php echo $closed; ?></td>
						</tr>
						<tr>
							<td>Friday</td>
<?php
	$open = "Closed";
	$closed = "Closed";
	$friday_group = get_field('friday', 'option');
	if($friday_group['openclosed']) {
		$open  = $friday_group['open'];
		$closed  = $friday_group['close'];
	}
?>
							<td><?php echo $open; ?></td>
							<td><?php echo $closed; ?></td>
						</tr>
						<tr>
							<td>Saturday</td>
<?php
	$open = "Closed";
	$closed = "Closed";
	$saturday_group = get_field('saturday', 'option');
	if($saturday_group['openclosed']) {
		$open  = $saturday_group['open'];
		$closed  = $saturday_group['close'];
	}
?>
							<td><?php echo $open; ?></td>
							<td><?php echo $closed; ?></td>
						</tr>
							<td>Sunday</td>
<?php
	$open = "Closed";
	$closed = "Closed";
	$sunday_group = get_field('sunday', 'option');
	if($sunday_group['openclosed']) {
		$open  = $sunday_group['open'];
		$closed  = $sunday_group['close'];
	}
?>
							<td><?php echo $open; ?></td>
							<td><?php echo $closed; ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php
	get_footer();