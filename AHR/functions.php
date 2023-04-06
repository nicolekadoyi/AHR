<?php

/////////////////////////////Function to add styling///////////////////////////////////////
function siteStylesheets(){

    wp_enqueue_style("bootstrap" , "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css");
    wp_enqueue_style('cssStylesheet' , get_template_directory_uri() . '/dist/css/main.css' , [] , '  1.0' , 'all');
    wp_enqueue_style('googleFonts' , "https://fonts.googleapis.com/css2?family=DM+Sans&family=Public+Sans:wght@700&display=swap");
    wp_enqueue_style('fontAwesome' , "https://kit.fontawesome.com/1ded87c941.js");

}

add_action('wp_enqueue_scripts' , 'siteStylesheets');




/////////////////////////////Function to add custom post types///////////////////////////////////////

/*function custom_cases(){

    $args = array (  
        'labels' => array(

            'name' => 'Cases-studies',
            'singular_name' => 'Case-study',

        ),

        'hierarchical'     => false,
        'menu_icon'         => 'dashicons-admin-multisite',
        'public'            => true,
        'has_archive'       => true,
        'supports'          => array( 'title' , 'thumbnail' , 'excerpt' , 'custom_fields'),
        //'rewrite'         => array('slug' => 'case-studies'),
    );

    register_post_type('cases' , $args);
}

add_action('init' , 'custom_cases');




/////////////////////////////Function to add custom taxonomies///////////////////////////////////////
function caseStudiesTaxonomy(){

    $args = array(

        'labels' => array(

            'name'           => 'Backgrounds',
            'singular_name'  => 'Background',

        ),

        'public'        => true,
        'hierarchical'  => true,

    );

    register_taxonomy('backgrounds' , array('cases') , $args);

}
add_action('init' , 'caseStudiesTaxonomy');*/






/////////////////////////////Function to add image thumbnails///////////////////////////////////////


function addingSupport(){


        //Add image thumbnail support
        add_theme_support("post-thumbnails");
        add_image_size("small-img" , 320 , 320 , true);
        add_image_size("post-img" , 500 , 400 , true);
        add_image_size("simglePost-img" , 490 , 390 ,true);



         //Add navigation menu support

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




// register project post type

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