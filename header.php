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

	<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-barba="wrapper">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hpa' ); ?></a>
	<div class="cursor">
		<div class="cursor-link"></div>
	</div>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="heading" data-width="33px">
				<span class="heading-expand h">H</span>
				<div>
					<a class="link-to-home" href="<?php echo home_url() ?>">ome / Trang chủ</a>
					<a class="menu-trigger" data-href="#site-navigation">&P Architects</a>
				</div>
			</div>

			<div class="heading" data-width="33px">
				<span class="heading-expand p">P</span>
				<div>
					<a class="link-to-project" href="<?php echo home_url( '/projects' ) ?>">rojects / Dự án</a>
					<a class="link-to-publications" href="<?php echo home_url( '/publications' ) ?>">uplications / Ấn phẩm</a>
				</div>
			</div>

			<div class="heading" data-width="33px">
				<span class="heading-expand a">A</span>
				<div>
					<a class="link-to-architect-people" href="#people">rchitecture for people’s life / Kiến trúc vị dân sinh</a>
					<a class="link-to-architect-foundation" href="#foundation">rchitecture & social responsibility Foundation / Quỹ ASR</a>
				</div>
			</div>

			<div class="site-social">
				<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
				<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
				<a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation container-fluid">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hpa' ); ?></button>
			<?php
			wp_nav_menu(
				[
					'theme_location'  => 'menu-1',
					'menu_id'         => 'primary-menu',
					'container'       => 'div',
					'container_class' => 'container',
				]
			);
			?>
		</nav>
	</header>

	<?php
	// get_template_part( 'template-parts/header/projects' );
	// get_template_part( 'template-parts/header/publications' );
	// get_template_part( 'template-parts/header/people' );
	// get_template_part( 'template-parts/header/foundation' );
	?>

	<main data-barba="container" data-barba-namespace="home">