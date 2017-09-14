<?php
/*
  # ===========================================
  # footer.php
  #
  # footer contents.
  # ===========================================
 */
?>  


<!-- Footer -->
<footer class="tp-footer">

    <div class="footer-widget">

        <div class="container">
            <div class="row">

                <?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
                <div class="widget-column col-md-3 footer-widget-1">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <?php } ?>
                
                
                <?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
                <div class="widget-column col-md-3 footer-widget-2">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
                <?php } ?>
                
                
                <?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
                <div class="widget-column col-md-3 footer-widget-3">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
                <?php } ?>
                
                
                <?php if ( is_active_sidebar( 'footer-4' ) ) { ?>
                <div class="widget-column col-md-3 footer-widget-4">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                </div>
                <?php } ?>
                
                
                

                

                </div><!--row -->
                </di><!--container -->

                </div>

                <div class = "container">
                <div class = "row">
                <div class = "col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <p class = "copyright text-muted">Copyright &copy;
                Your Website 2016</p>
                
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
<div id="search">
    <button type="button" class="close">x</button>
    <form method="get" role="search" action="<?php echo esc_url( home_url('/') ); ?>">
        <input type="search" value="<?php echo get_search_query(); ?>" placeholder="type keyword(s) here" name="s" />
        <input type="submit" value="Search" class="btn btn-primary" />
    </form>
</div><!-- Search -->

</body>
