<?php
	get_header();
?>
	<div class="content">
		<div class="block-cta">
			<img src="<?php echo site_url(); ?>/wp-content/themes/pizza-love/assets/images/pizza.png">
			<div>
				<h2 class="title">404!</h2>
				<?php echo get_field('404_text','option'); ?><br><br>
				<a href="<?php echo site_url(); ?>" class="red-button">Home</a>
			</div>
		</div>
<?php
	echo '	</div>';
	echo '</div>';
	get_footer();