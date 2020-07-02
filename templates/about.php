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
						<h2><?= $intros[$i][ 'title' ] ?> <i class="fas fa-sort-down"></i></h2>

						<div class="content"><?= $intros[$i][ 'content' ] ?></div>
					</div>

			<?php endfor; ?>
			</div>

			<div class="col-md-5">
			<?php for ( $i=$x; $i<count( $intros ); $i++ ) : ?>

					<div class="item">
						<h2><?= $intros[$i][ 'title' ] ?> <i class="fas fa-sort-down"></i></h2>

						<div class="content"><?= $intros[$i][ 'content' ] ?></div>
					</div>

			<?php endfor; ?>
			</div>
			
		</div>
	</div>
</section>

<?php
get_footer();