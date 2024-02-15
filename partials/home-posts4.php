<?php
$post4_title    = velocitytheme_option('title_posts_home_4', 'Recent Posts');
$post4_cat      = velocitytheme_option('cat_posts_home_4');
?>
<div class="widget shadow bg-white position-relative part_posts_home_1">

    <h3 class="heading-theme position-relative mb-0"> 
        <span>    
            <?php if ($post4_title && $post4_title !== 'disable') : ?>
                <a style="color: inherit;" href="<?php echo get_tag_link($post4_cat); ?>">
                    <?php echo $post4_title; ?>
                </a>
            <?php else: ?>
                <?php echo $post4_title; ?>
            <?php endif; ?>
        </span>   
    </h3>
    <div class="part-post-home-4 p-3">
        <?php
        $post4_args = array(
            'post_type'     => 'post',
            'cat'           => $post4_cat,
            'posts_per_page' => 10,
        );
        // The Query
        $n2 = 1;
        $post2query = new WP_Query($post4_args);
        $count2 = $post2query->post_count;
        if ($post2query->have_posts()) {
            echo '<div class="row g-2 align-items-stretch">';
            while ($post2query->have_posts()) {
                $post2query->the_post();
                                 
                echo '<div class="col-md-6">';
                    echo '<div class="border h-100 p-3">';
                    echo module_cardposts(4);
                    echo '</div>';
                echo '</div>';

                $n2++;
            }
            echo '</div>';
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
    </div>
</div>