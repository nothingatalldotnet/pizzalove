<?php
	get_header();

	if(have_posts()) {
		while(have_posts()) {
			the_post();
			$this_title = get_the_title();
?>
	<div class="content">
		<div class="single-product-wrapper padded">
			<h1><?php echo $this_title; ?></h1>

			<div>
<?php
	the_content();
?>
			</div>
		</div>
	</div>
<?php
		}
	}
	get_footer();
