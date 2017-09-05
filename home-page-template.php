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
        <h2 class="section__title"><?php echo get_theme_mod('mystart_main_services_title'); ?></h2>
        <p class="section__description"><?php echo get_theme_mod('mystart_services_sub_title'); ?></p>
    </div>



    <div class="container-fluid">

        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <div class="col-md-4">
                    <!-- / service item -->
                    <div class="service">

                        <div class="service__icon-holder">
                            <?php
                            $icon = get_theme_mod('mystart_services_item_icon_1');
                            $pre_icon = explode("-", $icon);
                            ?>
                            <i class="icon <?php echo $pre_icon[0] . ' ' . $icon ?> "></i>
                        </div>

                        <h4 class="service__heading"><?php echo get_theme_mod('mystart_services_item_title_1'); ?></h4>
                        <p class="service__description">                             
                            <?php echo get_theme_mod('mystart_services_item_desc_1'); ?>
                        </p>

                    </div>
                    <!-- / service item -->
                </div>
                <!-- / col-md-4 -->

                <div class="col-md-4">
                    <!-- / service item -->
                    <div class="service">

                        <div class="service__icon-holder">
                            <?php
                            $icon = get_theme_mod('mystart_services_item_icon_2');
                            $pre_icon = explode("-", $icon);
                            ?>
                            <i class="icon <?php echo $pre_icon[0] . ' ' . $icon ?> "></i>
                        </div>

                        <h4 class="service__heading"><?php echo get_theme_mod('mystart_services_item_title_2'); ?></h4>
                        <p class="service__description">                             
                            <?php echo get_theme_mod('mystart_services_item_desc_2'); ?>
                        </p>

                    </div>
                    <!-- / service item -->
                </div>
                <!-- / col-md-4 -->

                <div class="col-md-4">
                    <!-- / service item -->
                    <div class="service">

                        <div class="service__icon-holder">
                            <?php
                            $icon = get_theme_mod('mystart_services_item_icon_3');
                            $pre_icon = explode("-", $icon);
                            ?>
                            <i class="icon <?php echo $pre_icon[0] . ' ' . $icon ?> "></i>
                        </div>

                        <h4 class="service__heading"><?php echo get_theme_mod('mystart_services_item_title_3'); ?></h4>
                        <p class="service__description">                             
                            <?php echo get_theme_mod('mystart_services_item_desc_3'); ?>
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
$about_us_default_bg = IMAGES . '/about-us-bg.jpg';

$mystart_about_bg = get_theme_mod('mystart_about_bg', $about_us_default_bg);
$about_us_bg = 'style="background-image: url(' . $mystart_about_bg . ');background-size:cover;"';


$about_us_title = get_theme_mod('mystart_main_about_title', 'ABOUT US');
$about_us_subtitle = get_theme_mod('mystart_about_sub_title', 'Read More About Our Company');
$about_us_img = get_theme_mod('mystart_about_img', IMAGES . '/dummy-1.jpg');

$about_us_desc = get_theme_mod('mystart_about_desc', 'Lorem ipsum dolor sit');
$mystart_about_bg_color = get_theme_mod('mystart_about_bg_color', 'rgb(36, 3, 67)');
?>
<!--  About Us -->
<section id="about-us" class="section" <?php echo $about_us_bg; ?> >
    <div class="about-us__overlay" style="background-color: <?php echo $mystart_about_bg_color ?>;opacity:0.6"></div>

    <div class="about-us__holder">

        <div class="section__header">
            <h2 class="section__title"><span><?php echo $about_us_title; ?></span></h2>
            <p class="section__description"><?php echo $about_us_subtitle; ?></p>
        </div>
        <!--/section__header-->

        <div class="container">

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-6">
                        <div class="about-us__img">
                            <img src="<?php echo $about_us_img; ?>" class="img-responsive"/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-us__desc">
                            <?php echo $about_us_desc; ?>

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
    <?php
    $mystart_main_blog_title = get_theme_mod('mystart_main_blog_title', 'LATEST POSTS');
    $mystart_blog_sub_title = get_theme_mod('mystart_blog_sub_title', 'Read More About Our Company');
    $mystart_blog_item_count = get_theme_mod('mystart_blog_item_count', 3);
    $mystart_blog_btn_text = get_theme_mod('mystart_blog_btn_text', "VIEW ALL");
    $mystart_blog_btn_url = get_theme_mod('mystart_blog_btn_url', "#");
    ?>

    <div class="section__header">
        <h2 class="section__title"><?php echo $mystart_main_blog_title; ?></h2>
        <p class="section__description"><?php echo $mystart_blog_sub_title; ?></p>
    </div>
    <div class="container">



        <div class="row">

            <div class="col-md-12 masonry-blog-grid" >



                <?php
                $args = array(
                    'posts_per_page' => $mystart_blog_item_count,
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()):

                    while ($the_query->have_posts()) : $the_query->the_post();

                        $image_medium_blog = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                        ?>

                        <div class="col-md-4 post-item-selector grid-sizer">
                            <div class="post-item">

                                <div class="post-item__image">
                                    <a href="<?php echo get_the_permalink(); ?>">
                                        <img src="<?php echo $image_medium_blog[0]; ?>" class="img-responsive" alt="<?php echo get_the_title(); ?>" />
                                    </a>
                                </div>

                                <div class="post-item__text">

                                    <h5 class="post-item__title"><a href="#"><?php echo get_the_title(); ?></a></h5>
                                    <p class="post-item__expert">
                                        <?php echo get_the_excerpt(); ?>
                                    </p>
                                </div>

                            </div>
                            <!--/post-item-->
                        </div>


                        <?php
                    endwhile;

                endif;
                ?>











            </div>
            <!--/col-md-10-->

        </div>
        <!--/row-->

        <div class="section__bottom">
            <a href="<?php echo $mystart_blog_btn_url; ?>" class="hvr-sweep-to-right action-btn"><?php echo $mystart_blog_btn_text; ?></a>
        </div>

    </div>
    <!--/container--> 

</section>
<!-- / Blog Section-->





<?php
$mystart_main_testimonial_title = get_theme_mod('mystart_main_testimonial_title', 'TESTIMONIALS');
$mystart_testimonial_sub_title  = get_theme_mod('mystart_testimonial_sub_title', 'What People Say About Us?');

$mystart_testimonial_item_name_1 = get_theme_mod('mystart_testimonial_item_name_1', 'Customer 1');
$mystart_testimonial_item_name_2 = get_theme_mod('mystart_testimonial_item_name_2', 'Customer 2');
$mystart_testimonial_item_name_3 = get_theme_mod('mystart_testimonial_item_name_3', 'Customer 3');

$mystart_testimonial_item_pos_1 = get_theme_mod('mystart_testimonial_item_pos_1',"CEO");
$mystart_testimonial_item_pos_2 = get_theme_mod('mystart_testimonial_item_pos_2',"Developer");
$mystart_testimonial_item_pos_3 = get_theme_mod('mystart_testimonial_item_pos_3',"Designer");

$mystart_testimonial_item_comment_1 = get_theme_mod('mystart_testimonial_item_comment_1',"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
$mystart_testimonial_item_comment_2 = get_theme_mod('mystart_testimonial_item_comment_2',"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
$mystart_testimonial_item_comment_3 = get_theme_mod('mystart_testimonial_item_comment_3',"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");

$mystart_testimonial_item_avatar_1 = get_theme_mod('mystart_testimonial_item_avatar_1', IMAGES."/dummy-3.jpg");
$mystart_testimonial_item_avatar_2 = get_theme_mod('mystart_testimonial_item_avatar_2', IMAGES."/dummy-3.jpg");
$mystart_testimonial_item_avatar_3 = get_theme_mod('mystart_testimonial_item_avatar_3', IMAGES."/dummy-3.jpg");
?>

<!-- Testimonials Section-->
<section id="testimonials" class="section">             


    <div class="section__header">
        <h2 class="section__title"><?php echo $mystart_main_testimonial_title ?></h2>
        <p class="section__description"><?php echo $mystart_testimonial_sub_title ?></p>
    </div>


    <div class="container">

        <div class="row">

            <div class="col-sm-4">
                <div class="testimonial-item ">

                    <p class="testimonial-item__text"><?php echo $mystart_testimonial_item_comment_1; ?></p>
                    <img class="testimonial-item__img img-responsive img-circle" src="<?php echo $mystart_testimonial_item_avatar_1; ?>" />
                    <div class="testimonial-item__person">
                        <h6 class="testimonial-item__title"><?php echo $mystart_testimonial_item_name_1 ; ?></h6>
                        <h6 class="testimonial-item__pos"><?php echo $mystart_testimonial_item_pos_1; ?></h6>
                    </div>

                </div>
            </div>
            
            
            <div class="col-sm-4">
                <div class="testimonial-item ">

                    <p class="testimonial-item__text"><?php echo $mystart_testimonial_item_comment_2; ?></p>
                    <img class="testimonial-item__img img-responsive img-circle" src="<?php echo $mystart_testimonial_item_avatar_2; ?>" />
                    <div class="testimonial-item__person">
                        <h6 class="testimonial-item__title"><?php echo $mystart_testimonial_item_name_2 ; ?></h6>
                        <h6 class="testimonial-item__pos"><?php echo $mystart_testimonial_item_pos_2; ?></h6>
                    </div>

                </div>
            </div>
            
            
            <div class="col-sm-4">
                <div class="testimonial-item ">

                    <p class="testimonial-item__text"><?php echo $mystart_testimonial_item_comment_3; ?></p>
                    <img class="testimonial-item__img img-responsive img-circle" src="<?php echo $mystart_testimonial_item_avatar_3; ?>" />
                    <div class="testimonial-item__person">
                        <h6 class="testimonial-item__title"><?php echo $mystart_testimonial_item_name_3 ; ?></h6>
                        <h6 class="testimonial-item__pos"><?php echo $mystart_testimonial_item_pos_3; ?></h6>
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
$call_to_action_background = 'style="background-image: url(' . IMAGES . '/home-bg-3.jpg' . ');"';
?>
<div id="action-1" class="call-to-action section" <?php echo $call_to_action_background; ?>   >
    <div class="call-to-action__overlay"></div>

    <div class="container">

        <div class="call-to-action__title">We Make things better!</div>
        <div class="call-to-action__description">
            It's the best of themes in the world you have ever see
        </div>

    </div>




</div>
<!-- /action section-->





<!-- Our Team Section-->
<section id="ourteam" class="section">             


    <div class="section__header">
        <h2 class="section__title">OUR TEAM</h2>
        <p class="section__description">Read more about our MEMBERS</p>
    </div>


    <div class="container">

        <div class="row">

            <div class="col-sm-3">
                <div class="tp-team-item ">


                    <div class="tp-team-item__img">
                        <img src="<?php echo IMAGES . "/team-member.jpg" ?>" />
                    </div>

                    <div class="tp-team-item__overlay">

                        <div class="tp-team-item__name">Alen Dowan</div>
                        <div class="tp-team-item__pos">Developer</div>


                    </div>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="tp-team-item ">


                    <div class="tp-team-item__img">
                        <img src="<?php echo IMAGES . "/team-member.jpg" ?>" />
                    </div>

                    <div class="tp-team-item__overlay">

                        <div class="tp-team-item__name">Alen Dowan</div>
                        <div class="tp-team-item__pos">Developer</div>


                    </div>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="tp-team-item ">


                    <div class="tp-team-item__img">
                        <img src="<?php echo IMAGES . "/team-member.jpg" ?>" />
                    </div>

                    <div class="tp-team-item__overlay">

                        <div class="tp-team-item__name">Alen Dowan</div>
                        <div class="tp-team-item__pos">Developer</div>


                    </div>

                </div>
            </div>


            <div class="col-sm-3">
                <div class="tp-team-item ">


                    <div class="tp-team-item__img">
                        <img src="<?php echo IMAGES . "/team-member.jpg" ?>" />
                    </div>

                    <div class="tp-team-item__overlay">

                        <div class="tp-team-item__name">Alen Dowan</div>
                        <div class="tp-team-item__pos">Developer</div>


                    </div>

                </div>
            </div>



        </div>
        <!-- /row-->
    </div>
    <!--/ container-->

</section>
<!-- / Our Team Section-->



<!-- Our Clients-->
<section id="ourclient" class="section">             


    <div class="section__header">
        <h2 class="section__title">OUR Client</h2>
        <p class="section__description">Read more about our client</p>
    </div>


    <div class="container">

        <div class="row">

            <div class="col-md-2">
                <div class="tp-client">
                    <a class="tp-client__link" href="#">
                        <img class="tp-client__img" src="<?php echo IMAGES . "/client/" . "client-01.png"; ?>" />
                    </a>

                </div>
            </div>
            <!--col-md-2-->


            <div class="col-md-2">
                <div class="tp-client">
                    <a class="tp-client__link" href="#">
                        <img class="tp-client__img" src="<?php echo IMAGES . "/client/" . "client-02.png"; ?>" />
                    </a>

                </div>
            </div>
            <!--col-md-2-->


            <div class="col-md-2">
                <div class="tp-client">
                    <a class="tp-client__link" href="#">
                        <img class="tp-client__img" src="<?php echo IMAGES . "/client/" . "client-03.png"; ?>" />
                    </a>

                </div>
            </div>
            <!--col-md-2-->


            <div class="col-md-2">
                <div class="tp-client">
                    <a class="tp-client__link" href="#">
                        <img class="tp-client__img" src="<?php echo IMAGES . "/client/" . "client-04.png"; ?>" />
                    </a>

                </div>
            </div>
            <!--col-md-2-->


            <div class="col-md-2">
                <div class="tp-client">
                    <a class="tp-client__link" href="#">
                        <img class="tp-client__img" src="<?php echo IMAGES . "/client/" . "client-05.png"; ?>" />
                    </a>

                </div>
            </div>
            <!--col-md-2-->



            <div class="col-md-2">
                <div class="tp-client">
                    <a class="tp-client__link" href="#">
                        <img class="tp-client__img" src="<?php echo IMAGES . "/client/" . "client-06.png"; ?>" />
                    </a>

                </div>
            </div>
            <!--col-md-2-->




        </div>
        <!-- /row-->
    </div>
    <!--/ container-->

</section>
<!-- / Our Client Section-->




<?php
/* Load footer.php  */
get_footer();
?>


