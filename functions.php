<?php
function custom_theme_styles() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_styles' );
?>