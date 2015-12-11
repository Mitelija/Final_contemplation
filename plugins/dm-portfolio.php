<?php
/*
Plugin Name: final
*/

function dm_setup_post_type() {
 
    // Register our "book" custom post type
    register_post_type( 'final', 
      array(
        'labels' => array(
          'name' => __('final'),
          'singular_name' => __('final')
          ),
       'public' => true,
       'has_archive' => true
      ) 
    );
 
}
// make sure the second argument of this function matches the name of the method above
add_action( 'init', 'dm_setup_post_type' );


// ==================================================================
 

// this will fix any permalink issues that might reult from adding the post type
function dm_install() {
 
    // Trigger our function that registers the custom post type
    dm_setup_post_type();
 
    // Clear the permalinks after the post type has been registered
    flush_rewrite_rules();
 
}
register_activation_hook( __FILE__, 'dm_install' );


// ==================================================================


// Show posts of 'post', 'page' and 'portfolio_item' post types on home page
// add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

// function add_my_post_types_to_query( $query ) {
//   if ( is_home() && $query->is_main_query() )
//     $query->set( 'post_type', array( 'post', 'page', 'portfolio_item' ) );
//   return $query;
// }