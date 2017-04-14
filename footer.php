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
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2016</p>
                    <p>
                        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mystart' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'mystart' ), 'WordPress' ); ?></a>
                    </p>
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