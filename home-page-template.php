<?php
/*
  # ===========================================
  # home-pagetemplate.php
  # Template Name: Home Page
  # The front page template file.
  # ===========================================
 */
?>


<?php
/* Load header.php  */
get_header();
?>




<!-- Slider -->
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
<!-- /Slider -->



<!--  Servises -->
<section id="servises" class="section">


                <div class="section__header">
                    <h2 class="section__title">Services</h2>
                    <p class="section__description">View Our services</p>
                </div>



                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-10 col-md-offset-1">

                            <div class="col-md-4">
                                <!-- / service item -->
                                <div class="service">

                                    <div class="service__icon-holder">
                                        <i class="icon glyphicon glyphicon-phone"></i>
                                    </div>

                                    <h4 class="service__heading">Responsive</h4>
                                    <p class="service__description">                             
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                    </p>

                                </div>
                                <!-- / service item -->
                            </div>
                            <!-- / col-md-4 -->
                            
                            <div class="col-md-4">
                                <!-- / service item -->
                                <div class="service">

                                    <div class="service__icon-holder">
                                        <i class="icon glyphicon glyphicon-phone"></i>
                                    </div>

                                    <h4 class="service__heading">Responsive</h4>
                                    <p class="service__description">                             
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                    </p>

                                </div>
                                <!-- / service item -->
                            </div>
                            <!-- / col-md-4 -->
                            
                            <div class="col-md-4">
                                <!-- / service item -->
                                <div class="service">

                                    <div class="service__icon-holder">
                                        <i class="icon glyphicon glyphicon-phone"></i>
                                    </div>

                                    <h4 class="service__heading">Responsive</h4>
                                    <p class="service__description">                             
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                    </p>

                                </div>
                                <!-- / service item -->
                            </div>
                            <!-- / col-md-4 -->





                        </div>
                        <!-- /col-md-10 -->


                    </div>
                    <!-- / row-->

                </div>
                <!-- / container-->

            </section>
<!-- /Servises -->

<hr>

<?php
/* Load footer.php  */
get_footer();
?>


