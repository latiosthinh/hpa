<?php
/**
 * Template name: People
 */
get_header();
?>

<section class="people">
	<div class="container pad-0">
		<div class="row">
			<div class="col-md-12">
				<h2 class="txt-center">Philosophy / Triết lý</h2>

				<p class="txt-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione distinctio? Quia eaque expedita fugit veniam numquam cumque a, officiis assumenda, magnam necessitatibus similique, ut at eum error dicta ipsa.</p>
			</div>
		</div>
		
		<h2 class="txt-center">Essential spaces/không gian thiết yếu</h2>
		<div class="row">
			<div class="col-md-4">
				<h3 class="txt-center">Y tế - giáo dục</h3>
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
				<h3 class="txt-center">Nhà ở mô-đun</h3>
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
				<h3 class="txt-center">KG thân thiện</h3>
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
</section>

<?php
get_footer();