<?php

function add_css() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'normalize_css', get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style( 'boilerplate_css', get_template_directory_uri().'/css/main.css');
    //wp_enqueue_style( 'google_fonts_css', 'https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans&display=swap');
    wp_enqueue_style( 'style_css', get_template_directory_uri().'/style.css');
}

function add_js() {
    //wp_enqueue_script( 'jquery_js', get_template_directory_uri().'/js/jquery-3.5.1.min.js');
    //wp_enqueue_script( 'themecustomizer_js', get_template_directory_uri().'/js/themecustomizer.js');
    wp_enqueue_script( 'font_awesome', 'https://kit.fontawesome.com/3cff3a2d1d.js');
    wp_enqueue_script( 'main_js', get_template_directory_uri().'/js/main.js');
}

// Register a new sidebar
function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}

function custom_header_setup() {
    $args = array(
        //'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => 'fefefe',
        //'width'              => 1000,
        //'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
        'header-text'        => true,
    );
    add_theme_support( 'custom-header', $args );
}

function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}

function setup_projects_cpt(){
    $labels = array(
        'name' => _x('Projects', 'post type general name'),
        'singular_name' => _x('Project', 'post type singular name'),
        'add_new' => _x('Add New', 'Project'),
        'add_new_item' => __('Add New Project'),
        'edit_item' => __('Edit Project'),
        'new_item' => __('New Project'),
        'all_items' => __('All Projects'),
        'view_item' => __('View Project'),
        'search_items' => __('Search Projects'),
        'not_found' => __('No Projects Found'),
        'not_found_in_trash' => __('No Projects found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Projects'
        );
    $args = array(
        'labels' => $labels,
        'description' => 'Presonal projects that I have been working on',
        'rewrite' => array('slug' => 'projects'),
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields',),
        'has_archive' => true,
        'taxonomies' => array(''),
        'menu_icon' => 'dashicons-images-alt', 
        );
    register_post_type('projects', $args);
}
add_action('init', 'setup_projects_cpt');

function projects_taxonomy() {  
    register_taxonomy(  
        'project_categories',  // Name should be in slug form (no spaces and all lowercase. no caps). 
        'projects',        
        array(  
            'hierarchical' => true,  
            'label' => 'Project Categories', 
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'projects', // Base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'projects_taxonomy');


function customizer_options($wp_customize) {

}


function customize_css()
{
    
}

add_theme_support( 'post-thumbnails', array( 'projects' ) );

add_action( 'wp_enqueue_scripts', 'add_css');
add_action( 'wp_enqueue_scripts', 'add_js');
add_action( 'widgets_init', 'add_Widget_Support' );
add_action( 'after_setup_theme', 'custom_header_setup' );
add_action( 'init', 'add_Main_Nav' );
// add_action( 'customize_register','customizer_options' );
// add_action( 'wp_head', 'customize_css');
