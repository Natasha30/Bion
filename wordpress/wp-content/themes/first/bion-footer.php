<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/bion-footer.css' />
<?php $locations = get_nav_menu_locations();?>

<footer>
<section class="footer">
<div class="title">
	<p class="TitleName">bion<br>terrarium<br>center</p>
</div>
	<nav class="footerNav">
	<?php 
		$menuId = $locations['company'];
		$menu = wp_get_nav_menu_object($menuId);
		?>
		<div class="fotterTitle"><?php echo $menu->name; ?></div>
		<div class="fotterContent">
		<?php wp_nav_menu(array('theme_location' => 'company')); ?>
			
		</div>
	</nav>
	 <nav class="footerNav">
	<?php 
		$menu_Id = $locations['more about bion'];
		$menu = wp_get_nav_menu_object($menu_Id);
		?>
		<div class="fotterTitle"><?php echo $menu->name; ?></div>
		<div class="fotterContent">
		<?php wp_nav_menu(array('theme_location' => 'more about bion')); ?>
			
		</div>
	</nav> 
	<nav class="footerNav">
	<?php 
		$menuId = $locations['follow us'];
		$menu = wp_get_nav_menu_object($menuId);
		?>
		<div class="fotterTitle"><?php echo $menu->name; ?></div>
		<div class="fotterContent">
		<?php wp_nav_menu(array('theme_location' => 'follow us')); ?>
			
		</div>
	</nav> 
	<div class="information">
		<div class="informationTitle">
		<?php
		 $query = new WP_Query(array(
		 	'page_id' => 56));

		 while ($query->have_posts()) {
		 	$query->the_post();
		 	the_title();
		 	wp_reset_postdata();
		 }
		 ?>
		</div>
		<?php
		 $query = new WP_Query(array(
		 	'page_id' => 56));

		 while ($query->have_posts()) {
		 	$query->the_post();
		  	the_content();
		 	wp_reset_postdata();
		 }
		 ?>
	</div>
	<div class="logo-WR">
	<p class="made">Made with love by</p>
	<img src="http://localhost/wordpress/wp-content/uploads/2017/09/logo-white-red-bw.png" alt="whiteRed" class="WhiteRed">
	<div>
	</section>
</footer>

