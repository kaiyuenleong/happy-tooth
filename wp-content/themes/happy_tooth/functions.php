<?php

  function setup() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300,700&display=swap');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
  }

  add_action('wp_enqueue_scripts', 'setup');


  function theme_enqueue_scripts() {
    wp_enqueue_style('Bootstrap_css', get_template_directory_uri().'/bootstrap/css/bootstrap.min.css');
    wp_enqueue_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true);
    wp_enqueue_script('Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/esm/popper.min.js', array(), '1.16.1', true);
    wp_enqueue_script('Bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', array(), '1.0.0', true);
  }

  add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

  function enqueue_our_required_stylesheets(){
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/2e8f251620.js'); 
  }

  add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

  // function bootstrapstarter_enqueue_styles() {
  //   wp_register_style('bootstrap', get_template_directory_uri().'/bootstrap/css/bootstrap.min.css');
  //   $dependencies = array('bootstrap');
  //   wp_enqueue_style('boostrapstarter-style', get_stylesheet_uri(), $dependencies);
  // }

  // function jquerystarter() {
  //   wp_deregister_script('jquery');
  //   wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js", false, null);
  // }

  // function boostrapstarter_enqueue_scripts() {
  //   wp_enqueue_script('jquery');
  //   wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', array('jquery'), '3.4.1', true);
  // }

  // add_action('wp_enqueue_scripts', 'jquerystarter');
  // add_action('wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles');
  // add_action('wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts');

  // Adding theme support
  function init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
      array('comment-list', 'comment-form', 'search-form')
    );
  }

  add_action('after_setup_theme', 'init');

  // News and press post type
  function custom_post_type() {
    register_post_type('news',
      array(
        'rewrite' => array('slug' => 'news'),
        'labels' => array (
          'name' => 'News and Press',
          'singular_name' => 'News Article',
          'add_new_item' => 'Add New Article',
          'edit_item' => 'Edit Article'
        ),
        'menu-icon' => 'dashicons-clipboard',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
          'title', 'thumbnail', 'editor', 'excerpt'
        )
      )
    );
  }

  add_action('init', 'custom_post_type');
?>