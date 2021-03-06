<?php 

//adding the CSS and JS files
// <script src="https://kit.fontawesome.com/9eb8685772.js" crossorigin="anonymous"></script>
//<link href="https://fonts.googleapis.com/css2?family=Karla&family=Rubik:wght@400;500&display=swap" rel="stylesheet">

function ie_setup(){
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Karla&family=Rubik:wght@400;500&display=swap');
    wp_enqueue_style( 'fontawesome', 'https://kit.fontawesome.com/9eb8685772.js');
    wp_enqueue_style( 'style', get_stylesheet_uri(), NULL , microtime());
    wp_enqueue_script( 'main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);

}

add_action('wp_enqueue_scripts', 'ie_setup');

// Adding Theme Support

function ie_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
);
}

add_action('after_setup_theme', 'ie_init');

// Projects post type

function ie_custom_post_type(){
    register_post_type('project',
    array(
        'rewrite' => array('slug' => 'projects'),
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Add New Projects',
            'edit_item' => 'Edit Project'
        ),
        'menu-icon' => 'dashicons-clipboard',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title','thumbnail', 'editor', 'exerpt', 'comments'
        )
        ));
}

add_action('init','ie_custom_post_type');

?>