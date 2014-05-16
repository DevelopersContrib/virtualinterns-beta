<?php
add_action( 'init', 'create_resume_post_type' );
 
function create_resume_post_type() {
    $args = array(
                  'description' => 'Resume Post Type',
                  'show_ui' => true,
                  'menu_position' => 4,
                  'exclude_from_search' => true,
                  'labels' => array(
                                    'name'=> 'Resume',
                                    'singular_name' => 'Resume',
                                    'add_new' => 'Add New Resume',
                                    'add_new_item' => 'Add New Resume',
                                    'edit' => 'Edit Resume',
                                    'edit_item' => 'Edit Resume',
                                    'new-item' => 'New Resume',
                                    'view' => 'View Resumes',
                                    'view_item' => 'View Resume',
                                    'search_items' => 'Search Resume',
                                    'not_found' => 'No Resumes Found',
                                    'not_found_in_trash' => 'No Resume Found in Trash',
                                    'parent' => 'Parent Resume'
                                   ),
                 'public' => true,
                 'capability_type' => 'post',
                 'hierarchical' => false,
                 'rewrite' => true,
                 'supports' => array('title', 'editor', 'thumbnail', 'comments')
                 );
    register_post_type( 'resume' , $args );
}
?>