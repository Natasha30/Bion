<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/navmenu.css' />



<nav class="menu-main">

<?php $locations = get_nav_menu_locations();?>
<?php 
		$menuId = $locations['navmenu'];
		$menu = wp_get_nav_menu_object($menuId);
		?>
		<?php wp_nav_menu(array('theme_location' => 'navmenu')); ?>

		<button class="price_list" style="margin-left: 635px; margin-top: -24px;">request price-list</button>
		
</nav>