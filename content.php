<?php
/*
  # ===========================================
  # content.php
  #
  # The standard content template.
  # ===========================================
 */
?>

<div id="post-<?php the_ID(); ?>"  <?php post_class('post-preview'); ?> >
    <div class="tp-post__img">
        <a href = "<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php
            if (has_post_thumbnail()) :
                ?>

                <?php
                the_post_thumbnail('large', array('class' => 'img-responsive'));
                ?>

            <?php endif; ?>
        </a>
        <div class="tp-post__meta-wrapper">
            <?php
        /* Post Meta */
        mystart_post_meta();
        ?>
        </div>
    </div>
    <!--/tp-post__img-->
    <div class="tp-post__content">

        <h2 class = "tp-post__title">
            <a href = "<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php echo get_the_title(); ?>
            </a>
        </h2>


        <div class = "post-subtitle">
            <?php  the_excerpt(); ?>
        </div>

        
    </div>
    <!--/tp-post__content-->
</div>
<hr>

