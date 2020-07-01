<?php
/**
 * Template name: People
 */
get_header();
?>

<section class="people">
	<div class="container pad-0">
		<div class="row">
			<div class="col-md-4">
				<h2>Philosophy / Triết lý</h2>

				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione distinctio? Quia eaque expedita fugit veniam numquam cumque a, officiis assumenda, magnam necessitatibus similique, ut at eum error dicta ipsa.</p>
			</div>

			<div class="col-md-8">
				<div class="row">
					<div class="col-md-4">
						<h2>Y tế - giáo dục</h2>
						<?php
						$args = [
							'post_type' => 'post',
							'posts_per_page' => 5,
						];

						$projects = new WP_Query($args);

						if ( $projects->have_posts() ) :
							while ( $projects->have_posts() ) :
								$projects->the_post();
						?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'thumb-500' ) ?>
						</a>
						<?php
							endwhile;
						endif;
						?>
					</div>

					<div class="col-md-4">
						<h2>Nhà ở mô-đun</h2>
						<?php
						$args = [
							'post_type' => 'post',
							'posts_per_page' => 5,
						];

						$projects = new WP_Query($args);

						if ( $projects->have_posts() ) :
							while ( $projects->have_posts() ) :
								$projects->the_post();
						?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'thumb-500' ) ?>
						</a>
						<?php
							endwhile;
						endif;
						?>
					</div>

					<div class="col-md-4">
						<h2>KG thân thiện</h2>
						<?php
						$args = [
							'post_type' => 'post',
							'posts_per_page' => 5,
						];

						$projects = new WP_Query($args);

						if ( $projects->have_posts() ) :
							while ( $projects->have_posts() ) :
								$projects->the_post();
						?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'thumb-500' ) ?>
						</a>
						<?php
							endwhile;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();