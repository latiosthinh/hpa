<?php
/**
 * Template name: Home
 */
get_header();
?>

<section class="loading">
	<img src="<?= IMG . '/logo.jpg' ?>" alt="H&P Architect">

	<h1>H&P Architects</h1>
</section>

<section class="banner">
	<div class="banner-slider">
		<?php
		$images = rwmb_meta( 'banner', array( 'size' => 'thumbnail' ) );
		foreach ( $images as $image ) :
		?>

		<img src="<?= $image['full_url'] ?>" />

		<?php endforeach; ?>
	</div>
</section>

<?php
get_footer();