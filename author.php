<?php
/*
  # ===========================================
  # author.php
  #
  # The Archive page template file for show Author posts.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header();
?>




<!-- Page Header -->

<header class="intro-header" <?php if ($intro_background) echo $intro_background; ?>>
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">



                <div class="site-heading">

                    <?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
                    <hr class="small">
                    <?php the_archive_description('<span class="subheading">', '</span>'); ?>
                    <div class="author-information">

                        <div class="author-avatar">
                            <?php echo get_avatar(get_the_author_meta('user_email')); ?>
                        </div>
                        <div class="author-name">
                            <span><?php _e('About','mystart'); ?></span> <span><?php the_author_meta('first_name'); ?></span> <span><?php the_author_meta('first_name'); ?></span>
                        </div>
                        <div class="author-description">
                            <?php echo get_the_author_meta('description'); ?>
                        </div>


                    </div><!-- author-description -->
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
