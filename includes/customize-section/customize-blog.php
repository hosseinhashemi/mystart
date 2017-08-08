<?php

/* Latest Post - Main title */
$wp_customize->add_setting('mystart_main_blog_title', array('default' => __('SERVICES', 'mystart')));
$wp_customize->add_control('mystart_main_blog_title', array(
    'label' => __('Main Title', 'mystart'),
    'section' => 'mystart_blog_options',
    'type' => 'text',
    'description' => __('Main Title of Latest Post section', 'mystart')
        )
);


/* Latest Post - sub title */
$wp_customize->add_setting('mystart_blog_sub_title', array('default' => ''));
$wp_customize->add_control('mystart_blog_sub_title', array(
    'label' => __('Sub Title', 'mystart'),
    'section' => 'mystart_blog_options',
    'type' => 'text',
    'description' => __('Sub Title of Latest Post section', 'mystart')
        )
);


$wp_customize->add_setting('mystart_blog_item_count', array('default' => '3'));
$wp_customize->add_control(
        'mystart_blog_item_count', array(
    'label' => __('How Many Post should be show?', 'mytheme'),
    'section' => 'mystart_blog_options',
    'settings' => 'mystart_blog_item_count',
    'type' => 'number'
    
        )
);







/* Latest Post - btn text */
$wp_customize->add_setting('mystart_blog_btn_text', array('default' => 'View All Posts'));
$wp_customize->add_control('mystart_blog_btn_text', array(
    'label' => __('View All post button text.', 'mystart'),
    'section' => 'mystart_blog_options',
    'type' => 'text',
    'description' => __('', 'mystart')
        )
);


/* Latest Post - BTN URL */
$wp_customize->add_setting('mystart_blog_btn_url', array('default' => '#'));
$wp_customize->add_control('mystart_blog_btn_url', array(
    'label' => __('View All post button URL', 'mystart'),
    'section' => 'mystart_blog_options',
    'type' => 'text',
    'description' => __('', 'mystart')
        )
);

