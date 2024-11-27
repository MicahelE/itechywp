<?php
function itechy_register_styles(){
    
    $version= wp_get_theme()->get('Version');
    wp_enqueue_style('itechy-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css", array(), '4.5', 'all');
    wp_enqueue_style('itechy-animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css", array(), '4', 'all');

    wp_enqueue_style('itechy-aos', "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), '2.3.1', 'all');
    
    wp_enqueue_style('itechy-fontawesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7', 'all');
    wp_enqueue_style('itechy-roboto', "https://fonts.googleapis.com/css?family=Roboto Slab", array(), '1', 'all');
 
    wp_enqueue_style('itechy-style', get_template_directory_uri() . "/assets/css/style.css", array('itechy-fontawesome'), $version, 'all');
   
    
}

add_action('wp_enqueue_scripts', 'itechy_register_styles');



function itechy_register_scripts(){
    
    $version= wp_get_theme()->get('Version');

    wp_enqueue_script('itechy-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);

    wp_enqueue_script('itechy-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);

    wp_enqueue_script('itechy-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '3.4.1', true);

    wp_enqueue_script('itechy-main', get_template_directory_uri() ."/assets/js/main.js", array(), $version, true);
   
    
}

add_action('wp_enqueue_scripts', 'itechy_register_scripts');
