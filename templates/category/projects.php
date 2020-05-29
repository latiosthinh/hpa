<?php
/**
 * Category Template: Projects
 */
get_header();
?>

<section id="projects">
	<div class="archive-header container pad-0">
		<h2>H&P Architects.</h2>
		<p>A comprehensive collection of projects completed by the office from 1998 to the current day.</p>

		<h4>360 APPROACH WITH A WIDE <br> RANGE OF SERVICES</h4>

		<ion-icon name="arrow-down-outline"></ion-icon>
	</div>

	<div class="projects container pad-0">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="item col-md-7"
				data-aos="fade-up"
				data-aos-duration="1000"
				>
				<a class="item-image" href="<?php the_permalink() ?>">
					<?php the_post_thumbnail( 'full' ) ?>
				</a>

				<div class="item-content">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, cum!</p>
					<span>/ 2020</span>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</section>

<?php
get_footer();