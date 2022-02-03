<?php

add_action( 'wp_enqueue_scripts', 'jet_one_child_enqueue_front' );

function jet_one_child_enqueue_front(){
  wp_enqueue_style( 'jet-one-style-parent', get_template_directory_uri() .'/style.css' );
  wp_enqueue_style( 'jet-one-style' );
}

if ( ! function_exists( 'cjc_register_nav_menu' ) ) {

  function cjc_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Super Menu', 'CjcTheme' ),
    ));
  }
  add_action( 'after_setup_theme', 'cjc_register_nav_menu', 0 );
}
