<?php
// remove admin bar for all trader_cdlupsidegap2crows
add_filter('show_admin_bar', '__return_false');

// register CSS
function realestate_register_styles()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('realestate-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
  wp_enqueue_style('realestate-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
  wp_enqueue_style('realestate-slick', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array(), '1.8.1', 'all');
  wp_enqueue_style('realestate-style', get_template_directory_uri() . "/assets/css/main.css", array('realestate-bootstrap'), $version, 'all');
  wp_enqueue_style('realestate-style-pages', get_template_directory_uri() . "/assets/css/pages.css", array('realestate-bootstrap'), $version, 'all');
}

add_action('wp_enqueue_scripts', 'realestate_register_styles');

// register JS
function realestate_register_scripts()
{
  wp_enqueue_script('realestate-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
  wp_enqueue_script('realestate-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
  wp_enqueue_script('realestate-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
  wp_enqueue_script('realestate-slick', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(), '1.8.1', true);
  wp_enqueue_script('realestate-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'realestate_register_scripts');

// theme support
function realestate_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'realestate_theme_support');

// create menus
function realestate_menus()
{
  $locations = array(
    'header_nav' => "Header",
    'header_nav_black' => "Header - black",
    'footer_nav' => "Footer",
    'footer_nav_terms' => "Footer - terms"
  );
  register_nav_menus($locations);
}

add_action('init', 'realestate_menus');


// Add options page to admin panel
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Additional Fields',
		'menu_title'	=> 'Additional Fields',
		'menu_slug' 	=> 'additional-fields-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Additional Footer Fields',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'additional-fields-settings',
	));

  acf_add_options_sub_page(array(
		'page_title' 	=> 'Additional Header Fields',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'additional-fields-settings',
	));
}

// Add sections to admin panel
function sections_posttype()
{
    register_post_type('sections',
        array(
            'labels' => array(
                'name' => __('Sections'),
                'singular_name' => __('Section'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Sections'),
            'show_in_rest' => true,
            'menu_position' => 7,
        )
    );
}

add_action('init', 'sections_posttype');

// Custom post type function
function create_posttype()
{
  $labels = array(
    'name' => __('Investments'),
    'singular_name' => __('Investment'),
    'menu_name'           => __('Investments'),
    'all_items'           => __('All Investments'),
    'view_item'           => __('View Investments'),
    'add_new_item'        => __('Add New Investment'),
    'add_new'             => __('Add New'),
    'edit_item'           => __('Edit Investment'),
    'update_item'         => __('Update Investment'),
    'search_items'        => __('Search Investment'),
  );

  $args = array(
    'label'               => __('investments'),
    'description'         => __('Investments - properties'),
    'labels'              => $labels,
    'supports'            => array('title', 'excerpt', 'thumbnail', 'custom-fields'),
    'hierarchical'        => false,
    'has_archive'         => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'show_in_rest' => true,
  );

  register_post_type('investments', $args);
}

add_action('init', 'create_posttype');
