<?php
$post2_title    = velocitytheme_option('title_posts_home_2', 'Recent Posts');
$post2_cat      = velocitytheme_option('cat_posts_home_2');
?>
<div class="widget shadow bg-white position-relative part_posts_home_2">

    <h3 class="heading-theme position-relative mb-0"> 
        <span>    
            <?php if ($post2_title && $post2_cat !== 'disable') : ?>
                <a style="color: inherit;" href="<?php echo get_tag_link($post2_cat); ?>">
                    <?php echo $post2_title; ?>
                </a>
            <?php else: ?>
                <?php echo $post2_title; ?>
            <?php endif; ?>
        </span>   
    </h3>
    <div class="part-post-home-2">
        <?php
        $post2_args = array(
            'post_type'     => 'post',
            'cat'           => $post2_cat,
            'posts_per_page' => 4,
        );
        // The Query
        $n2 = 1;
        $post2query = new WP_Query($post2_args);
        $count2 = $post2query->post_count;
        if ($post2query->have_posts()) {
            echo '<div>';
            while ($post2query->have_posts()) {
                $post2query->the_post();

                echo '<div class="border-bottom p-3">';
                echo module_cardposts(1);
                echo '</div>';
                    
            }
            echo '</div>';
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
    </div>
</div>