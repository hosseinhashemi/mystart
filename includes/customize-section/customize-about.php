<?php

/* About Us - Main title */
$wp_customize->add_setting('mystart_main_about_title', array('default' => __('', 'mystart')));
$wp_customize->add_control('mystart_main_about_title', array(
    'label' => __('Main Title', 'mystart'),
    'section' => 'mystart_about_options',
    'type' => 'text',
    'description' => __('Main Title of About Us section', 'mystart')
        )
);


/* About Us - sub title */
$wp_customize->add_setting('mystart_about_sub_title', array('default' => ''));
$wp_customize->add_control('mystart_about_sub_title', array(
    'label' => __('Sub Title', 'mystart'),
    'section' => 'mystart_about_options',
    'type' => 'text',
    'description' => __('Sub Title of About Us section', 'mystart')
        )
);


/* About Us - Background  */
$wp_customize->add_setting('mystart_about_bg', array('default' => ''));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_about_bg', array(
    'label' => __('Upload a backgound', 'mystart'),
    'section' => 'mystart_about_options',
    'settings' => 'mystart_about_bg'
        )
        )
);

/* About Us - Background Color overlay */
$wp_customize->add_setting('mystart_about_bg_color', array('default' => ''));
$wp_customize->add_control(
        new WP_Customize_Color_Control(
        $wp_customize, 'mystart_about_bg_color', array(
    'label' => __('About Us Backgound color overlay', 'mystart'),
    'section' => 'mystart_about_options',
    'settings' => 'mystart_about_bg_color',
        ))
);





/* About Us -  desc */
$wp_customize->add_setting('mystart_about_desc', array('default' => ''));
$wp_customize->add_control('mystart_about_desc', array(
    'label' => __('Service Item 1 Description', 'mystart'),
    'section' => 'mystart_about_options',
    'type' => 'textarea',
    'description' => __('', 'mystart')
        )
);




/* About Us - Image  */
$wp_customize->add_setting('mystart_about_img', array('default' => ''));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_about_img', array(
    'label' => __('Upload an image', 'mystart'),
    'section' => 'mystart_about_options',
    'settings' => 'mystart_about_img'
        )
        )
);
