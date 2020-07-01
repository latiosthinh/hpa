<?php
/**
 * Template name: ARS
 */
get_header();
?>

<section class="ars">
	<div class="container pad-0">
		<div class="row">
			<div class="col-md-5 col-left">
				<h2>Out vision / Tầm nhìn</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione distinctio? Quia eaque expedita fugit veniam numquam cumque a, officiis assumenda, magnam necessitatibus similique, ut at eum error dicta ipsa.</p>

				<h2>Leadership / Con người</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione distinctio? Quia eaque expedita fugit veniam numquam cumque a, officiis assumenda, magnam necessitatibus similique, ut at eum error dicta ipsa.</p>

				<h2>Donate / Ủng hộ</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione distinctio? Quia eaque expedita fugit veniam numquam cumque a, officiis assumenda, magnam necessitatibus similique, ut at eum error dicta ipsa.</p>
			</div>

			<div class="col-md-6">
				<h2>ASR Projects / Dự án ASR</h2>

				<div class="row">
					<div class="col-md-6">
						<h3>Y tế - giáo dục</h3>
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

					<div class="col-md-6">
						<h3>Nhà ở mô-đun</h3>
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