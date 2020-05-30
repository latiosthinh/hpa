<?php
/**
 * Template name: Partners
 */
get_header();
?>

<section class="partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Partners</h1>
            </div>
        </div>

        <div class="row partners-list">
            <?php
            $partners = rwmb_meta( 'image' );
            if ( ! empty( $partners ) ) :
                foreach ( $partners as $p ) :
            ?>
                <div class="col-md-3 item">
                    <img src="<?= $p['full_url'] ?>">
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>


<?php
get_footer();