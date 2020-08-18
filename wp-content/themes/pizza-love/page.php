<?php
	get_header();

	$this_title = get_the_title();
?>
	<div class="content">
		<div class="block-about padded">
			<h1><?php echo $this_title; ?></h1>
			<div>
<?php
	the_content();
?>
			</div>
		</div>
	</div>
<?php
	get_footer();