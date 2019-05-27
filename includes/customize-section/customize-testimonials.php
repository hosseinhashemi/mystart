<?php

/* Testimonilal - Main title */
$wp_customize->add_setting('mystart_main_testimonial_title', array(
    'default' => __('TESTIMONIALS', 'mystart'),
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_main_testimonial_title', array(
    'label' => __('Main Title', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'type' => 'text',
    'description' => __('Main Title of Testimonilal section', 'mystart')
        )
);



/* Testimonilal - sub title */
$wp_customize->add_setting('mystart_testimonial_sub_title', array(
    'default' => 'Read More About Our Company',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_testimonial_sub_title', array(
    'label' => __('Sub Title', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'type' => 'text',
    'description' => __('Sub Title of Testimonilal section', 'mystart')
        )
);






/* Testimonilal - Item 1 Name */
$wp_customize->add_setting('mystart_testimonial_item_name_1', array(
    'default' => '',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_testimonial_item_name_1', array(
    'label' => __('Testimonilal Item 1 Title', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'type' => 'text'
        )
);



/* Testimonilal - Item 1 Position */
$wp_customize->add_setting('mystart_testimonial_item_pos_1', array(
    'default' => '',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_testimonial_item_pos_1', array(
    'label' => __('Testimonilal Position 1 Title', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'type' => 'text'
        )
);


/* Testimonilal - Item 1 Comment */
$wp_customize->add_setting('mystart_testimonial_item_comment_1', array(
    'default' => '',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_testimonial_item_comment_1', array(
    'label' => __('Testimonilal Item 1 Comment', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'type' => 'textarea'
        )
);


/* Testimonilal - Item 1 Avatar */
$wp_customize->add_setting('mystart_testimonial_item_avatar_1', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_testimonial_item_avatar_1', array(
    'label' => __('Upload Testimonial 1 image', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'settings' => 'mystart_testimonial_item_avatar_1'
        )
        )
);










/* Testimonilal - Item 2 Name */
$wp_customize->add_setting('mystart_testimonial_item_name_2', array(
    'default' => '',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_testimonial_item_name_2', array(
    'label' => __('Testimonilal Item 2 Title', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'type' => 'text'
        )
);



/* Testimonilal - Item 2 Position */
$wp_customize->add_setting('mystart_testimonial_item_pos_2', array(
    'default' => '',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_testimonial_item_pos_2', array(
    'label' => __('Testimonilal Position 2 Title', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'type' => 'text'
        )
);


/* Testimonilal - Item 2 Comment */
$wp_customize->add_setting('mystart_testimonial_item_comment_2', array(
    'default' => '',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_testimonial_item_comment_2', array(
    'label' => __('Testimonilal Item 2 Comment', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'type' => 'textarea'
        )
);


/* Testimonilal - Item 2 Avatar */
$wp_customize->add_setting('mystart_testimonial_item_avatar_2', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_testimonial_item_avatar_2', array(
    'label' => __('Upload Testimonial 2 image', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'settings' => 'mystart_testimonial_item_avatar_2'
        )
        )
);












/* Testimonilal - Item 3 Name */
$wp_customize->add_setting('mystart_testimonial_item_name_3', array(
    'default' => '',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_testimonial_item_name_3', array(
    'label' => __('Testimonilal Item 3 Title', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'type' => 'text'
        )
);



/* Testimonilal - Item 3 Position */
$wp_customize->add_setting('mystart_testimonial_item_pos_3', array(
    'default' => '',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_testimonial_item_pos_3', array(
    'label' => __('Testimonilal Position 3 Title', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'type' => 'text'
        )
);


/* Testimonilal - Item 3 Comment */
$wp_customize->add_setting('mystart_testimonial_item_comment_3', array(
    'default' => '',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_testimonial_item_comment_3', array(
    'label' => __('Testimonilal Item 3 Comment', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'type' => 'textarea'
        )
);


/* Testimonilal - Item 3 Avatar */
$wp_customize->add_setting('mystart_testimonial_item_avatar_3', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_testimonial_item_avatar_3', array(
    'label' => __('Upload Testimonial 3 image', 'mystart'),
    'section' => 'mystart_testimonial_options',
    'settings' => 'mystart_testimonial_item_avatar_3'
        )
        )
);

