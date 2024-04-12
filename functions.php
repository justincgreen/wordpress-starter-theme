<?php
  /**
   * Functions and definitions
   *
   * @link https://developer.wordpress.org/themes/basics/theme-functions/
  */
  
  
  /**
  * Enable menu support.
  **/
  add_theme_support( 'menus' );
  
  /**
  * Enable post thumbnail support.
  *
  * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
  */
  add_theme_support('post-thumbnails');
  
  /**
   * Enable HTML5 markup support.
   *
   * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
  */
  add_theme_support('html5', [
    'caption',
    'comment-form',
    'comment-list',
    'gallery',
    'search-form',
    'script',
    'style',
  ]);
  
  /**
   * Disable the default block patterns.
   *
   * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
  */
  remove_theme_support('core-block-patterns');
  
 /**
   * Add theme stylesheet - tweaked to account for caching
   *
  */
   function theme_enqueue_style() {
       wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));
   }
   add_action( 'wp_enqueue_scripts', 'theme_enqueue_style' );
?>