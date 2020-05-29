<?php
/**
 * Template name: Home
 */
get_header();
?>

<!-- <section class="loading">
    <?php //get_template_part( 'template-parts/svg' ); ?>

    <h1>H&P Architects</h1>
</section> -->

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
                <a href="<?php the_permalink(); ?>" class="image">
                    <?php the_post_thumbnail( 'full' ) ?>
                </a>

                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, ut.</p>
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php echo get_the_title(); ?>
                        </a>
                    </h2>
                    <span>/</span>
                    <span>2020</span>
                </div>
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