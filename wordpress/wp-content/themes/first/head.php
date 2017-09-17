<? php 
/* Template Name: head */
?>

<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/head.css' />

<section class="header">
	    <img src='<?php echo get_field('logo_'); ?>' alt='logo' class="logo-img"/>
       <?php include __DIR__ . '/navmenu.php'; ?>
	<hr class="hr">
  <?php include __DIR__ . '/terra-center.php'; ?>
</section>
<hr class="line">
<?php include __DIR__ . '/history.php'; ?>
<?php include __DIR__ . '/advanteges.php'; ?>
<?php include __DIR__ . '/discounts.php'; ?>
<?php include __DIR__ . '/news.php'; ?>
<?php include __DIR__ . '/quetions.php'; ?>
<?php include __DIR__ . '/bion-footer.php'; ?>