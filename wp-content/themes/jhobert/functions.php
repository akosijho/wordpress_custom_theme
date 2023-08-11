<?php


// enque required files
function follow_register_styles(){
    wp_enqueue_style('follow-style', get_template_directory_uri()."/style.css", array(), "1.0", "all");
    wp_enqueue_style('follow-fontawesome', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "1.0", "all");
    wp_enqueue_style('follow-bootstrap', get_template_directory_uri(), "/style.css", array(), "1.0", "all");
}


// hook into wordpress commands
add_action("wp_enqueue_scripts", "follow_register_styles");

?>