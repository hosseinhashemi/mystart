<?php
/*
  # ===========================================
  # front-page.php
  #
  # The front page template file.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header();
?>




<!-- Page Header -->
<?php
if (has_post_thumbnail()) {
    $feat_image_url = wp_get_attachment_url(get_post_thumbnail_id());
    $intro_background = 'style="background-image: url(' . $feat_image_url . ')"';
} else {
    $intro_background = 'style="background-image: url(' . IMAGES . '/home-bg.jpg' . ')"';
}
?>
<header class="intro-header" <?php if ($intro_background) echo $intro_background; ?>>



    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo IMAGES . '/home-bg.jpg' ?>" alt="...">
                <div class="carousel-caption">

                    
                                <div class="site-heading">
                                    <h1>This is frontpage</h1>
                                    <hr class="small">
                                    <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                                </div>
                            


                </div>
            </div>

            <div class="item">
                <img src="<?php echo IMAGES . '/slide-2.jpg' ?>" alt="...">
                <div class="carousel-caption">
                    caption 2
                </div>
            </div>

            <div class="item">
                <img src="<?php echo IMAGES . '/slide-3.jpg' ?>" alt="...">
                <div class="carousel-caption">
                    caption 2
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right " aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



</header>




<!-- Main Content -->
<div class="container">
    <div class="row">

        <div class="col-md-8 ">


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part('content', get_post_format()) ?>

                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part('content', 'none') ?>
            <?php endif; ?>

            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>

            <?php
            mystart_pagination();
            ?>

        </div>

        <div class="col-md-2 col-lg-4">
            <?php
            get_sidebar();
            ?>
        </div>

    </div>
</div>

<hr>

<?php
/* Load footer.php  */
get_footer();
?>


