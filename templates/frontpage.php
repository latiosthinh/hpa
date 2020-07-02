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
            <div class="item">
                <?php the_post_thumbnail( 'full' ) ?>
            </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php
get_footer();