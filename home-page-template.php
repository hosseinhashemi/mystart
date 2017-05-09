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
$intro_background_1 = 'style="background-image: url(' . IMAGES . '/home-bg-3.jpg' . ');background-size:cover;"';

$intro_background_2 = 'style="background-image: url(' . IMAGES . '/home-bg-2.jpg' . ');background-size:cover;"';
$intro_background_3 = 'style="background-image: url(' . IMAGES . '/home-bg.jpg' . ');background-size:cover;"';
?>

<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide" <?php echo $intro_background_1; ?>  >Slide 1</div>
        <div class="swiper-slide" <?php echo $intro_background_2; ?>>Slide 2</div>
        <div class="swiper-slide" <?php echo $intro_background_3; ?> >Slide 3</div>
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
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.

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


<?php
$about_us_background = 'style="background-image: url(' . IMAGES . '/about-us-bg.jpg' . ');background-size:cover;"';
?>
<!--  About Us -->
<section id="about-us" class="section" <?php echo $about_us_background; ?> >
    <div class="about-us__overlay"></div>

    <div class="about-us__holder">

        <div class="section__header">
            <h2 class="section__title">About <span>TERAFORM</span></h2>
            <p class="section__description">Read more about our company</p>
        </div>
        <!--/section__header-->

        <div class="container">

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-6">
                        <div class="about-us__img">
                            <img src="<?php echo IMAGES . '/dummy-1.jpg' ?>" class="img-responsive"/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-us__desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        </div>
                    </div>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container-fluid-->

        <div class="container">
            <div class="skills">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="row">

                            <div class="col-md-3">                 
                                <div id="circle-1" data-percent="67" class="about-us__skill percircle animate"> </div>
                                <h5 class="about-us__skill-title">jQuery</h5>
                            </div>

                            <div class="col-md-3">                 
                                <div id="circle-2" data-percent="17" class="about-us__skill percircle animate"> </div>
                                <h5 class="about-us__skill-title">jQuery</h5>
                            </div>

                            <div class="col-md-3">                 
                                <div id="circle-3" data-percent="97" class="about-us__skill percircle animate"> </div>
                                <h5 class="about-us__skill-title">jQuery</h5>
                            </div>

                            <div class="col-md-3">                 
                                <div id="circle-4" data-percent="47" class="about-us__skill percircle animate"> </div>
                                <h5 class="about-us__skill-title">jQuery</h5>
                            </div>

                        </div>
                        <!--/ Row-->

                    </div>
                </div>
                <!-- / row -->
            </div>
            <!-- / skills -->

        </div>
        <!-- /container-fluid-->


    </div>
    <!-- / about-us__holder-->

</section>
<!-- / About us -->


<!-- Blog Section-->
<section id="blog" class="section">             


    <div class="section__header">
        <h2 class="section__title">Latest Posts</h2>
        <p class="section__description">Read more about our company</p>
    </div>
    <div class="container-fluid">



        <div class="row">

            <div class="col-md-10 col-md-offset-1">



                <div class="post-item">

                    <div class="post-item__image">
                        <a href="#">
                            <img src="<?php echo IMAGES; ?>/dummy-1.jpg" class="img-responsive" alt="some alt" />
                        </a>
                    </div>

                    <div class="post-item__text">

                        <h5 class="post-item__title"><a href="#">BEST PRODUCTIVITY SECRETS</a></h5>
                        <p class="post-item__expert">
                            VICE meets up with Joe Nickell, a longtime paranormal investigator
                            who’s been called the real-life Scully. We travel with him to Roswell,
                            NM on the called the real-life Scully
                        </p>
                    </div>

                </div>
                <!--/post-item-->

                <div class="post-item">

                    <div class="post-item__image">
                        <a href="#">
                            <img src="<?php echo IMAGES; ?>/dummy-2.jpg" class="img-responsive" alt="some alt" />
                        </a>
                    </div>

                    <div class="post-item__text">

                        <h5 class="post-item__title"><a href="#">BEST PRODUCTIVITY SECRETS</a></h5>
                        <p class="post-item__expert">
                            VICE meets up with Joe Nickell, a longtime paranormal investigator
                            who’s been called the real-life Scully. We travel with him to Roswell,
                            NM on the called the real-life Scully
                        </p>
                    </div>

                </div>
                <!--/post-item-->

                <div class="post-item">

                    <div class="post-item__image">
                        <a href="#">
                            <img src="<?php echo IMAGES; ?>/dummy-1.jpg" class="img-responsive" alt="some alt" />
                        </a>
                    </div>

                    <div class="post-item__text">

                        <h5 class="post-item__title"><a href="#">BEST PRODUCTIVITY SECRETS</a></h5>
                        <p class="post-item__expert">
                            VICE meets up with Joe Nickell, a longtime paranormal investigator
                            who’s been called the real-life Scully. We travel with him to Roswell,
                            NM on the called the real-life Scully
                        </p>
                    </div>

                </div>
                <!--/post-item-->







            </div>
            <!--/col-md-10-->

        </div>
        <!--/row-->

        <div class="section__bottom">
            <a href="#" class="hvr-sweep-to-right action-btn">View All Posts</a>
        </div>

    </div>
    <!--/container--> 

</section>
<!-- / Blog Section-->



<!-- Testimonials Section-->
<section id="testimonials" class="section">             


    <div class="section__header">
        <h2 class="section__title">Testimonials</h2>
        <p class="section__description">Read more about our company</p>
    </div>


    <div class="container">

        <div class="row">

            <div class="col-md-4">
                <div class="testimonial-item ">

                    <p class="testimonial-item__text">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, 
                        sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
                    </p>
                    <img class="testimonial-item__img img-responsive img-circle" src="<?php echo IMAGES; ?>/dummy-3.jpg" />
                    <div class="testimonial-item__person">
                        <h6 class="testimonial-item__title">Sarah Cameron</h6>
                        <h6 class="testimonial-item__pos">From BardiaWeb</h6>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="testimonial-item ">

                    <p class="testimonial-item__text">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, 
                        sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
                    </p>
                    <img class="testimonial-item__img img-responsive img-circle" src="<?php echo IMAGES; ?>/dummy-4.jpg" />
                    <div class="testimonial-item__person">
                        <h6 class="testimonial-item__title">Hossein Hashemi</h6>
                        <h6 class="testimonial-item__pos">From BardiaWeb</h6>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="testimonial-item ">

                    <p class="testimonial-item__text">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, 
                        sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
                    </p>
                    <img class="testimonial-item__img img-responsive img-circle" src="<?php echo IMAGES; ?>/dummy-3.jpg" />
                    <div class="testimonial-item__person">
                        <h6 class="testimonial-item__title">Kim Solon</h6>
                        <h6 class="testimonial-item__pos">From BardiaWeb</h6>
                    </div>

                </div>
            </div>

        </div>
        <!-- /row-->
    </div>
    <!--/ container-->

</section>
<!-- / Testimonials Section-->


<!--action section-->
<?php
$call_to_action_background = 'style="background-image: url(' . IMAGES . '/home-bg.jpg' . ');"';
?>
<div id="action-1" class="call-to-action section" <?php echo $call_to_action_background; ?>   >


    <div class="container">

        <div class="call-to-action__title">We Make things better!</div>
        <div class="call-to-action__description">
            It's the best of themes in the world you have ever see
        </div>

    </div>




</div>
<!-- /action section-->

<hr>

<?php
/* Load footer.php  */
get_footer();
?>


