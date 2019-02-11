<?php
    // Register Nav Walker class_alias
    require_once get_template_directory().'/inc/wp-bootstrap-navwalker.php' ;

    //Theme support
    function wpb_theme_support() {
        
        //Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
    }

    add_action('after_setup_theme', 'wpb_theme_support');

    // Excerpt Length Control
    function set_excerpt_length() {
        return 45;
    }

    add_theme_support('post-thumbnails');

    add_filter('excerpt_length', 'set_excerpt_length');

    //Register Sidebar
    function blog_sidebar () {
        register_sidebar( array (
            'name' => __('Blog Sidebar', 'theme-slug'),
            'id' => 'sidebar-blog',
            'description' => __('Blog Widgets in this area will be shown on all posts', 'theme-slug'),
            'before_widget' => '<div class="card">',
            'after_widget' => '</div>',
            'before_title' => '<div class="card-header h5">',
            'after_title' => '</div>'
        ));
    }
    add_action('widgets_init', 'blog_sidebar');