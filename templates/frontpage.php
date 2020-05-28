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

<section class="banner">
    <div class="banner-slider">
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
            <a href="<?php the_permalink(); ?>" class="item">
                <?php the_post_thumbnail( 'full' ) ?>
                <h2>
                    <ion-icon name="arrow-back"></ion-icon>
                    <?php echo get_the_title(); ?>
                    <ion-icon name="arrow-forward"></ion-icon>
                </h2>
            </a>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php
get_footer();