
<div class="card rounded-0 p-2 shadow mb-4 carouselHome">                        
    <?php
    $bgh_cat = velocitytheme_option('bigcarousel_home');
    // The Query
    $posts_query = new WP_Query(
        array(
            'post_type'         => 'post',
            'posts_per_page'    => 5,
            'cat'               => $bgh_cat,
        )
    );
    // The Loop
    $nm = 1;
    if ($posts_query->have_posts()) {
        echo '<div id="carouselHome" class="carousel slide carousel-fade" data-bs-ride="carousel">';
            echo '<div class="carousel-inner">';
            while ($posts_query->have_posts()) {
                $posts_query->the_post();
                ?>
                <div class="slideshow-post-item carousel-item  <?php echo ($nm == 1 ? 'active' : ''); ?>">
                    <div class="d-block position-relative" title="<?php echo get_the_title(); ?>">

                        <div class="ratio ratio-21x9 bg-light overflow-hidden">
                            <?php
                            if (has_post_thumbnail()) {
                                echo get_the_post_thumbnail( get_the_ID(), 'large', array( 'class' => 'w-100' ) );
                            } ?>
                        </div>

                        <div class="carousel-caption text-md-start text-center start-0 bottom-0 pb-3 p-2 p-md-3">
                            <a href="<?php echo get_the_permalink(); ?>" class="text-light bg-dark fs-6 d-inline-block p-2 px-md-3" style="--bs-bg-opacity: 0.90;">
                                <?php echo get_the_title(); ?>
                            </a>
                            <span class="bg-dark small mt-2 d-none d-md-inline-block p-2 px-md-3" style="--bs-bg-opacity: 0.90;">
                                <?php echo vdberita_limit_text(strip_tags(get_the_excerpt()), 35); ?>
                            </span>
                            <a href="<?php echo get_the_permalink(); ?>" class="d-none d-md-inline-block btn btn-light border-dark rounded-0 btn-sm mt-3 mb-2">Read More</a>
                        </div>

                    </div>
                </div>
                <?php
                $nm++;
            }
            $nm = 0;
            echo '</div>';
            echo '<div class="carousel-indicators m-0 p-0">';
            while ($posts_query->have_posts()) {
                $posts_query->the_post();
                echo '<button type="button" data-bs-target="#carouselHome" data-bs-slide-to="' . $nm . '" ' . ($nm == 0 ? 'class="active"' : '') . ' aria-current="true" aria-label="Slide ' . $nm . '"></button>';
                $nm++;
            }
            echo '</div>';
        echo '</div>';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
</div>