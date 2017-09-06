<?php

/* Client - Main title */
$wp_customize->add_setting('mystart_main_client_title', array(
    'default' => __('Client', 'mystart'),
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_main_client_title', array(
    'label' => __('Client Section Main Title', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'text',
    'description' => __('Main Title of Client section', 'mystart')
        )
);



/* Client - sub title */
$wp_customize->add_setting('mystart_client_sub_title', array(
    'default' => 'Get Familiar With Our Clients',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_client_sub_title', array(
    'label' => __('Sub Title', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'text',
    'description' => __('Sub Title of Client section', 'mystart')
        )
);




/*
=====================================
 * 
 * Client Item 1
 * 
 ====================================
 */

/* Client - Item 1 title */
$wp_customize->add_setting('mystart_client_item_title_1', array(
    'default' => 'Our client 1',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_client_item_title_1', array(
    'label' => __('Client Item 1 title (will shows as tooltip)', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'text'
        )
);


/* Client - Item 1 Link/URL */
$wp_customize->add_setting('mystart_client_item_url_1', array(
    'default' => 'CEO',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('mystart_client_item_url_1', array(
    'label' => __('Client Link(URL)', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'url'
        )
);


/* Client - Item 1 Avatar */
$wp_customize->add_setting('mystart_client_item_logo_1', array('default' => IMAGES ."/client/" . "client-01.png", 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_client_item_logo_1', array(
    'label' => __('Upload Testimonial 1 image', 'mystart'),
    'section' => 'mystart_client_options',
    'settings' => 'mystart_client_item_logo_1'
        )
        )
);






/*
=====================================
 * 
 * Client Item 2
 * 
 ====================================
 */

/* Client - Item 2 title */
$wp_customize->add_setting('mystart_client_item_title_2', array(
    'default' => 'Our client 2',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_client_item_title_2', array(
    'label' => __('Client Item 2 title (will shows as tooltip)', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'text'
        )
);


/* Client - Item 2 Link/URL */
$wp_customize->add_setting('mystart_client_item_url_2', array(
    'default' => 'CEO',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('mystart_client_item_url_2', array(
    'label' => __('Client Link(URL)', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'url'
        )
);


/* Client - Item 2 Avatar */
$wp_customize->add_setting('mystart_client_item_logo_2', array('default' => IMAGES ."/client/" . "client-02.png", 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_client_item_logo_2', array(
    'label' => __('Upload Testimonial 2 image', 'mystart'),
    'section' => 'mystart_client_options',
    'settings' => 'mystart_client_item_logo_2'
        )
        )
);







/*
=====================================
 * 
 * Client Item 3
 * 
 ====================================
 */

/* Client - Item 3 title */
$wp_customize->add_setting('mystart_client_item_title_3', array(
    'default' => 'Our client 3',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_client_item_title_3', array(
    'label' => __('Client Item 3 title (will shows as tooltip)', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'text'
        )
);


/* Client - Item 3 Link/URL */
$wp_customize->add_setting('mystart_client_item_url_3', array(
    'default' => 'CEO',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('mystart_client_item_url_3', array(
    'label' => __('Client Link(URL)', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'url'
        )
);


/* Client - Item 3 Avatar */
$wp_customize->add_setting('mystart_client_item_logo_3', array('default' => IMAGES ."/client/" . "client-03.png", 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_client_item_logo_3', array(
    'label' => __('Upload Testimonial 3 image', 'mystart'),
    'section' => 'mystart_client_options',
    'settings' => 'mystart_client_item_logo_3'
        )
        )
);






/*
=====================================
 * 
 * Client Item 4
 * 
 ====================================
 */

/* Client - Item 4 title */
$wp_customize->add_setting('mystart_client_item_title_4', array(
    'default' => 'Our client 4',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_client_item_title_4', array(
    'label' => __('Client Item 4 title (will shows as tooltip)', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'text'
        )
);


/* Client - Item 4 Link/URL */
$wp_customize->add_setting('mystart_client_item_url_4', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('mystart_client_item_url_4', array(
    'label' => __('Client Link(URL)', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'url'
        )
);


/* Client - Item 4 Avatar */
$wp_customize->add_setting('mystart_client_item_logo_4', array('default' => IMAGES ."/client/" . "client-04.png", 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_client_item_logo_4', array(
    'label' => __('Upload Testimonial 4 image', 'mystart'),
    'section' => 'mystart_client_options',
    'settings' => 'mystart_client_item_logo_4'
        )
        )
);







/*
=====================================
 * 
 * Client Item 5
 * 
 ====================================
 */

/* Client - Item 5 title */
$wp_customize->add_setting('mystart_client_item_title_5', array(
    'default' => 'Our client 5',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_client_item_title_5', array(
    'label' => __('Client Item 5 title (will shows as tooltip)', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'text'
        )
);


/* Client - Item 5 Link/URL */
$wp_customize->add_setting('mystart_client_item_url_5', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('mystart_client_item_url_5', array(
    'label' => __('Client Link(URL)', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'url'
        )
);


/* Client - Item 5 Avatar */
$wp_customize->add_setting('mystart_client_item_logo_5', array('default' => IMAGES ."/client/" . "client-05.png", 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_client_item_logo_5', array(
    'label' => __('Upload Testimonial 5 image', 'mystart'),
    'section' => 'mystart_client_options',
    'settings' => 'mystart_client_item_logo_5'
        )
        )
);







/*
=====================================
 * 
 * Client Item 6
 * 
 ====================================
 */

/* Client - Item 6 title */
$wp_customize->add_setting('mystart_client_item_title_6', array(
    'default' => 'Our client 6',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_client_item_title_6', array(
    'label' => __('Client Item 6 title (will shows as tooltip)', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'text'
        )
);


/* Client - Item 6 Link/URL */
$wp_customize->add_setting('mystart_client_item_url_6', array(
    'default' => 'CEO',
    'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('mystart_client_item_url_6', array(
    'label' => __('Client Link(URL)', 'mystart'),
    'section' => 'mystart_client_options',
    'type' => 'url'
        )
);


/* Client - Item 6 Avatar */
$wp_customize->add_setting('mystart_client_item_logo_6', array('default' => IMAGES ."/client/" . "client-06.png", 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_client_item_logo_6', array(
    'label' => __('Upload Testimonial 6 image', 'mystart'),
    'section' => 'mystart_client_options',
    'settings' => 'mystart_client_item_logo_6'
        )
        )
);