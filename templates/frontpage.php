<?php
/**
 * \Template Name: Frontpage
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- <script src="https://kit.fontawesome.com/be9a4f74a7.js" crossorigin="anonymous"></script> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<section class="loading">
	<a href="<?php echo home_url( '/home' ); ?>">
		<img src="<?= IMG . '/logo.jpg' ?>" alt="H&P Architect">
		<h1>H&P Architects</h1>
	</a>
</section>

<?php
get_footer();