<?php
    function mdb_cs_js () {
        wp_enqueue_style( 'mdb', get_template_directory_uri() .'/css/mdb.min.css', array(), '1.0.0', 'all' );
        wp_enqueue_style ('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0', 'all');
        wp_enqueue_style ('font-awesome', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css');

        wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'mdb', get_template_directory_uri() . '/js/mdb.js', array('jquery'), '1.0.0', true );
    }

    add_action('wp_enqueue_scripts', 'mdb_cs_js'); //First parameter = hook, second parameter = action
?>