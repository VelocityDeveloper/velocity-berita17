<footer class="site-footer text-bg-dark pb-4 px-3" id="colophon" data-bs-theme="dark" style="margin:0 -.5rem;">

    <div>
        <div class="row">
            <?php 
            for ($x = 1; $x <= 3; $x++) : 
                if (is_active_sidebar('footer-widget-' . $x)) {
                    echo '<div class="col-md py-md-4">';
                    dynamic_sidebar('footer-widget-' . $x);
                    echo '</div>';
                } 
            endfor;
            ?>
        </div>
    </div>

    <div class="site-info text-start border-top pt-2">
        <small>
            © <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>. All Rights Reserved.
            <br>
            Design by <a class="opacity-50" href="https://velocitydeveloper.com" target="_blank" rel="noopener noreferrer"> Velocity Developer </a>
        </small>
    </div>
    <!-- .site-info -->

</footer>
