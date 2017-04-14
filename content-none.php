<?php
/*
  # ===========================================
  # content-none.php
  #
  # The template for missing contents.
  # ===========================================
 */
?>
<div class="text-center">
    <div class="jumbotron">
        <div class="alert alert-warning" role="alert">
            <?php echo _e('Nothing Found', 'mystart') ?>
        </div>
        <?php
        get_search_form();
        ?>
    </div>
</div>