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
				<h2 class="txt-uppercase">Out vision / Tầm nhìn</h2>
				<?= rwmb_meta( 'vision' ) ?>

				<h2 class="txt-uppercase">Leadership / Con người</h2>
				<?= rwmb_meta( 'leadership' ) ?>

				<h2 class="txt-uppercase">Donate / Ủng hộ</h2>
				<?= rwmb_meta( 'donate' ) ?>
			</div>

			<div class="col-md-6">
				<h2 class="txt-uppercase">ASR Projects / Dự án ASR</h2>

				<div class="row">
					<div class="col-md-6">
						<h3 class="txt-uppercase">Y tế - giáo dục</h3>
						<?php
						$args = [
							'post_type' => 'asr',
							'tax_query' => [
								[
									'taxonomy' => 'asr-category',
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

					<div class="col-md-6">
						<h3 class="txt-uppercase">Nhà ở mô-đun</h3>
						<?php
						$args = [
							'post_type'      => 'asr',
							'posts_per_page' => -1,
							'tax_query'      => [
								[
									'taxonomy' => 'asr-category',
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
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();