<?php

// Change all instances of a7conditionaltheme to your theme name.
if ( ! function_exists( 'a7SamuelVillegas_setup' ) ) :
 
   function a7SamuelVillegas_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'custom-header' );

     register_nav_menus( array(
        'menu-main' => 'Main Menu',
        'menu-social' => 'Social Menu',
      ));
   }
 
endif;
 
add_action('after_setup_theme', 'a7SamuelVillegas_setup');
 
function a7SamuelVillegas_scripts_styles(){
   wp_enqueue_style('a7SamuelVillegas_style', get_stylesheet_uri());
   wp_enqueue_style('my_first_theme_googlefonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',array(),null);
   wp_enqueue_style('my_first_theme_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
   wp_enqueue_script('customLoopTheme_script_utils_js', get_template_directory_uri() . '/js/utils.js', array(), null, true);
}
 
add_action('wp_enqueue_scripts', 'a7SamuelVillegas_scripts_styles');


function portfolioTheme(){
   $defaults = array(
      'height' => 400,
      'width' => 400,
      'flex-height' => true,
      'flex-width' => true,
      'header-text' => array('site-title', 'site-description'),
      'unlink-homepage-logo' => true,
   );

   add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'portfolioTheme');