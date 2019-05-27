<?php
/*
  # ===========================================
  # Single.php
  #
  # The Single post template file.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header();
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Post Header -->
        <?php
        if (has_post_thumbnail()) {
            $feat_image_url = wp_get_attachment_url(get_post_thumbnail_id());
            $intro_background = 'style="background-image: url(' . $feat_image_url . ')"';
        }
        ?>
        <header class="intro-header tp-single-post__hero" <?php if (has_post_thumbnail()) echo $intro_background; ?>>
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="post-heading">
                            <h1>single <?php the_title(); ?></h1>

                            <?php mystart_post_meta(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>




        <!-- Post Content -->
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <?php the_content(); ?>
                        <div>

                            <?php
                            // Previous/next post navigation.
                            the_post_navigation(array(
                                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next : ', 'mystart') . '</span> ' .
                                '<span class="screen-reader-text">' . __('Next post :', 'mystart') . '</span> ' .
                                '<span class="post-title">%title</span>',
                                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous : ', 'mystart') . '</span> ' .
                                '<span class="screen-reader-text">' . __('Previous post :', 'mystart') . '</span> ' .
                                '<span class="post-title">%title</span>',
                            ));
                            ?>




                        </div>
                        <div>
                            <?php comments_template(); ?>
                        </div>
                    </div><!-- col -->
                </div> <!-- row -->
            </div><!-- container -->
        </article>

    <?php endwhile; ?>

<?php else: ?>

    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    <?php _e('Oops! Seems somethings is wrong ...', 'mystart') ?>

                </div>
            </div>
        </div>
    </article>

<?php endif; ?>
<hr>



<?php
/* Load footer.php  */
get_footer();
?>


