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


    <?php
    if (has_post_thumbnail()) :
        ?>

        <?php
        the_post_thumbnail('medium', array('class' => 'img-responsive'));
        ?>

    <?php endif; ?>
    <a href = "<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <h2 class = "post-title">
         <div><?php echo get_the_title(); ?></div>
        </h2>

    </a>
    <div class = "post-subtitle">
        <?php echo get_the_excerpt(); ?>
    </div>

    <?php
    /* Post Meta */
    mystart_post_meta();
    ?>

</div>
<hr>

