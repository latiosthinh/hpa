<?php
/**
 * Template name: Projects
 */
get_header();
?>

<section id="projects">
	<div class="projects container">
		<div class="row projects-filter">
			<div class="col-md-3">
				<?php echo do_shortcode( '[facetwp facet="categories"]' )  ?>
			</div>

			<div class="col-md-3">
				<?php echo do_shortcode( '[facetwp facet="project_year"]' )  ?>
			</div>

			<div class="col-md-3">
				<?php echo do_shortcode( '[facetwp facet="project_location"]' )  ?>
			</div>

			<div class="col-md-3">
				<?php echo do_shortcode( '[facetwp facet="project_other"]' )  ?>
			</div>
		</div>

		<div class="row">
		<?php 
		$args = [
			'post_type'      => 'project',
			'posts_per_page' => -1,
			'facetwp'        => true
		];

		$projects = new WP_Query($args);

		if ( $projects->have_posts() ) :
			echo do_shortcode( '[facetwp template="example"]' );
		endif;
		?>
		</div>
		
	</div>
</section>

<?php
get_footer();