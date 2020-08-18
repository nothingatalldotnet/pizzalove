
		<footer>
			<a class="logo" href="#">
				<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.svg'; ?>" class="site-logo" alt="PizzaLove Logo">
			</a>
			<div class="footer-cred">
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
				Site by <a href="https://nothingatall.net" target="_blank" title="Site by nothingatall.net">nothingatall dot net</a>
			</div>
		</footer>
	</body>
<?php
	wp_footer(); 
?>	
</html>