<?php
/**
 * Template name: Publications
 */
get_header();
?>

<section id="publications">
	<div class="container">
		<div class="row content-width">
		<?php 
		$args = [
			'post_type'      => 'post',
			'posts_per_page' => -1,
		];

		$projects = new WP_Query($args);

		if ( $projects->have_posts() ) :
			while ( $projects->have_posts() ) :
				$projects->the_post();
		?>
			<div class="item col-md-3">
				<a class="item-image" href="<?php the_permalink() ?>">
					<?php the_post_thumbnail( 'thumb-270' ) ?>
				</a>

				<div class="item-content">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>

				<a class="item-readmore" href="<?php the_permalink() ?>">+</a>

				<a href="<?php the_permalink() ?>" class="item-link"></a>
			</div>
		<?php 
			endwhile;
		endif;
		?>
		</div>
	</div>
</section>

<?php
get_footer();