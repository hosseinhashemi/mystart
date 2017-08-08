<?php
/*
  # ===========================================
  # functions.php
  #
  # The theme functions.
  # ===========================================
 */




/* -------------------------------------------
 *  1 - CONSTANTS
 * ------------------------------------------- */
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/images');
define('JS', THEMEROOT . '/assets/js');






/* -------------------------------------------
 *  2 - THEME SETUP
 * ------------------------------------------- */

if (!function_exists('mystart_theme_setup')) {

    function mystart_theme_setup() {

        /* Make the theme available for translation. */
        $lang_dir = THEMEROOT . '/languages';
        load_theme_textdomain('mystart', $lang_dir);


        /* Add support for automatic feed links. */
        add_theme_support('automatic-feed-links');

        /* Add support for custom header. */

        register_default_headers(array(
            'wheel' => array(
                'url' => '%s/images/home-bg-thumb.jpg',
                'thumbnail_url' => '%s/images/home-bg.jpg',
                'description' => __('Wheel', 'mystart')
            )
        ));

        $defaults_custom_header = array(
            'default-image' => IMAGES . '/home-bg.jpg',
            'width' => 1366,
            'height' => 600,
            'flex-height' => false,
            'flex-width' => false,
            'uploads' => true,
            'random-default' => false,
            'header-text' => true,
            'default-text-color' => '',
            'wp-head-callback' => '',
            'admin-head-callback' => '',
            'admin-preview-callback' => '',
        );
        add_theme_support('custom-header', $defaults_custom_header);


        /* Add support for title tag. */
        add_theme_support('title-tag');



        /* Add support for gallery. */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));


        /* Add support for post thumbnails. */
        add_theme_support('post-thumbnails');

        /* Register nav menus. */
        register_nav_menus(array(
            'main-menu' => __('Main menu', 'mystart')
        ));
    }

    add_action('after_setup_theme', 'mystart_theme_setup');
}





/* -------------------------------------------
 *  3 - GET POST META
 * ------------------------------------------- */
if (!function_exists('mystart_post_meta')) {

    function mystart_post_meta() {
        if (get_post_type() === 'post') {

            $categories_list = get_the_category_list(', ');

            if ($categories_list) {
                echo '<p class = "post-categories">' . $categories_list . '</p>';
            }

            if (get_the_tag_list()) {
                echo get_the_tag_list('<ul class="meta-tags-list"><li>', '</li><li>', '</li></ul>');
            }
            echo '<p class = "post-meta">' . __('Posted by', 'mystart');
            printf(' <a href = "%1$s" rel="author">%2$s</a> ', esc_url(get_the_author_link()), get_the_author());
            _e('on', 'mystart');
            printf(__('Author Archives: %s', 'mystart'), '<span class="vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) . '" title="' . esc_attr(get_the_author()) . '" rel="me">' . get_the_author() . '</a></span>');



            echo ' ' . get_the_date() . '</p>';
        }
    }

}





/* -------------------------------------------
 *  4 - PAGINATION
 * ------------------------------------------- */
if (!function_exists('mystart_pagination')) {

    function mystart_pagination() {
        $args = array(
            'prev_next' => false,
            'type' => 'array'
        );

        $pagination = paginate_links($args);


        if (is_array($pagination)) {

            echo '<ul class="pager">';

            foreach ($pagination as $page) {

                if (strpos($page, 'current')) {
                    echo '<li class="next active"><a href="#">' . $page . '</a></li>';
                } else {
                    echo '<li class="next">' . $page . '</li>';
                }
            }

            echo '</ul>';
        }
    }

}





/* -------------------------------------------
 *  5 - REGISTER WIDGET AREAS
 * ------------------------------------------- */
if (!function_exists('mystart_widget_init')) {

    function mystart_widget_init() {

        if (function_exists('register_sidebar')) {

            register_sidebar(array(
                'name' => __('Main Widget Area', 'mystart'),
                'id' => 'main-sidebar',
                'description' => __('Appears in the blog pages', 'mystart'),
                'before_widget' => '<div id"%1$s" class="widget mystart-widget %2$s">',
                'after_widget' => '</div> <!-- end widget -->',
                'before_title' => '<h2 class="wigdeg-header">',
                'after_title' => '</h2>'
            ));


            register_sidebar(array(
                'name' => __('Footer 1', 'mystart'),
                'id' => 'footer-1',
                'description' => __('Add widgets here to appear in your footer area 1.', 'mystart'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));

            register_sidebar(array(
                'name' => __('Footer 2', 'mystart'),
                'id' => 'footer-2',
                'description' => __('Add widgets here to appear in your footer area 2.', 'mystart'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));

            register_sidebar(array(
                'name' => __('Footer 3', 'mystart'),
                'id' => 'footer-3',
                'description' => __('Add widgets here to appear in your footer area 3.', 'mystart'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));

            register_sidebar(array(
                'name' => __('Footer 4', 'mystart'),
                'id' => 'footer-4',
                'description' => __('Add widgets here to appear in your footer area 4.', 'mystart'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));
        }
    }

    add_action('widgets_init', 'mystart_widget_init');
}






/* -------------------------------------------
 *  6 - REGISTER Scripts
 * ------------------------------------------- */
if (!function_exists('mystart_scripts')) {

    function mystart_scripts() {

        /* Register scripts */
        wp_register_script('bootstrap-js', JS . '/bootstrap.js', array('jquery'), false, false, TRUE);
        wp_register_script('slim-menu', JS . '/jquery.slimmenu.js', array('jquery'), false, false, true);
        wp_register_script('jquery-easing', JS . '/jquery.easing.1-4-1.min.js', array('jquery'), false, false, true);
        wp_register_script('swiper-jquery', JS . '/swiper.jquery.min.js', array('jquery'), false, false, true);
        wp_register_script('percircle', JS . '/percircle.min.js', array('jquery'), false, false, true);
        wp_register_script('masonry-v4', JS . '/masonry.pkgd.min.js', false, false, false);
        wp_register_script('main-js', JS . '/main.js', false, false, true);


        /* Load scripts */
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('jquery-easing');
        wp_enqueue_script('slim-menu');
        wp_enqueue_script('swiper-jquery');
        wp_enqueue_script('percircle');
        wp_enqueue_script('masonry-v4');
        wp_enqueue_script('main-js');

        if (is_singular())
            wp_enqueue_script("comment-reply");


        /* Load stylesheets */
        wp_enqueue_style('bootstrap-css', THEMEROOT . '/assets/css/bootstrap.css');
        wp_enqueue_style('slim-menu-css', THEMEROOT . '/assets/css/slimmenu.min.css');
        wp_enqueue_style('swiper-css', THEMEROOT . '/assets/css/swiper.min.css');
        wp_enqueue_style('percircle-css', THEMEROOT . '/assets/css/percircle.min.css');
        wp_enqueue_style('main-css', THEMEROOT . '/assets/css/main.css');
        wp_enqueue_style('fontawesome', THEMEROOT . '/assets/css/font-awesome.min.css');
        wp_enqueue_style('google-font',  'https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,700');
        
        
    }

    add_action('wp_enqueue_scripts', 'mystart_scripts');
}




/* -------------------------------------------
 *  7 - COMMENTS NAV
 * ------------------------------------------- */

if (!function_exists('mystart_comment_nav')) {

    /**
     * Display navigation to next/previous comments when applicable.
     *
     * @since Twenty Fifteen 1.0
     */
    function mystart_comment_nav() {
        // Are there comments to navigate through?
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
            ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php _e('Comment navigation', 'mystart'); ?></h2>
                <div class="nav-links">
                    <?php
                    if ($prev_link = get_previous_comments_link(__('Older Comments', 'mystart'))) :
                        printf('<div class="nav-previous">%s</div>', $prev_link);
                    endif;

                    if ($next_link = get_next_comments_link(__('Newer Comments', 'mystart'))) :
                        printf('<div class="nav-next">%s</div>', $next_link);
                    endif;
                    ?>
                </div><!-- .nav-links -->
            </nav><!-- .comment-navigation -->
            <?php
        endif;
    }

}

function _custom_nav_menu_item($title, $url, $order, $parent = 0) {
    $item = new stdClass();
    $item->ID = 1000000 + $order + $parent;
    $item->db_id = $item->ID;
    $item->title = $title;
    $item->url = $url;
    $item->menu_order = $order;
    $item->menu_item_parent = $parent;
    $item->type = '';
    $item->object = '';
    $item->object_id = '';
    $item->classes = array();
    $item->target = '';
    $item->attr_title = '';
    $item->description = '';
    $item->xfn = '';
    $item->status = '';
    return $item;
}


add_filter( 'wp_nav_menu_items', 'add_search_to_nav', 10, 2 );

function add_search_to_nav( $items, $args ){
    $items .= '<li><a href="#search"><span class="fa fa-search"></span></a></li>';
    return $items;
}

/* -------------------------------------------
 *  9 - CONTENT WIDTH
 * ------------------------------------------- */

function mystart_content_width() {
    $GLOBALS['content_width'] = apply_filters('mystart_content_width', 750);
}

add_action('after_setup_theme', 'mystart_content_width', 0);



/* -------------------------------------------
 *  10 - CUSTOMIZER
 * ------------------------------------------- */
//require THEMEROOT . '/includes/customizer.php';
load_template( get_template_directory() . '/includes/customizer.php' );
load_template( get_template_directory() . '/includes/controls/select/post-dropdown-custom-control.php' );
