<?php


function wszedzie_theme_support()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'wszedzie_theme_support');

function wszedzie_menus()
{
    $locations = array(
        'primary' => "Menu Główne",
        'footer' => "Menu w stopce"
    );
    register_nav_menus($locations);
}

add_action('init', "wszedzie_menus");

$version = wp_get_theme()->get('Version');

function wszedzie_register_styles()
{
    wp_enqueue_style('wszedzie-style', get_template_directory_uri() . "/dist/app.bundle.css", array(), 'all');
    wp_enqueue_style('wszedzie-google-fonts', "https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap");
    wp_enqueue_style('wszedzie-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css", 'all');

}


add_image_size('thumbnails--full', 1920, 1920);


add_action('wp_enqueue_scripts', 'wszedzie_register_styles');

function wszedzie_register_scripts()
{


    wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/app.bundle.js', array(), 1, true);

}

add_action('wp_enqueue_scripts', 'wszedzie_register_scripts');


//function post_types()
//{
//    register_post_type("sesjeRodzinne", array(
//        'public' => true,
//        'labels' => array(
//            'name' => 'Sesje rodzinne',
//            'add_new_item' => 'Dodaj nową galerię',
//            'edit_item' => 'Edytuj galerię',
//            'all_items' => 'Wszystkie galerie',
//            'singular_name' => 'Sesja Rodzinna',
//        ),
//        'menu_icon' => 'dashicons-camera'
//
//    ));
//}
//
//add_action('init', 'post_types');


//

?>

