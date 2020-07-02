<?php
/**
 * Category Template: Projects
 */
get_header();
?>

<section id="projects">
	<div class="projects container">
		<div class="row projects-filter">
			<div class="col-md-3">
				<select>
					<option value="">Văn phòng và Thương mại</option>
					<option value="">Khách sạn và Resorts</option>
					<option value="">Nhà ở</option>
					<option value="">Y tế</option>
					<option value="">Quy hoạch và thiết kế đô thị</option>
					<option value="">Loại khác</option>
				</select>
			</div>

			<div class="col-md-3">
				<select>
					<option value="">Năm 2020</option>
					<option value="">Năm 2019</option>
					<option value="">Năm 2018</option>
				</select>
			</div>

			<div class="col-md-3">
				<select>
					<option value="">Hà Nội</option>
					<option value="">Tp. Hồ Chí Minh</option>
					<option value="">Đà Nẵng</option>
					<option value="">Nha Trang</option>
				</select>
			</div>

			<div class="col-md-3">
				<select>
					<option value="">Dự án chọn lọc</option>
					<option value="">Dự án đang triển khai</option>
				</select>
			</div>
		</div>

		<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="item col-md-3">
				<a class="item-image" href="<?php the_permalink() ?>">
					<?php the_post_thumbnail( 'thumb-270' ) ?>
				</a>

				<div class="item-content">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<span><?php the_date( 'Y' ); ?></span>
				</div>

				<a class="item-readmore" href="<?php the_permalink() ?>">+</a>
			</div>
		<?php endwhile; ?>
		</div>
		<?php
		// the_posts_pagination([
		// 	'mid_size'  => 2,
		// 	'prev_text' => '<ion-icon name="arrow-back"></ion-icon>',
		// 	'next_text' => '<ion-icon name="arrow-forward"></ion-icon>',
		// ]);
		?>
	</div>
</section>

<?php
get_footer();