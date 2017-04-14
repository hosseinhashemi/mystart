<?php
/*
  # ===========================================
  # index.php
  #
  # The main template file.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header();
?>




<!-- Page Header -->
<header class="intro-header" >
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <hr class="small">
                    <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
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


