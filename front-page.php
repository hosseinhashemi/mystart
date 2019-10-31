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
/* Load header.php  */
/* Load header.php  */
/* Load header.php  */
/* Load header.php  */
/* Load header.php  */
/* Load header.php  */
/* Load header.php  */
/* Load header.php  */
get_header();
?>




<!-- Page Header -->
<?php
if (has_post_thumbnail()) {
    $feat_image_url = wp_get_attachment_url(get_post_thumbnail_id());
    $intro_background = 'style="background-image: url(' . $feat_image_url . ')"';
} else {
    $intro_background = 'style="background-image: url(' . IMAGES . '/home-bg.jpg' . ');background-size:cover;"';
}
?>

<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide" <?php echo $intro_background; ?> >Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>


</div>




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
