<?php

/* Our Team - Main title */
$wp_customize->add_setting('mystart_main_team_title', array(
    'default' => __('Our Team', 'mystart'),
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_main_team_title', array(
    'label' => __('Our Team Section Main Title', 'mystart'),
    'section' => 'mystart_team_options',
    'type' => 'text',
    'description' => __('Main Title of Our Team section', 'mystart')
        )
);



/* Our Team - sub title */
$wp_customize->add_setting('mystart_team_sub_title', array(
    'default' => 'Get Familiar With Our Team',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_team_sub_title', array(
    'label' => __('Sub Title', 'mystart'),
    'section' => 'mystart_team_options',
    'type' => 'text',
    'description' => __('Sub Title of Our Team section', 'mystart')
        )
);






/* Our Team - Item 1 Name */
$wp_customize->add_setting('mystart_team_item_name_1', array(
    'default' => 'Member 1',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_team_item_name_1', array(
    'label' => __('Our Team Item 1 Name', 'mystart'),
    'section' => 'mystart_team_options',
    'type' => 'text'
        )
);



/* Our Team - Item 1 Position */
$wp_customize->add_setting('mystart_team_item_pos_1', array(
    'default' => 'CEO',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_team_item_pos_1', array(
    'label' => __('Our Team Position 1', 'mystart'),
    'section' => 'mystart_team_options',
    'type' => 'text'
        )
);



/* Our Team - Item 1 Avatar */
$wp_customize->add_setting('mystart_team_item_avatar_1', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_team_item_avatar_1', array(
    'label' => __('Upload Testimonial 1 image', 'mystart'),
    'section' => 'mystart_team_options',
    'settings' => 'mystart_team_item_avatar_1'
        )
        )
);










/* Our Team - Item 2 Name */
$wp_customize->add_setting('mystart_team_item_name_2', array(
    'default' => 'Member 2',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_team_item_name_2', array(
    'label' => __('Our Team Item 2 Name', 'mystart'),
    'section' => 'mystart_team_options',
    'type' => 'text'
        )
);



/* Our Team - Item 2 Position */
$wp_customize->add_setting('mystart_team_item_pos_2', array(
    'default' => 'Developer',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_team_item_pos_2', array(
    'label' => __('Our Team Position 2 ', 'mystart'),
    'section' => 'mystart_team_options',
    'type' => 'text'
        )
);



/* Our Team - Item 2 Avatar */
$wp_customize->add_setting('mystart_team_item_avatar_2', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_team_item_avatar_2', array(
    'label' => __('Upload Testimonial 2 image', 'mystart'),
    'section' => 'mystart_team_options',
    'settings' => 'mystart_team_item_avatar_2'
        )
        )
);












/* Our Team - Item 3 Name */
$wp_customize->add_setting('mystart_team_item_name_3', array(
    'default' => 'Member 3',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_team_item_name_3', array(
    'label' => __('Our Team Item 3 Name', 'mystart'),
    'section' => 'mystart_team_options',
    'type' => 'text'
        )
);



/* Our Team - Item 3 Position */
$wp_customize->add_setting('mystart_team_item_pos_3', array(
    'default' => 'Designer',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_team_item_pos_3', array(
    'label' => __('Our Team Position 3', 'mystart'),
    'section' => 'mystart_team_options',
    'type' => 'text'
        )
);


/* Our Team - Item 3 Avatar */
$wp_customize->add_setting('mystart_team_item_avatar_3', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_team_item_avatar_3', array(
    'label' => __('Upload Testimonial 3 image', 'mystart'),
    'section' => 'mystart_team_options',
    'settings' => 'mystart_team_item_avatar_3'
        )
        )
);








/* Our Team - Item 4 Name */
$wp_customize->add_setting('mystart_team_item_name_4', array(
    'default' => 'Member 4',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_team_item_name_4', array(
    'label' => __('Our Team Item 4 Name', 'mystart'),
    'section' => 'mystart_team_options',
    'type' => 'text'
        )
);



/* Our Team - Item 4 Position */
$wp_customize->add_setting('mystart_team_item_pos_4', array(
    'default' => 'Support',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('mystart_team_item_pos_4', array(
    'label' => __('Our Team Position 4', 'mystart'),
    'section' => 'mystart_team_options',
    'type' => 'text'
        )
);


/* Our Team - Item 4 Avatar */
$wp_customize->add_setting('mystart_team_item_avatar_4', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize, 'mystart_team_item_avatar_4', array(
    'label' => __('Upload Testimonial 4 image', 'mystart'),
    'section' => 'mystart_team_options',
    'settings' => 'mystart_team_item_avatar_4'
        )
        )
);
