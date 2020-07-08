<?php
	get_header();

	$this_title = get_the_title();
?>
	<div class="content">
		<div>
			<h2><?php echo $this_title; ?></h2>
		</div>
	</div>
<?php
	get_footer();