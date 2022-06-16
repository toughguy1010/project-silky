<?php

if(!function_exists('glw_enqueue')){
    function glw_enqueue(){
        echo '========================1';
        $ver = time();

        // gg font
        wp_register_style('glw_googlefont_1','https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:ital,wght@0,400;0,500;1,500&display=swap' );
        wp_register_style('glw_googlefont_2','https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&family=Roboto:wght@100&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap' );
        wp_register_style('glw_googlefont_3','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:ital,wght@1,900&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap' );
        wp_register_style('glw_googlefont_4','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@200&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap');
        wp_register_style('glw_googlefont_5','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@200&family=Roboto:wght@300&family=Tiro+Devanagari+Hindi:ital@1&family=Tiro+Devanagari+Sanskrit&display=swap' );
        // css
        echo "000000".THEME_URI.'../Achelois_theme/assest/css/homepage.css';
        wp_register_style('glw_homepage_style',THEME_URI.'../Achelois_theme/assest/css/homepage.css');



        //enqueue
        wp_enqueue_style('glw_homepage_style');

    }

}
?>