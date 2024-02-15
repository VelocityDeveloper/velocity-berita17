<?php
$post1_title    = velocitytheme_option('title_posts_home_1', 'Recent Posts');
$post1_cat      = velocitytheme_option('cat_posts_home_1');
?>
<div class="widget shadow bg-white position-relative part_posts_home_1">
    
    <h3 class="heading-theme position-relative mb-0"> 
        <span>    
            <?php if ($post1_title && $post1_cat !== 'disable') : ?>
                <a style="color: inherit;" href="<?php echo get_tag_link($post1_cat); ?>">
                    <?php echo $post1_title; ?>
                </a>
            <?php else: ?>
                <?php echo $post1_title; ?>
            <?php endif; ?>
        </span>   
    </h3>
    <div class="part-post-home-1 p-3">
        <?php
        $post1_args = array(
            'post_type'     => 'post',
            'cat'           => $post1_cat,
            'posts_per_page' => 4,
        );
        // The Query
        $n = 1;
        $post1query = new WP_Query($post1_args);
        $count = $post1query->post_count;
        if ($post1query->have_posts()) {
            echo '<div class="row g-3">';
            while ($post1query->have_posts()) {
                $post1query->the_post();            

                if($n == 1){                   
                    echo '<div class="col-md-7">';
                    echo module_cardposts(2);
                    echo '</div>';
                }

                if($n == 2){
                    echo '<div class="col-md-5">';
                }

                if($n > 1){
                    echo '<div class="mb-2 mb-md-3">';
                    echo module_cardposts(1);
                    echo '</div>';
                }

                $n++;
            }
            if($count > 1){
                echo '</div>';
            }
            echo '</div>';
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
    </div>
</div>