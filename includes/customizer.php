<?php

function mystart_customize_register($wp_customize) {

    $wp_customize->add_panel('mystart_main_options', array(
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Theme options', 'mystart'),
        'description' => __('Panel to update services items', 'mystart'), // Include html tags such as <p>.
        'priority' => 10 // Mixed with top-level-section hierarchy.
    ));


    $wp_customize->add_section('mystart_services_options', array(
        'title' => __('Services', 'mystart'),
        'priority' => 30,
        'panel' => 'mystart_main_options'
    ));

    /* Services - Main title*/
    $wp_customize->add_setting('mystart_main_services_title', array('default' => __('SERVICES','mystart')));
    $wp_customize->add_control('mystart_main_services_title', array(
        'label' => __('Main Title', 'mystart'),
        'section' => 'mystart_services_options',
        'type' => 'text',
        'description' => __('Main Title of Services section', 'mystart')
        )
    );
    
    
    /* Services - sub title*/
    $wp_customize->add_setting('mystart_services_sub_title', array('default' => ''));
    $wp_customize->add_control('mystart_services_sub_title', array(
        'label' => __('Sub Title', 'mystart'),
        'section' => 'mystart_services_options',
        'type' => 'text',
        'description' => __('Sub Title of Services section', 'mystart')
        )
    );
    
    
    /* Services - Item 1 title*/
    $wp_customize->add_setting('mystart_services_item_title_1', array('default' => ''));
    $wp_customize->add_control('mystart_services_item_title_1', array(
        'label' => __('Service Item 1 Title', 'mystart'),
        'section' => 'mystart_services_options',
        'type' => 'text',
        'description' => __('', 'mystart')
        )
    );
    
    
    /* Services - Item 1 icon*/
    $wp_customize->add_setting('mystart_services_item_icon_1', array('default' => 'glyphicon-phone'));
    $wp_customize->add_control('mystart_services_item_icon_1', array(
        'label' => __('Service Item 1 Icon', 'mystart'),
        'section' => 'mystart_services_options',
        'type' => 'text',
        'description' => __('', 'mystart')
        )
    );
    
    
    /* Services - Item 1 desc*/
    $wp_customize->add_setting('mystart_services_item_desc_1', array('default' => ''));
    $wp_customize->add_control('mystart_services_item_desc_1', array(
        'label' => __('Service Item 1 Description', 'mystart'),
        'section' => 'mystart_services_options',
        'type' => 'textarea',
        'description' => __('', 'mystart')
        )
    );
    
    
    
    
    
    
    /* Services - Item 2 title*/
    $wp_customize->add_setting('mystart_services_item_title_2', array('default' => ''));
    $wp_customize->add_control('mystart_services_item_title_2', array(
        'label' => __('Service Item 2 Title', 'mystart'),
        'section' => 'mystart_services_options',
        'type' => 'text',
        'description' => __('', 'mystart')
        )
    );
    
    
    /* Services - Item 2 icon*/
    $wp_customize->add_setting('mystart_services_item_icon_2', array('default' => 'glyphicon-phone'));
    $wp_customize->add_control('mystart_services_item_icon_2', array(
        'label' => __('Service Item 2 Icon', 'mystart'),
        'section' => 'mystart_services_options',
        'type' => 'text',
        'description' => __('', 'mystart')
        )
    );
    
    
    /* Services - Item 2 desc*/
    $wp_customize->add_setting('mystart_services_item_desc_2', array('default' => ''));
    $wp_customize->add_control('mystart_services_item_desc_2', array(
        'label' => __('Service Item 2 Description', 'mystart'),
        'section' => 'mystart_services_options',
        'type' => 'textarea',
        'description' => __('', 'mystart')
        )
    );
    
    
    
    /* Services - Item 3 title*/
    $wp_customize->add_setting('mystart_services_item_title_3', array('default' => ''));
    $wp_customize->add_control('mystart_services_item_title_3', array(
        'label' => __('Service Item 3 Title', 'mystart'),
        'section' => 'mystart_services_options',
        'type' => 'text',
        'description' => __('', 'mystart')
        )
    );
    
    
    /* Services - Item 3 icon*/
    $wp_customize->add_setting('mystart_services_item_icon_3', array('default' => 'glyphicon-phone'));
    $wp_customize->add_control('mystart_services_item_icon_3', array(
        'label' => __('Service Item 3 Icon', 'mystart'),
        'section' => 'mystart_services_options',
        'type' => 'text',
        'description' => __('', 'mystart')
        )
    );
    
    
    /* Services - Item 3 desc*/
    $wp_customize->add_setting('mystart_services_item_desc_3', array('default' => ''));
    $wp_customize->add_control('mystart_services_item_desc_3', array(
        'label' => __('Service Item 3 Description', 'mystart'),
        'section' => 'mystart_services_options',
        'type' => 'textarea',
        'description' => __('', 'mystart')
        )
    );



}

add_action('customize_register', 'mystart_customize_register');





/* * **************************************************************
 * 
 *              Custom Controls
 * 
 * ************************************************************** */
if (class_exists('WP_Customize_Control')) {

    class mystart_Customize_Textarea_Control extends WP_Customize_Control {

        public $type = 'textarea';

        public function render_content() {

            echo '<label';
            echo '<span class="customize-control-title">' . esc_html($this->label) . '</span>';
            echo '<textarea rows="2" style ="width: 100%;"';
            $this->link();
            echo '>' . esc_textarea($this->value()) . '</textarea>';
            echo '</label>';
        }

    }

}
