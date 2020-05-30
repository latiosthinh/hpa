<?php
/**
 * Template name: Awards
 */

get_header();
?>

<section class="awards-banner" style="background-image:url(<?= IMG . '/awards.jpg' ?>)">
    <div class="container">
        <p>AWARDS</p>

        <h2>Two decades within architecture, milestones.</h2>

        <p>
            A few milestones along the way. <br>
            A selection of defining moments in an exploration <br>
            through time and the ever fluid description of space.
        </p>
    </div>
</section>

<section class="awards-timeline">
    <div class="awards-timeline__slider">
        <?php
        $args = [
            'post_type'      => 'post',
            'category_name' => 'projects',
            'posts_per_page' => 10
        ];

        $awards = new WP_Query($args);

        if ( $awards->have_posts() ) :
            while ( $awards->have_posts() ) : $awards->the_post();
        ?>
            <div class="item">
                <div class="description">
                    <span>2020</span>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor, ab.</p>
                </div>

                <a class="content" href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail( 'thumb-880' ) ?>

                    <h2><?php the_title(); ?></h2>
                </a>
            </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php
get_footer();