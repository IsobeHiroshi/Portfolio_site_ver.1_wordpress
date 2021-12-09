<?php

if ( ! function_exists( 'finalhiroshiisobe_setup' ) ) :

   function finalhiroshiisobe_setup() {
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     register_nav_menus( array(
        'menu-main'     =>    'Main Menu', 
     ) );
   }

endif;

add_action('after_setup_theme', 'finalhiroshiisobe_setup');

/* Queue stylesheet and Google fonts */
function finalhiroshiisobe_scripts_styles(){
   wp_enqueue_style('finalhiroshiisobe_style', get_stylesheet_uri());
   wp_enqueue_style('finalhiroshiisobe_style_googlefonts', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Roboto:wght@400;700;900', array(), null);
   wp_enqueue_style('finalhiroshiisobe_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'finalhiroshiisobe_scripts_styles');

/* Show tag list in the post edit screen*/
function re_register_post_tag_taxonomy() {
  $tag_slug_args    =   get_taxonomy('post_tag');
  $tag_slug_args    ->  hierarchical = true;
  $tag_slug_args    ->  meta_box_cb = 'post_categories_meta_box';
  register_taxonomy('post_tag', 'post', (array) $tag_slug_args);
}
add_action( 'init', 're_register_post_tag_taxonomy', 1 );

/* Hide "Category:" or "Tag:"in the archive page*/
function custom_archive_title($title){
    $titleParts = explode(': ',$title);
    if($titleParts[1]){
        return $titleParts[1];
    }
    return $title;
}
add_filter('get_the_archive_title','custom_archive_title');

/* Show custom posts on the archive page */
function tg_include_custom_post_types_in_archive_pages( $query ) {
    if ( $query->is_main_query() && ! is_admin() && ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) ) {
        $query->set( 'post_type', array( 'past_work' ) );
    }
}
add_action( 'pre_get_posts', 'tg_include_custom_post_types_in_archive_pages' );