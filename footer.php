<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gsk
 */

?>
	</main>
	<footer id="colophon" class="site-footer">
		<?php if ( ! is_category( 'projects' ) ) : ?>
			<a href="<?php echo home_url( '/projects' ); ?>">View all projects <ion-icon name="arrow-forward"></ion-icon></a>
		<?php else : ?>
			<a href="<?php echo home_url( '/publications' ); ?>">View publications <ion-icon name="arrow-forward"></ion-icon></a>
		<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
