<?php


function TestProject_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'TestProject_theme_support');



function testProject_menus()
{

    $locations = array(
        'primary' => "Main nav menu",
        'hamburger' => "Hamburger nav menu",
        'footer' => "Footer nav menu",
    );
    register_nav_menus($locations);
}

add_action('init', 'testProject_menus');





function projektas_register_styles()
{
    wp_enqueue_style('TestProject-template-styles', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), false, 'all');
    wp_enqueue_style('TestProject-owl-style', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", array(), null, 'all');
    wp_enqueue_style('TestProject-owl-theme', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css", array(), null, 'all');
    wp_enqueue_style('TestProject-owl-animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css", array(), null, 'all');
    wp_enqueue_style('TestProject-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css", array(), null, 'all',);
}
add_action('wp_enqueue_scripts', 'projektas_register_styles');






function projektas_register_scripts()
{
    wp_enqueue_script('TestProject-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), null, 'all', true);
    wp_enqueue_script('TestProject-bootsrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js", array(), null, 'all', true);
    wp_enqueue_script('TestProject-owl-script', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array(), null, 'all', true);
    wp_enqueue_script('TestProject-script', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], false, true);
}
add_action('wp_enqueue_scripts', 'projektas_register_scripts');
