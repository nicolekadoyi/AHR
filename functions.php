<?php
/*require_once __DIR__ . '/includes/Mobile_Detect.php';
require_once __DIR__ . '/includes/post_types.php';
require_once __DIR__ . '/includes/taxonomies.php';
require_once __DIR__ . '/includes/acf/acf.php';
require_once __DIR__ . '/includes/widgets.php';
require_once __DIR__ . '/includes/bootstrap_helper.php';
require_once __DIR__ . '/includes/navwalker.php';
require_once __DIR__ . '/includes/shortcodes.php';*/

/*
  ==========================================
   Include scripts
  ==========================================
*/

function siteStylesheets(){

  wp_enqueue_style("bootstrap" , "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css");
  wp_enqueue_style('main' , "http://localhost:8080/wordpress/wordpress/wp-content/themes/template/dist/css/main.css");
  wp_enqueue_style('googleFonts' , "https://fonts.googleapis.com/css2?family=DM+Sans&family=Public+Sans:wght@700&display=swap");
  wp_enqueue_style('fontAwesome' , "https://kit.fontawesome.com/1ded87c941.js");

}

add_action('wp_enqueue_scripts' , 'siteStylesheets');


/*
  ==========================================
   Activate menus
  ==========================================
*/
function theme_setup()
{
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Menu');
  register_nav_menu('secondary', 'Secondary Navigation Menu');
}

add_action('init', 'theme_setup');

/*
  ==========================================
   Theme support function
  ==========================================
*/

add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form'));
add_theme_support( 'title-tag' );



 /*
  ==========================================
  Adding Theme Support
  ==========================================
*/

function addingSupport(){


  //Add image thumbnail support
  add_theme_support("post-thumbnails");
  add_image_size("small-img" , 320 , 320 , true);
  add_image_size("post-img" , 500 , 400 , true);
  add_image_size("simglePost-img" , 490 , 390 ,true);

         
  add_theme_support('menus');

         register_nav_menus(

            array(
                'footer1' => 'Footer One Location',
                'footer2' => 'Footer Two Location',
                'footer3' => 'Footer Three Location',
                'footer4' => 'Footer Four Location',
                'legal1' => 'Legal One Location',
                'legal2' => 'Legal Two Location',
                'legal3' => 'Legal Three Location',
                
            )
            );

}

add_action("after_setup_theme" , "addingSupport");



/*
  ==========================================
  Adding Theme Support
  ==========================================
*/

function register_projects()
{
    register_post_type(
        'project',
        [
        'labels'                => [
        'name'                  => 'Project',
        'singular_name'         => 'Project',
        'all_items'             => 'All Projects',
        'add_new'               => 'New project',
        'add_new_item'          => 'New project',
        'edit'                  => 'Edit project',
        'edit_item'             => 'Edit project',
        'new_item'              => 'New project',
        'view'                  => 'View project',
        'view_item'             => 'View project',
        'search_items'          => 'Search Project',
        'not_found'             => 'No Project found',
        'not_found_in_trash'    => 'No Project found in trash',
        ],
        'public'                => true,
        'show_in_rest'          => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'exclude_from_search'   => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'project'),
        'enable_search'         => true,
        'menu_position'         => 41,
        'menu_icon'             => 'dashicons-format-aside',
        'supports'              => [ 'title', 'revisions' , 'excerpt' , 'thumbnail' ],
        'has_archive'           => true,
		'taxonomies'          	=> array( 'category' ),
        ]
    );
}

add_action('init', 'register_projects');
















?>
