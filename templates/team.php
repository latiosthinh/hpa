<?php
/**
 * Template name: Team
 */
get_header();
?>

<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex">
                <?php get_template_part( 'template-parts/svg' ) ?>
            </div>
        </div>

        <div class="row founders">
            <div class="col-md-12">
                <h2>The founders</h2>
            </div>
            <?php
            $founders = rwmb_meta( 'founder' );
            if ( ! empty( $founders ) ) :
                foreach ( $founders as $s ) :
            ?>
                <div class="col-md-4">
                    <div class="item">
                        <img src="<?= wp_get_attachment_url( $s['image_founder'][0] ); ?>">
                        <h3><?= $s['name_founder']  ?></h3>
                        <p><?= $s['position_founder'] ?></p>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>

        <div class="row members">
            <div class="col-md-12">
                <h2>The members</h2>
            </div>
            <?php
            $members = rwmb_meta( 'member' );
            if ( ! empty( $members ) ) :
                foreach ( $members as $s ) :
            ?>
                <div class="col-md-3">
                    <div class="item">
                        <img src="<?= wp_get_attachment_url( $s['image_member'][0] ); ?>">
                        <h3><?= $s['name_member']  ?></h3>
                        <p><?= $s['position_member'] ?></p>
                    </div>
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