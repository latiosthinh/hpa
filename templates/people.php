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

				<div class="txt-center col-md-10"><?= rwmb_meta( 'philosophy-content' ) ?></div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12 pad-0">
				<h2 class="txt-center">Essential spaces/không gian thiết yếu</h2>
			</div>
			<div class="col-md-4">
				<h3 class="txt-center">Y tế - giáo dục</h3>
				<?php
				$args = [
					'post_type'      => 'afpl',
					'tax_query' => [
						[
							'taxonomy' => 'afpl-category',
							'field'    => 'slug',
							'terms'    => 'y-te-giao-duc',
						]
					]
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
				wp_reset_postdata();
				?>
			</div>

			<div class="col-md-4">
				<h3 class="txt-center">Nhà ở mô-đun</h3>
				<?php
				$args = [
					'post_type'      => 'afpl',
					'tax_query' => [
						[
							'taxonomy' => 'afpl-category',
							'field'    => 'slug',
							'terms'    => 'nha-o-mo-dun',
						]
					]
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
				wp_reset_postdata();
				?>
			</div>

			<div class="col-md-4">
				<h3 class="txt-center">KG thân thiện</h3>
				<?php
				$args = [
					'post_type'      => 'afpl',
					'posts_per_page' => -1,
					'tax_query' => [
						[
							'taxonomy' => 'afpl-category',
							'field'    => 'slug',
							'terms'    => 'kg-than-thien',
						]
					]
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
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();