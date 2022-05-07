<?php
function THEMENAME_styles() {
 
wp_enqueue_style( 'THEMENAME-style', get_stylesheet_uri() );
 
}
 
add_action ( 'wp_enqueue_scripts', 'THEMENAME_styles');