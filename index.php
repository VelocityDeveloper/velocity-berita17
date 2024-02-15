<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package justg
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container  = velocitytheme_option('justg_container_type', 'container');
$paged      = (get_query_var('paged')) ? get_query_var('paged') : '';
?>

<div class="wrapper pt-2" id="index-wrapper">

    <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

        <?php get_template_part('partials/home', 'bigcarousel'); ?>

        <div class="row">

            <!-- Do the left sidebar check -->
            <?php do_action('justg_before_content'); ?>

                <main class="site-main" id="main">
                    
                    <?php get_template_part('partials/home', 'posts1'); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <?php get_template_part('partials/home', 'posts2'); ?>
                        </div>
                        <div class="col-md-6">
                            <?php get_template_part('partials/home', 'posts3'); ?>
                        </div>
                    </div>

                    <?php get_template_part('partials/home', 'posts4'); ?>

                    <?php get_berita_iklan('iklan_home_1'); ?>

                </main><!-- #main -->

            <!-- Do the right sidebar check. -->
            <?php do_action('justg_after_content'); ?>
        </div><!-- .row -->
       
        <?php get_berita_iklan('iklan_home_3'); ?>

    </div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
