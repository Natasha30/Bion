<?php
/* Template Name: discounts */
?>
<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/discounts.css' />

<section class="discounts">
	<div class="discounts-img-left"><img src='http://localhost/wordpress/wp-content/uploads/2017/09/uroplatus-phantasticus.png' alt="decor" width: 253px; height: 445px; class="img-left"></div>
	<div class="discounts-content">
		<h3 class="discounts-title">
		<?php
		 $query = new WP_Query(array(
		 	'page_id' => 62));

		 while ($query->have_posts()) {
		 	$query->the_post();
		 	the_title();
		 	wp_reset_postdata();
		 }
		 ?></h3>
		 <div class="tex">
		<p class="content-text">
			<?php
		 $query = new WP_Query(array(
		 	'page_id' => 62));

		 while ($query->have_posts()) {
		 	$query->the_post();
		 	the_content();
		 	wp_reset_postdata();
		 }
		 ?>
		</p>
		</div>
		<section class="section-content">
		<div class="content-text-more">
			<h3 class="percentages">2.5%</h3>
			<p class="percentages-text">For all orders <br>above $15,000</p>
		</div>
		<div class="content-text-more">
			<h3 class="percentages">5.0%</h3>
			<p class="percentages-text">For all orders <br>above $20,000</p>
		</div>
		<div class="content-text-more">
			<h3 class="percentages">7.0%</h3>
			<p class="percentages-text">For all orders <br>above $25,000</p>
		</div>
	</div>
		<button class="learn-more">learn more</button>
	</section>
	<div class="discounts-img-right"><img src="http://localhost/wordpress/wp-content/uploads/2017/09/decor_right.png" alt="decor" width: 131px; height: 496px; class="img-right"></div>
</section>