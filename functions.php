<?php

function prosek_theme_support(){
    add_theme_support('title-tag'); // Adds dynamic title support
    add_theme_support('custom-logo'); // Add logo Upload functionality to Theme
}
add_action('after_setup_theme', 'prosek_theme_support');

function prosek_styles(){
        $version = wp_get_theme()->get('Version'); // Get set version in style.css
        wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/css/style.css', array('prosek_bootstrap', 'prosek_hamburger'), $version, 'all'); // array arranges order of dependency loading before this loads
        wp_enqueue_style('prosek_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), '4.5.3', 'all');
		wp_enqueue_style('prosek_hamburger', get_template_directory_uri() . '/assets/css/hamburgers/dist/hamburgers.css', array(), '1.1.3', 'all');
		wp_enqueue_style('aos_css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all');
		wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1', 'all');
}
add_action('wp_enqueue_scripts', 'prosek_styles');  // Add Styles to header tag


function my_function_admin_bar(){ return false; }  // Removes padding top created by wp admin when logged in
add_filter( 'show_admin_bar' , 'my_function_admin_bar');  // Removes padding top created by wp admin when logged in


function prosek_scripts(){
	wp_enqueue_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', array(), '2.3.1', true);
    wp_enqueue_script('prosek_jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1', true); // Setting to true makes it appear in footer area where called, else it'll appear at top. Default is false
    wp_enqueue_script('prosek_bundle_jquery', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), '4.5.3', true);
    wp_enqueue_script('prosek_main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    wp_enqueue_script('map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC-7x6hwDBP0UvcSV_3HhFp62Ri2tDtQ1k&callback=initMap', array(), '1.0', true);
    
}
add_action('wp_enqueue_scripts', 'prosek_scripts'); // Add Scripts to footer


// Custom Bootstrap Slider
add_action( 'init', 'custom_bootstrap_slider' );
/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name'),
		'singular_name'      => _x( 'Slide', 'post type singular name'),
		'menu_name'          => _x( 'Prosek Slider', 'admin menu'),
		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Slide'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Slide'),
		'edit_item'          => __( 'Edit Slide'),
		'view_item'          => __( 'View Slide'),
		'all_items'          => __( 'All Slide'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Slide'),
		'parent_item_colon'  => __( 'Parent Slide:'),
		'not_found'          => __( 'No Slide found.'),
		'not_found_in_trash' => __( 'No Slide found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-format-gallery',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	);

	register_post_type( 'slider', $args );
}

// Display Featured Images for Slider
add_theme_support('post-thumbnails');
add_image_size('slides', 960, 400, true);
// add_image_size('name' (slides), width (960), height (400), true, (croppable -> true));


// CUSTOM MENUS
function prosek_menus(){
    $locations = array(
        'primary' => 'Side Bar Menu',
        'footer' => 'Footer Menu'

    );
    register_nav_menus($locations);
}
add_action('init', 'prosek_menus');


// Add Active Class to Active Menu
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


function staff_profile() {
	$labels = array(
		'name'               => _x( 'Staff Profile', 'post type general name'),
		'singular_name'      => _x( 'Profile', 'post type singular name'),
		'menu_name'          => _x( 'Staff Profile', 'admin menu'),
		'name_admin_bar'     => _x( 'Profile', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Profile'),
		'add_new_item'       => __( 'Name', 'Position', 'About'),
		'new_item'           => __( 'New Profile'),
		'edit_item'          => __( 'Edit Profile'),
		'view_item'          => __( 'View Profile'),
		'all_items'          => __( 'All Profiles'),
		'featured_image'     => __( 'Featured Image', 'text_domain'),
		'search_items'       => __( 'Search Profile'),
		'parent_item_colon'  => __( 'Parent Profile:'),
		'not_found'          => __( 'No Profile found.'),
		'not_found_in_trash' => __( 'No Profile found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-groups',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail'),
		'exclude_from_search' => true
	);

	register_post_type( 'profile', $args );
}
add_action( 'init', 'staff_profile' );


// function cptui_register_my_taxes_media_categories() {

// 	/**
// 	 * Taxonomy: Media Categories.
// 	 */

// 	$labels = array(
// 		"name" => __( "Media Categories", "southern-living-plants" ),
// 		"singular_name" => __( "Media Category", "southern-living-plants" ),
// 	);

// 	$args = array(
// 		"label" => __( "Media Categories", "southern-living-plants" ),
// 		"labels" => $labels,
// 		"public" => true,
// 		"publicly_queryable" => true,
// 		"hierarchical" => true,
// 		"show_ui" => true,
// 		"show_in_menu" => true,
// 		"show_in_nav_menus" => true,
// 		"query_var" => true,
// 		"rewrite" => array( 'slug' => 'media_categories', 'with_front' => true, ),
// 		"show_admin_column" => false,
// 		"show_in_rest" => true,
// 		"rest_base" => "media_categories",
// 		"rest_controller_class" => "WP_REST_Terms_Controller",
// 		"show_in_quick_edit" => false,
// 		);
// 	register_taxonomy( "media_categories", array( "attachment" ), $args );
// }
// add_action( 'init', 'cptui_register_my_taxes_media_categories' );


// add_filter( 'kdmfi_featured_images', function( $featured_images ) {
//   // Add featured-image-2 to pages and posts
//   $args = array(
//     'id' => 'featured-image-2',
//     'desc' => 'Your description here.',
//     'label_name' => 'Featured Image 2',
//     'label_set' => 'Set featured image 2',
//     'label_remove' => 'Remove featured image 2',
//     'label_use' => 'Set featured image 2',
//     'post_type' => array( 'page', 'post' ),
//   );

//   $featured_images[] = $args;

//   return $featured_images;
// });






add_action( 'init', 'project_register' );   

function project_register() {   

    $labels = array( 
        'name' => _x('Prosek Projects', 'post type general name'), 
        'singular_name' => _x('Project Item', 'post type singular name'), 
        'add_new' => _x('Add New', 'project item'), 
        'add_new_item' => __('Add New Project Item'), 
        'edit_item' => __('Edit Project Item'), 
        'new_item' => __('New Project Item'), 
		'all_items' => __( 'All Projects'),
        'view_item' => __('View Project Item'), 
        'search_items' => __('Search Project'), 
        'not_found' => __('Nothing found'), 
        'not_found_in_trash' => __('Nothing found in Trash'), 
        'parent_item_colon' => '' 
    );   

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true, 
        'menu_icon' => 'dashicons-admin-multisite', 
        'rewrite' =>  array( 'slug' => 'portfolio', 'with_front'=> false ), 
        'capability_type' => 'post', 
        'hierarchical' => true, // Intially True
        'has_archive' => true,  
        'menu_position' => null, 
        'supports' => array('title','editor','thumbnail') 
    );   

    register_post_type( 'project' , $args ); 

    register_taxonomy( 'categories', array('project'), array(
        'hierarchical' => true, 
        'label' => 'Categories', 
        'singular_label' => 'Category', 
        'rewrite' => array( 'slug' => 'categories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'categories', 'project' ); // Better be safe than sorry
}



// add_action('init', 'portfolio_register');  
   
// function portfolio_register() {  
//     $args = array(  
//         'label' => __('Portfolio'),  
//         'singular_label' => __('Project'),  
//         'public' => true,  
//         'show_ui' => true,  
//         'capability_type' => 'post',  
//         'hierarchical' => false,  
//         'rewrite' => true,  
//         'supports' => array('title', 'editor', 'thumbnail')  
//        );  
   
//     register_post_type( 'portfolio' , $args );  
// }

// register_taxonomy("project-type", array("portfolio"), array("hierarchical" => true, "label" => "Project Types", "singular_label" => "Project Type", "rewrite" => true));

// // /ADDING CUSTOM FIELDS

// add_action("admin_init", "portfolio_meta_box");   
 
 
// function portfolio_meta_box(){  
//     add_meta_box("projInfo-meta", "Project Options", "portfolio_meta_options", "portfolio", "side", "low");  
// }  
   
 
// function portfolio_meta_options(){  
//         global $post;  
//         if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
//         $custom = get_post_custom($post->ID);  
//         $link = $custom["projLink"][0];  
// ?>  

 <?php  
// 	}
	

// 	// SAVING CUSTOM DATA

// 	add_action('save_post', 'save_project_link'); 
   
// function save_project_link(){  
//     global $post;  
     
//     if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ 
//         return $post_id;
//     }else{
//         update_post_meta($post->ID, "projLink", $_POST["projLink"]); 
//     } 
// }


// CUSTOMIZING ADMIN COLUMNS
// add_filter("manage_edit-portfolio_columns", "project_edit_columns");   
   
// function project_edit_columns($columns){  
//         $columns = array(  
//             "cb" => "<input type=\"checkbox\" />",  
//             "title" => "Project",  
//             "description" => "Description",  
//             "link" => "Link",  
//             "type" => "Type of Project",  
//         );  
   
//         return $columns;  
// }  
 
// add_action("manage_posts_custom_column",  "project_custom_columns"); 
   
// function project_custom_columns($column){  
//         global $post;  
//         switch ($column)  
//         {  
//             case "description":  
//                 the_excerpt();  
//                 break;  
//             case "link":  
//                 $custom = get_post_custom();  
//                 echo $custom["projLink"][0];  
//                 break;  
//             case "type":  
//                 echo get_the_term_list($post->ID, 'project-type', '', ', ','');  
//                 break;  
//         }  
// }

// function gb_comment_form_tweaks ($fields) {
//     //add placeholders and remove labels
//     $fields['author'] = '<input id="author" name="author" value="" placeholder="Name*" size="30" maxlength="245" required="required" type="text">';

//     $fields['email'] = '<input id="email" name="email" type="email" value="" placeholder="Email*" size="30" maxlength="100" aria-describedby="email-notes" required="required">';	

//     //unset comment so we can recreate it at the bottom
//     unset($fields['comment']);

//     $fields['comment'] = '<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" placeholder="Comment*" required="required"></textarea>';

//     //remove website
//     unset($fields['url']);

//     return $fields;
// }

// add_filter('comment_form_fields', 'gb_comment_form_tweaks');

function template_chooser($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('project');   
  if( $wp_query->is_search && $post_type == 'projects' )   
  {
    return locate_template('archive-search.php');  //  redirect to archive-search.php
  }   
  return $template;   
}
add_filter('template_include', 'template_chooser'); 

?>