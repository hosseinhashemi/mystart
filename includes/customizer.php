<?php

function mystart_customize_register($wp_customize) {

    $wp_customize->add_panel('mystart_main_options', array(
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Theme options', 'mystart'),
        'description' => __('Panel to update services items', 'mystart'), // Include html tags such as <p>.
        'priority' => 10 // Mixed with top-level-section hierarchy.
    ));
    
    
    
    

    /* ================/
     * Services Section 
    /  ================*/
    $wp_customize->add_section('mystart_services_options', array(
        'title' => __('Services', 'mystart'),
        'priority' => 30,
        'panel' => 'mystart_main_options'
    ));
    
    require_once( get_template_directory() . '/includes/customize-section/customize-services.php' );
    
    
    
    
    
    /* ================/
     * About us Section 
    /  ================*/
    $wp_customize->add_section('mystart_about_options', array(
        'title' => __('About Us', 'mystart'),
        'priority' => 30,
        'panel' => 'mystart_main_options'
    ));
    require_once( get_template_directory() . '/includes/customize-section/customize-about.php' );


    
    
    
    /* ================/
     *  Latest Post
    /  ================*/
    $wp_customize->add_section('mystart_blog_options', array(
        'title' => __('Latest Posts', 'mystart'),
        'priority' => 30,
        'panel' => 'mystart_main_options'
    ));
    require_once( get_template_directory() . '/includes/customize-section/customize-blog.php' );


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
