<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hpa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script src="https://kit.fontawesome.com/be9a4f74a7.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hpa' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="heading" data-width="66px">
				<span class="heading-expand h" data-max-width="330px">H</span>
				<div>
					<a class="link-to-home" href="<?php echo home_url() ?>">ome / Trang chủ</a>
					<a class="link-to-about" href="<?php echo home_url( '/about' ) ?>">&P Architects</a>
				</div>
			</div>

			<div class="heading" data-width="55px">
				<span class="heading-expand p" data-max-width="420px">P</span>
				<div>
					<a class="link-to-project" href="<?php echo home_url( '/projects' ) ?>">rojects / Dự án</a>
					<a class="link-to-publications" href="<?php echo home_url( '/publications' ) ?>">uplications / Ấn phẩm</a>
				</div>
			</div>

			<div class="heading" data-width="66px">
				<span class="heading-expand a" data-max-width="980px">A</span>
				<div>
					<a class="link-to-architect-people" href="<?php echo home_url( '/peoples-life' ) ?>">rchitecture for people’s life / Kiến trúc vị dân sinh</a>
					<a class="link-to-architect-foundation" href="<?php echo home_url( '/asr' ) ?>">rchitecture & social responsibility Foundation / Quỹ ASR</a>
				</div>
			</div>

			<div class="site-social">
				<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
				<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
				<a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
			</div>
		</div>

		<ul class="site-socials">
			<li>
				<a href="#"><i class="fab fa-facebook-square"></i></a>
			</li>
			<li>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</li>
			<li>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</li>
		</ul>

	</header>

	<main>