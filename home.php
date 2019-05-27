<?php
/*
  # ===========================================
  # home.php
  #
  # The Home page template file for show posts.
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
    $intro_background = '';
}

?>
<header class="intro-header" style="background-image: url('<?php header_image(); ?>')" >
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?php _e("BLOG","mystart"); ?></h1>
                    <hr class="small">
                    <span class="subheading"><?php _e("View our posts","mystart"); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>




<!-- Main Content -->
<div class="container">
    <div class="row">

        <div class="col-md-8 ">


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part('content', get_post_format()) ?>
            <div class="wp-xxxx"><?php wp_link_pages(); ?></div> 

                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part('content', 'none') ?>
            <?php endif; ?>

            

            <?php
            mystart_pagination();
            ?>

        </div>

        <div class="col-md-3 col-md-offset-1">
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


