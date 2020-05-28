<section class="header-panel" id="projects">
	<div class="projects-slider">
	<?php
	$args = [
		'post_type'      => 'post',
		'category_name'  => 'projects',
		'posts_per_page' => 8
	];

	$projects = new WP_Query($args);

	if ( $projects->have_posts() ) :
		while ( $projects->have_posts() ) :
			$projects->the_post();
	?>
		<div class="item">
			<div class="item-parallax">
				<?php the_post_thumbnail( 'full' ) ?>
			</div>

			<div class="item-content">
				<h2><?php the_title(); ?> - 2020</h2>
				<a href="<?php the_permalink() ?>">view project</a>
			</div>
		</div>
	<?php
		endwhile;
	endif;
	?>
	</div>
</section>