<?php

function follow_theme_support(){
    // Add dynamic title tag support
    add_theme_support("title-tag");
}

add_action("after_setup_theme", "follow_theme_support");

// enque required files
function follow_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('follow-style', get_template_directory_uri()."/style.css", array('follow-bootstrap'), $version, "all");
    wp_enqueue_style('follow-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    wp_enqueue_style('follow-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13", "all");
}


// hook into wordpress commands
add_action("wp_enqueue_scripts", "follow_register_styles");

/// register scripts
function follow_register_scripts(){
    wp_enqueue_script('follow-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('follow-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('follow-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
    wp_enqueue_script('follow-js', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true);
}


// hook into wordpress commands
add_action("wp_enqueue_scripts", "follow_register_scripts");


// Setup menus
function follow_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Sidbar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'follow_menus');
?>