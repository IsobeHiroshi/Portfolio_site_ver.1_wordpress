<?php

// Change all instances of finalhiroshiisobe to your theme name.
if ( ! function_exists( 'finalhiroshiisobe_setup' ) ) :
 
   function finalhiroshiisobe_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );

     register_nav_menus( array(
        'menu-main'     =>    'Main Menu', 
     ) );
   }
 
endif;
 
add_action('after_setup_theme', 'finalhiroshiisobe_setup');
 
function finalhiroshiisobe_scripts_styles(){
   wp_enqueue_style('finalhiroshiisobe_style', get_stylesheet_uri());
   wp_enqueue_style('finalhiroshiisobe_style_googlefonts', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Roboto:wght@400;700;900', array(), null);
   wp_enqueue_style('finalhiroshiisobe_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}
 
add_action('wp_enqueue_scripts', 'finalhiroshiisobe_scripts_styles');

function re_register_post_tag_taxonomy() {
  $tag_slug_args = get_taxonomy('post_tag');
  $tag_slug_args  -> hierarchical = true;
  $tag_slug_args  -> meta_box_cb = 'post_categories_meta_box';
  register_taxonomy('post_tag', 'post', (array) $tag_slug_args);
}
add_action( 'init', 're_register_post_tag_taxonomy', 1 );