<?php
/**
 * Template name: About
 */
get_header();
?>

<section class="about">
	<div class="container">
		<div class="row">
			<?php
			$intros = rwmb_meta( 'about' );
			$x = ceil( count( $intros )/2 );
			?>

			<div class="col-md-5">
			<?php for ( $i=0; $i<$x; $i++ ) : ?>

					<div class="item">
						<h2><?= $intros[$i][ 'title' ] ?>
							<i class="fas fa-sort-down">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z"/></svg>
							</i>
						</h2>

						<div class="content"><?= $intros[$i][ 'content' ] ?></div>
					</div>

			<?php endfor; ?>
			</div>

			<div class="col-md-5">
			<?php for ( $i=$x; $i<count( $intros ); $i++ ) : ?>

					<div class="item">
						<h2><?= $intros[$i][ 'title' ] ?>
							<i class="fas fa-sort-down">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z"/></svg>
							</i>
						</h2>

						<div class="content"><?= $intros[$i][ 'content' ] ?></div>
					</div>

			<?php endfor; ?>
			</div>
			
		</div>
	</div>
</section>

<?php
get_footer();