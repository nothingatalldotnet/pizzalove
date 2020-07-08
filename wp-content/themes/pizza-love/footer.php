
			<footer>
<?php
	wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_id' => '', 'menu_class' => 'footer-items', 'container_class' => 'foot'));
	wp_nav_menu(array('theme_location' => 'footer-tiny-menu', 'menu_id' => '', 'menu_class' => 'footer-tiny-items', 'container_class' => 'tiny'));
?>
			</footer>
		</div>
	</body>
<?php
	wp_footer(); 
?>	
</html>