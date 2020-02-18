<?php 

function eduhub_register_my_cpts_section() {


	$labels = [
		"name" => __( "Sliders", "eduhub" ),
		"singular_name" => __( "Slider", "eduhub" ),
        
	];

	$args = [
		"label" => __( "Sliders", "eduhub" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "sliders", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title", "editor","thumbnail"],
        "taxonomies"=>array('category'),
	];

	register_post_type( "slider", $args );

	

    
	$labels = [
		"name" => __( "Testimonials", "eduhub" ),
		"singular_name" => __( "Testimonial", "eduhub" ),
		"add_new" => __( "Add Testimonial", "eduhub" ),
	];

	$args = [
		"label" => __( "Testimonials", "eduhub" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "testimonials", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "editor","thumbnail"],
	];

	register_post_type( "eduhub_testimonials", $args );	
    
    
   $labels = [
		"name" => __( "Partners", "eduhub" ),
		"singular_name" => __( "Partner", "eduhub" ),
		"add_new" => __( "Add Image", "eduhub" ),
		"featured_image" => __( "Pertner Image", "eduhub" ),
		"set_featured_image" => __( "Add Pertner Image", "eduhub" ),
	];

	$args = [
		"label" => __( "Partners", "eduhub" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "case-studies", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-image",
		"supports" => [ "title","thumbnail"],
	];

	register_post_type( "partners", $args );    
    
  $labels = [
		"name" => __( "FAQ", "eduhub" ),
		"singular_name" => __( "FAQ", "eduhub" ),
	];

	$args = [
		"label" => __( "FAQ", "eduhub" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "faq", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-lightbulb",
		"supports" => [ "title", "editor"],
	];

	register_post_type( "faq", $args ); 
    
    
  
    

	
	
	$labels = [
		"name" => __( "Gallery", "eduhub" ),
		"singular_name" => __( "Gallery", "eduhub" ),
		"add_new" => __( "Add Image", "eduhub" ),
		"set_featured_image" => __( "Add Gallery Image", "eduhub" ),
        
	];

	$args = [
		"label" => __( "Gallery", "eduhub" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "gallery", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title","thumbnail"],
        "taxonomies"=>array('category'),
	];

	register_post_type( "gallery", $args );	   

	
	
	$labels = [
		"name" => __( "Study Abroad", "eduhub" ),
		"singular_name" => __( "Study Abroad", "eduhub" ),
        
	];

	$args = [
		"label" => __( "Gallery", "eduhub" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "study-abroads", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title","thumbnail","editor"],
        "taxonomies"=>array('category'),
	];

	register_post_type( "study-abroads", $args );	
	
	
	
	
	
	$labels = [
		"name" => __( "Reservation", "eduhub" ),
		"singular_name" => __( "Reservation", "eduhub" ),
		
        
	];

	$args = [
		"label" => __( "Reservation", "eduhub" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "reservation", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 10,
		"menu_icon" => "dashicons-book-alt",
		"supports" => [ "title"],
        "taxonomies"=>array('category'),
	];

	register_post_type( "reservation", $args );
	
	
		$labels = [
		"name" => __( "Video", "eduhub" ),
		"singular_name" => __( "Video", "eduhub" ),
		"add_new"=>__( "Add Video Item", "eduhub" ),
		
        
	];

	$args = [
		"label" => __( "Video", "eduhub" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "Video", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-video",
		"supports" => [ "title", "editor"],
        "taxonomies"=>array('category'),
	];

	register_post_type( "video", $args );
	
	
}
add_action( 'init', 'eduhub_register_my_cpts_section' );