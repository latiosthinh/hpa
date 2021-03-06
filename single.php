<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hpa
 */

get_header();
?>

<div class="container content-single">

<?php while ( have_posts() ) : the_post(); ?>

	<h1><?= the_title(); ?></h1>

	<?php the_post_thumbnail( 'full' ) ?>

	<div class="row">
		<?php if ( rwmb_meta( 'location' ) || rwmb_meta( 'client' ) || rwmb_meta( 'area' ) || rwmb_meta( 'status' ) ) : ?>
		<div class="col-md-4 description-project">
			<div class="row">
				<div class="col-md-12">
					<h3>Descriptions.</h3>
				</div>

				<div class="col-md-10">
					<?php if ( rwmb_meta( 'location' ) ) : ?>
					<h4>Location</h4>
					<p><?= rwmb_meta( 'location' ) ?></p>
					<?php endif; ?>
					<?php if ( rwmb_meta( 'client' ) ) : ?>
					<h4>Client</h4>
					<p><?= rwmb_meta( 'client' ) ?></p>
					<?php endif; ?>
					<?php if ( rwmb_meta( 'area' ) ) : ?>
					<h4>Area</h4>
					<p><?= rwmb_meta( 'area' ) ?></p>
					<?php endif; ?>
					<?php if ( rwmb_meta( 'status' ) ) : ?>
					<h4>Status</h4>
					<p><?= rwmb_meta( 'status' ) ?></p>
					<?php endif; ?>
					<?php if ( rwmb_meta( 'designer' ) ) : ?>
					<h4>Designers</h4>
					<p><?= rwmb_meta( 'designer' ) ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<div class="col-md-8 content-single__text">
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; ?>
</div>

<?php
get_footer();
