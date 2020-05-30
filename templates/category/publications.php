<?php
/**
 * Category Template: Projects
 */
get_header();
?>

<section id="publications">
	<div class="container">
		<div class="row content-width">
			<?php
			$i = 0;
			while ( have_posts() ) : 
				the_post();
			?>

				<?php if ( 0 === $i ) : ?>
					<div class="item col-md-12 top-news">
						<?php the_post_thumbnail( 'full' ) ?>

						<div class="item-content">
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

							<span><?php the_date(); ?></span>

							<p>
								Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, cum!
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nobis quaerat explicabo at, rem facere obcaecati magni assumenda quis quisquam.
							</p>
							
							<a href="<?php the_permalink() ?>"><i></i> Readmore</a>
						</div>
					</div>
				<?php else : ?>
					<div class="item col-md-4 item-small"
						data-aos="fade-up"
						data-aos-duration="1000"
						data-aos-delay="<?php echo $i*200 ?>"
						>
						<a class="item-image" href="<?php the_permalink() ?>">
							<?php the_post_thumbnail( 'thumb-275' ) ?>
						</a>

						<div class="item-content">
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<span>/ 2020</span>
						</div>
					</div>
				<?php endif; ?>

			<?php 
				$i+=1;
			endwhile;
			?>

			<?php the_posts_pagination([
				'mid_size'  => 2,
				'prev_text' => '<ion-icon name="arrow-back"></ion-icon>',
				'next_text' => '<ion-icon name="arrow-forward"></ion-icon>',
			]); ?>
		</div>
	</div>
</section>

<?php
get_footer();