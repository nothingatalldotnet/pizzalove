<?php
	/**
	* Template Name: Home page
	*/
	get_header();
?>
	<div class="content">
		<div class="block-cta">
<?php
if(have_posts()) {
	while(have_posts()) {
		the_post(); 
		$banner_title_black = get_field('banner_title_blank');
		$banner_title_red = get_field('banner_title_red');
		$banner_text = get_field('banner_text');
		$banner_cta_link = get_field('banner_cta_button_link');
		$banner_cta_text = get_field('banner_cta_button_text');
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
			<img src="/wp-content/themes/pizza-love/assets/images/pizza.png">
			<div>
				<h2 class="title"><?php echo $banner_title_black; ?> <span class="red"><?php echo $banner_title_red; ?></span></h2>
				<?php echo $banner_text; ?><br><br>
				<a href="<?php echo $banner_cta_link; ?>" class="red-button"><?php echo $banner_cta_text; ?></a>
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
			$this_pizza_add_to_cart = site_url()."basket?add-to-cart=".$this_pizza_id;
?>
				<article>
					<img src="/wp-content/themes/pizza-love/assets/images/pizza.png">
					<div>
						<h3><?php echo $this_pizza_title; ?></h3>
						<p><?php echo $this_pizza_short_text; ?></p>
						<a href="<?php echo $this_pizza_add_to_cart; ?>" class="red-button">Buy Now</a>
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

		<div class="block-times padded">
			<h2><?php echo $opening_title_black; ?>  <span class="red"><?php echo $opening_title_red; ?></span></h2>
		</div>

		<div class="block-signup padded">
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


	</div>
<?php
	get_footer();