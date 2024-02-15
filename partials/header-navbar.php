
<nav id="main-nav" class="navbar navbar-expand-md flex-nowrap navbar-dark bg-dark shadow pe-2 pe-md-3 py-0" style="background-image: var(--bs-gradient);" aria-labelledby="main-nav-label">
        
    <h2 id="main-nav-label" class="screen-reader-text">
        <?php esc_html_e('Main Navigation', 'justg'); ?>
    </h2>

    <button class="navbar-toggler text-start w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'justg'); ?>">
        <span class="navbar-toggler-icon"></span>
        <small>Menu</small>
    </button>

    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="navbarNavOffcanvas">

        <div class="offcanvas-header justify-content-end">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- The WordPress Menu goes here -->
        <?php
        wp_nav_menu(
            array(
                'theme_location'  => 'primary',
                'container_class' => 'offcanvas-body',
                'container_id'    => '',
                'menu_class'      => 'navbar-nav justify-content-start flex-grow-1 pe-3',
                'fallback_cb'     => '',
                'menu_id'         => 'main-menu',
                'depth'           => 4,
                'walker'          => new justg_WP_Bootstrap_Navwalker(),
            )
        );
        ?>
    </div><!-- .offcanvas -->
    
    <button type="submit" data-bs-toggle="modal" data-bs-target="#searchHeaderModal" class="btn btn-link text-light btn-sm">
        <i class="fa fa-search"></i>
    </button>

</nav>
<div class="bg-color-theme pt-1 mb-2"></div>

<!-- searchHeaderModal -->
<div class="modal fade" id="searchHeaderModal" tabindex="-1" aria-labelledby="searchHeaderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0 mt-5">
            <div class="modal-body">                
                <form action="<?php echo get_site_url();?>" method="get" class="d-flex overflow-hidden">
                    <input type="text" name="s" placeholder="Search" class="bg-light form-control form-control-sm rounded-0 me-1 shadow-sm">
                    <button type="submit" class="btn btn-dark btn-sm border-0 bg-color-theme shadow-sm rounded-0 py-1 px-2">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<div>
    <?php get_berita_iklan('iklan_header_2','mb-3 mb-md-0 px-2 text-center'); ?>
</div>