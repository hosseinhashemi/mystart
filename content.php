<?php
/*
  # ===========================================
  # content.php
  #
  # The standard content template.
  # ===========================================
 */
?>

<article id="post-<?php the_ID(); ?>"  <?php post_class('post-preview'); ?> >
    <?php
    $tp_post_img_style = $tp_post_image_url = "";
    
    if (has_post_thumbnail()) :
        
        $tp_post_image_url = get_the_post_thumbnail_url(get_the_ID(),'large');
        $tp_post_img_style =  'style="background-image: url('. $tp_post_image_url.')"';
    endif;
    ?>
    <div class="tp-post__img" <?php echo $tp_post_img_style; ?> >

        <a class="tp-post__img-link" href = "<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

        </a>
        
    </div>
    <!--/tp-post__img-->
    <div class="tp-post__content">

        <h2 class = "tp-post__title">
            <a href = "<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <span><?php echo get_the_title(); ?></span>
            </a>
        </h2>


        <div class = "post-subtitle">
            <?php the_excerpt(); ?>
        </div>

        <div class="tp-post__meta-wrapper">
            <?php
            /* Post Meta */
            mystart_post_meta();
            ?>
        </div>

    </div>
    <!--/tp-post__content-->
</article>


