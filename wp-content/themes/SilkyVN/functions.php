<?php
// DEFINE
define('THEME_URI',get_theme_file_uri() );


// HOOK
function get_homepage_sytle(){
    // register
  
    wp_register_style('homepage_style',THEME_URI.'/assets/css/homepage.css');
    // enqueue
    wp_enqueue_style('homepage_style');
}
function get_about_style(){
    // register
  
    wp_register_style('about_style',THEME_URI.'/assets/css/about.css');
    // enqueue
    wp_enqueue_style('about_style');
}
function get_blog_style(){
     // register
  
     wp_register_style('blog_style',THEME_URI.'/assets/css/blog.css');
     // enqueue
     wp_enqueue_style('blog_style');
}

function get_header_script(){
    wp_register_script('header_script',THEME_URI.'/assets/js/header.js' );
    wp_enqueue_script('header_script');
}

function get_blog_script(){
    wp_register_script('blog_script', THEME_URI. '/assets/js/blog.js' );
    wp_enqueue_script('blog_script');
}
function get_product_style(){
    wp_register_style('product_style', THEME_URI.'/assets/css/product.css');
    wp_enqueue_style('product_style');
}
function get_product_script(){
    wp_register_script('product_script', THEME_URI. '/assets/js/product.js' );
    wp_enqueue_script('product_script');
}
// hook style
add_action('homepage_style','get_homepage_sytle');
add_action('about_style','get_about_style');
add_action('blog-style','get_blog_style');
add_action('product_style','get_product_style');

// hook script
add_action('product_style','get_product_script');
add_action('wp_footer','get_header_script');
add_action('blog-style','get_blog_script');
?>