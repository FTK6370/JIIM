<?php

function jiim_register_styles() {
    wp_enqueue_style('jiim-css', get_template_directory_uri() . "/style.css", array(), microtime(), 'all' );
    wp_enqueue_style('jiim-bootstrap-css', get_template_directory_uri() . "/bootstrap.min.css", array(), microtime(), 'all' );
    wp_enqueue_style('jiim-bootstrap-scss', get_template_directory_uri() . "/scss/bootstrap.scss", array(), microtime(), 'all' );
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap", array(), microtime(), 'all' );
    wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css", array(), microtime(), 'all' );
    wp_enqueue_style('bootsrap-icon', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css", array(), microtime(), 'all' );
    wp_enqueue_style('jiim-owl', get_template_directory_uri() . "/lib/owlcarousel/assets/owl.carousel.min.css", array(), microtime(), 'all' );
}    

function jiim_register_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('jiim-js', get_template_directory_uri() . "/js/main.js", array(), microtime(), 'all' );
    wp_enqueue_script('jiim-jquery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), '1.0', 'all' );
    wp_enqueue_script('jiim-jsdeliver', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js", array(), '1.0', 'all' );
    
    wp_enqueue_script('jiim-easing', get_template_directory_uri() . "/lib/easing/easing.min.js", $dependencies, '1.0', 'all' );
    wp_enqueue_script('jiim-waypoints', get_template_directory_uri() . "/lib/waypoints/waypoints.min.js", $dependencies, '1.0', 'all' );
    wp_enqueue_script('jiim-owl-carousel', get_template_directory_uri() . "/lib/owlcarousel/owl.carousel.min.js", $dependencies, microtime(), 'all' );
    wp_enqueue_script('jiim-owl-carousel-js', get_template_directory_uri() . "/lib/owlcarousel/owl.carousel.js", $dependencies, microtime(), 'all' );
}    


add_action( 'wp_enqueue_scripts', 'jiim_register_styles' );
add_action( 'wp_enqueue_scripts', 'jiim_register_scripts' );

function jiim_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
     array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'jiim_init');

function jiim_custom_post_type() {
  	set_post_thumbnail_size( 800, 500 );
  	$count_key = 'post_views_count';
    register_post_type('news',
        array(
            'rewrite' => array('slug' => 'news'),
            'labels' => array(
                'name' => 'News',
                'singular_name' => 'News',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnails', 'editor', 'excerpt', 'comments'
            )
        )
    );
}

add_action('init', 'jiim_custom_post_type');



?>