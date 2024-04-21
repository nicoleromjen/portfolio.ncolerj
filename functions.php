<?php

function portfolio_nrj_theme_support(){
// Adds dynamic title tag support
add_theme_support('title-tag');
add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'portfolio_nrj_theme_support');

function portfolio_nrj_remove_gutenberg() {
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}

function nrj_menus(){
$locations = array(
    'primary' => "Header Menu",
    'footer' => "Footer Menu"
);

register_nav_menus($locations);
}

add_action('init','nrj_menus');


function portfolio_nrj_load_styles_and_script(){
wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), '5.3.1', 'all');
wp_enqueue_style('portfolio-nrj-style', get_template_directory_uri() . "/style.css",);
}

add_action("wp_enqueue_scripts", "portfolio_nrj_load_styles_and_script"); 


function portfolio_nrj_register_scripts(){

    wp_enqueue_script('portfolio-nrj-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js',array(),'3.4.1',true);

    wp_enqueue_script('portfolio-nrj-bootsrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',array(),'3.4.1',true);
    
    wp_enqueue_script('portfolio-nrj-popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js',array(),'1.16.0',true);

    wp_enqueue_script('portfolio-nrj-scripts',get_template_directory_uri(). "/assets/js/main.js", array(),'1.0',true);
}
    
    add_action( 'wp_enqueue_scripts', 'portfolio_nrj_register_scripts');



add_action ('init', 'portfolio_nrj_remove_gutenberg');
add_filter('use_block_editor_for_post', '__return_false');


add_image_size('custom_size', 1800, 800, false);
add_image_size('my_custom_size', 500, 8000, false);



