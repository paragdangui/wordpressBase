<?php 
//initialization of customizer settings
add_theme_support('custom-logo'); //to enable site logo menu
// add_theme_support('post-thumbnails');// to enable banner image


function ExternalFiles()
{
    //Styles
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css");
    wp_enqueue_style('bootstrap-4-css', "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css");   
    wp_enqueue_style('material-icons', "https://fonts.googleapis.com/icon?family=Material+Icons");

    wp_enqueue_style('theme-style', get_template_directory_uri() . "/css/themestyle.css");

    // SCRIPTS
    wp_enqueue_script('bootstrap-4-js', "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js", array('jquery'), rand(1000, 50000), true);
    wp_enqueue_script('bootstrap-popper-js', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js", array('jquery'), rand(1000, 50000), true);
    wp_enqueue_script('bootstrap-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js", array('jquery'), rand(1000, 50000), true);
    wp_enqueue_script('theme-js-js', get_template_directory_uri() . "/js/theme_script.js", array('jquery'), rand(1000, 50000), true);
}

add_action('wp_enqueue_scripts', 'ExternalFiles');




?>








