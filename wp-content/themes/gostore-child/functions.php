<?php 
function gostore_child_register_scripts(){
    $parent_style = 'gostore-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array('font-awesome-5', 'gostore-reset'), gostore_get_theme_version() );
    wp_enqueue_style( 'gostore-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'gostore_child_register_scripts' );