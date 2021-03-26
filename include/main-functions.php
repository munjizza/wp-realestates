<?php
// remove admin bar for all trader_cdlupsidegap2crows
add_filter('show_admin_bar','__return_false');

// register CSS
function realestate_register_styles(){
  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('realestate-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
  wp_enqueue_style('realestate-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
  wp_enqueue_style('realestate-slick', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array(), '1.8.1', 'all');
  wp_enqueue_style('realestate-style', get_template_directory_uri() . "/assets/css/main.css", array('realestate-bootstrap'), $version, 'all');
  wp_enqueue_style('realestate-style-pages', get_template_directory_uri() . "/assets/css/pages.css", array('realestate-bootstrap'), $version, 'all');
}

add_action( 'wp_enqueue_scripts', 'realestate_register_styles');

// register JS
function realestate_register_scripts(){
  wp_enqueue_script('realestate-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
  wp_enqueue_script('realestate-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" , array(), '1.16.0', true);
  wp_enqueue_script('realestate-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
  wp_enqueue_script('realestate-slick', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(), '1.8.1', true);
  wp_enqueue_script('realestate-main', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'realestate_register_scripts');

// theme support
function realestate_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','realestate_theme_support');

// create menus
function realestate_menus(){
  $locations = array(
    'header_nav' => "Header Nav",
    'header-black_nav' => "Header Nav - Black",
    'footer_nav' => "Footer Nav",
    'footer_nav_terms' => "Footer Nav Terms",
    'footer_nav_social' => "Footer Menu Social",
    );
  register_nav_menus($locations);
  }

add_action('init','realestate_menus');

// Add sections to admin panel
// function sections_posttype()
// {
//     register_post_type('sections',
//         array(
//             'labels' => array(
//                 'name' => __('Sections'),
//                 'singular_name' => __('Section'),
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => array('slug' => 'Sections'),
//             'show_in_rest' => true,
//             'menu_icon' => 'dashicons-admin-page',
//             'taxonomies' => array('category')
//         )
//     );
// }

// add_action('init', 'sections_posttype');


// if( function_exists('acf_add_options_page') ) {
//
//     acf_add_options_page(array(
//         'page_title' 	=> 'Theme General Settings',
//         'menu_title'	=> 'Additional Theme Settings',
//         'menu_slug' 	=> 'theme-general-settings',
//         'capability'	=> 'edit_posts',
//         'redirect'		=> true
//     ));
//
//     acf_add_options_sub_page(array(
//         'page_title' 	=> 'Theme Footer Settings',
//         'menu_title'	=> 'Footer',
//         'parent_slug'	=> 'theme-general-settings',
//     ));

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


// if( function_exists('acf_add_options_page') ) {
	
// 	acf_add_options_page(array(
// 		'page_title' 	=> 'Theme General Settings',
// 		'menu_title'	=> 'Theme Settings',
// 		'menu_slug' 	=> 'theme-general-settings',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false
// 	));
	
// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Theme Header Settings',
// 		'menu_title'	=> 'Header',
// 		'parent_slug'	=> 'theme-general-settings',
// 	));
	
// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Theme Footer Settings',
// 		'menu_title'	=> 'Footer',
// 		'parent_slug'	=> 'theme-general-settings',
// 	));
	
// }
