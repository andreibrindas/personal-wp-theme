<?php 

add_theme_support( 'title-tag' );
add_theme_support( 'title-tmenusag' );
add_theme_support( 'html5' );
add_theme_support( 'post-thumbnails' );


function themename_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'andreibrindas' ),
        'footer_menu'  => __( 'Footer Menu', 'andreibrindas' ),
    ) );
}
add_action( 'after_setup_theme', 'themename_register_nav_menu', 0 );