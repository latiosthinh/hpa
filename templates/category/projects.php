<?php
/**
 * Category Template: Projects
 */
get_header();
?>

<section id="projects">
	<div class="projects-slider">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="item">
			<div class="item-parallax">
				<?php the_post_thumbnail( 'full' ) ?>
			</div>

			<div class="item-content">
				<div class="item-content__bg"></div>
				<div class="item-content__text">
					<h2><?php the_title(); ?> - 2020</h2>
					<a href="<?php the_permalink() ?>">view project</a>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	</div>
</section>

<?php
get_footer();