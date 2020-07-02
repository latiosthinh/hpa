<?php
/**
 * Template name: Contact
 */

get_header();
?>

<section class="contact">
    <div class="container">
        <h2>Contact us</h2>
        
        <div class="row contact-info">
            <div class="col-md-6">
                <p class="grey">
                Feel free to email or call us to talk about your requirements <br>and find out more about what we can do for you.
                </p>
            </div>

            <div class="col-md-3">
                <p>
                    1256 Hanoi, 2nd floor,<br> Vincom Mega Mall Tower
                </p>
            </div>

            <div class="col-md-3 d-flex flex-column">
                <a href="mailto:support@hpa.com.vn">E. support@hpa.com.vn</a>
                <a href="tel:+84 0826101991">T. +84 0826101991</a>
            </div>
        </div>

        <div class="row map">
            <?php
            $icon = IMG . '/pin.png';
            $args = array(
                // 'width'        => '640px',
                'height'       => '500px',
                'zoom'         => 14,
                'marker'       => true,
                // 'marker_icon'  => $icon,
            );
            ?>

            <div class="col-md-12">
                <?php echo rwmb_meta( 'map', $args ); ?>
            </div>
        </div>
    </div>

</section>

<?php
get_footer();