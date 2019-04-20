<?php

function djklack_setup(){

    add_theme_support('post-thumbnails');
    
    add_image_size('slider', 1500,400, true);

    add_image_size('entradas', 450, 490, true);

    add_image_size('tienda', 400, 480, true);
}
add_action('after_setup_theme','djklack_setup' );




// registrar stylos
function djklack_styles(){
wp_register_style('normalize', get_template_directory_uri(). '/css/normalize.css', array(), '8.0.1' );
wp_register_style('GoogleFonts','https://fonts.googleapis.com/css?family=Open+Sans|Archivo+Narrow|Roboto+Condensed|Ubuntu', array(), '1.0.0');
wp_register_style('style', get_template_directory_uri(). '/style.css', array('normalize'), '1.0.0' );
wp_register_style('FontAwesome', 'https://use.fontawesome.com/releases/v5.8.0/css/all.css', array('normalize'), '5.8.0');

// llamando los stylos
wp_enqueue_style('style');
wp_enqueue_style('normalize');
wp_enqueue_style('GoogleFonts');
wp_enqueue_style('FontAwesome');

// =====================================================

// registrar JS and jQuery
wp_register_script('scripts', get_template_directory_uri(). '/js/scripts.js', array(), '1.0.0', true);

wp_enqueue_script('scripts');
wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts','djklack_styles');

//-------------------------------------------------------

// Agregando los menus

function djklack_menus (){

register_nav_menus(array(

'header-menu' => __('Header Menu','klackevolution'),
'header-social' => __('header Social','klackevolution')

));


}
add_action('init','djklack_menus');

// Registar widget

register_sidebar(array(

'name' => 'Sidebar',
'id'=> 'sidebar-1',
'before_widget' => '<section class="widget">',
'after_widget' => '</section>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

