<?php
	get_header();
?>
	<div class="content">
		<div class="block-cta">
			<img src="<?php echo site_url(); ?>/wp-content/themes/pizza-love/assets/images/pizza.png">
			<div>
				<h2 class="title">404!</h2>
				<p><?php echo get_field('404_text','option'); ?></p><br><br>
				<a href="<?php echo site_url(); ?>" class="red-button">PIZZA ME!</a>
			</div>
		</div>
<?php
	echo '	</div>';
	echo '</div>';
	get_footer();