<?php
/**
 * Template name: Home
 */
get_header();
?>

<section class="loading">
    <img src="<?= IMG . '/logo.jpg' ?>" alt="H&P Architect">

    <h1>H&P Architects</h1>
</section>

<section class="banner swiper-container">
    <div class="banner-slider swiper-wrapper">
        <?php
        $args = [
            'post_type'      => 'post',
            'category_name'  => 'projects',
            'posts_per_page' => 5
        ];

        $projects = new WP_Query($args);

        if ( $projects->have_posts() ) :
            while ( $projects->have_posts() ) :
                $projects->the_post();
        ?>
            <div class="item swiper-slide">
                <?php the_post_thumbnail( 'full' ) ?>
            </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <div class="swiper-scrollbar"></div>
</section>

<?php
get_footer();