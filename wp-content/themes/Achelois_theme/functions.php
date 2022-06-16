<?php
// DEFINE
define('THEME_URI',get_theme_file_uri() );
// HOOK

function glw_enqueue(){
 

    // gg font
    wp_register_style('glw_googlefont_1','https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:ital,wght@0,400;0,500;1,500&display=swap' );
    wp_register_style('glw_googlefont_2','https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&family=Roboto:wght@100&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap' );
    wp_register_style('glw_googlefont_3','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:ital,wght@1,900&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap' );
    wp_register_style('glw_googlefont_4','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@200&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap');
    wp_register_style('glw_googlefont_5','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@200&family=Roboto:wght@300&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap' );
    // css
   
    wp_register_style('glw_homepage_style',THEME_URI.'/assest/css/homepage.css');
    wp_register_style('boostrap_style',THEME_URI.'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    
    //enqueue
    wp_enqueue_style('glw_homepage_style');
    wp_enqueue_style('boostrap_style');
    wp_enqueue_style('glw_googlefont_1');
    wp_enqueue_style('glw_googlefont_2');
    wp_enqueue_style('glw_googlefont_3');
    wp_enqueue_style('glw_googlefont_4');
    wp_enqueue_style('glw_googlefont_5');
}


add_action('homepage','glw_enqueue');



function shop_style(){
    wp_register_style('glw_googlefont_1','https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:ital,wght@0,400;0,500;1,500&display=swap' );
    wp_register_style('glw_googlefont_2','https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&family=Roboto:wght@100&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap' );
    wp_register_style('glw_googlefont_3','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:ital,wght@1,900&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap' );
    wp_register_style('glw_googlefont_4','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@200&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap');
    wp_register_style('glw_googlefont_5','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@200&family=Roboto:wght@300&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap' );


    wp_register_style('glw_shop_style', THEME_URI .'/assest/css/shop.css' );
    wp_enqueue_style('glw_shop_style');

}
add_action('wp_shop','shop_style');

function detail_style(){
    wp_register_style('glw_googlefont_1','https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:ital,wght@0,400;0,500;1,500&display=swap' );
    wp_register_style('glw_googlefont_2','https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&family=Roboto:wght@100&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap' );
    wp_register_style('glw_googlefont_3','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:ital,wght@1,900&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap' );
    wp_register_style('glw_googlefont_4','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@200&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap');
    wp_register_style('glw_googlefont_5','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@200&family=Roboto:wght@300&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap' );


    wp_register_style('glw_detail_style', THEME_URI .'/assest/css/detail_product.css' );
    wp_enqueue_style('glw_detail_style');

}
add_action('wp_detail','detail_style')
// INcludes

// include(get_theme_file_path('includes/enqueue.php'));


    



?>