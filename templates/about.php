<?php
/**
 * Template name: About
 */
get_header();
?>

<section class="about">
    <div class="container">
        <div class="row vision">
            <div class="col-md-4">
                <p class="grey">Our Visions and Values</p>
            </div>

            <div class="col-md-8">
                <p><?= rwmb_meta( 'vision' ) ?></p>
            </div>
        </div>

        <div class="row services">
            <div class="col-md-12">
                <h1>High-quality architectural services</h1>
            </div>
            <?php
            $services = rwmb_meta( 'services' );
            if ( ! empty( $services ) ) :
                foreach ( $services as $s ) :
            ?>
                <div class="col-md-4 item">
                    <h3><?= $s['title']  ?></h3>
                    <p><?= $s['detail'] ?></p>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>

    <img class="about-img" src="<?= IMG . '/banner-1.jpg' ?>">
</section>

<?php
get_footer();