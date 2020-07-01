<?php
/**
 * Category Template: Projects
 */
get_header();
?>

<section id="publications">
	<div class="container">
		<div class="row content-width">
			<?php while ( have_posts() ) : the_post(); ?>

					<div class="item col-md-3">
						<a class="item-image" href="<?php the_permalink() ?>">
							<?php the_post_thumbnail( 'thumb-270' ) ?>
						</a>

						<div class="item-content">
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						</div>

						<a class="item-readmore" href="<?php the_permalink() ?>">+</a>
					</div>

			<?php endwhile; ?>

			<?php 
			// the_posts_pagination([
			// 	'mid_size'  => 2,
			// 	'prev_text' => '<ion-icon name="arrow-back"></ion-icon>',
			// 	'next_text' => '<ion-icon name="arrow-forward"></ion-icon>',
			// ]); 
			?>
		</div>
	</div>
</section>

<?php
get_footer();