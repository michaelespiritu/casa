<?php

class RegisterPostTypeAndTemplate {

		function __construct(){
			add_action( 'init', [ $this, 'casa_register_post_type' ] );
			add_action( 'template_include', [ $this, 'casa_load_templates' ] );
		}

		function casa_register_post_type() {
			$singular = __( 'Casa Listing' );
			$plural = __( 'Casa Listings' );

		  //Used for the rewrite slug below.
		  $plural_slug = __('casa');

		  //Setup all the labels to accurately reflect this post type.
			$labels = array(
				'name' 					=> $plural,
				'singular_name' 		=> $singular,
				'add_new' 				=> 'Add New',
				'add_new_item' 			=> 'Add New ' . $singular,
				'edit'		        	=> 'Edit',
				'edit_item'	        	=> 'Edit ' . $singular,
				'new_item'	        	=> 'New ' . $singular,
				'view' 					=> 'View ' . $singular,
				'view_item' 			=> 'View ' . $singular,
				'search_term'   		=> 'Search ' . $plural,
				'parent' 				=> 'Parent ' . $singular,
				'not_found' 			=> 'No ' . $plural .' found',
				'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
			);

		  //Define all the arguments for this post type.
			$args = array(
				'labels' 			  => $labels,
				'public'              => true,
		    'publicly_queryable'  => true,
		    'exclude_from_search' => false,
		    'show_in_nav_menus'   => true,
		    'show_ui'             => true,
		    'show_in_menu'        => true,
		    'show_in_admin_bar'   => true,
		    'menu_position'       => 6,
		    'menu_icon'           => 'dashicons-admin-multisite',
		    'can_export'          => true,
		    'delete_with_user'    => false,
		    'hierarchical'        => false,
		    'has_archive'         => true,
		    'query_var'           => true,
		    'capability_type'     => 'page',
		    'map_meta_cap'        => true,
		    // 'capabilities' => array(),
		    'rewrite'             => array(
		    	'slug' => strtolower( $plural_slug ),
		    	'with_front' => true,
		    	'pages' => true,
		    	'feeds' => false,
		    ),
		    'supports'            => array(
		    	'title',
					//'thumbnail'
		    )
			);
		        //Create the post type using the above two varaiables.
			register_post_type( 'casa', $args);
		}


		function casa_load_templates( $original_template ) {


					 if(is_singular('casa')) {
		           if (  file_exists( get_stylesheet_directory(). '/single-casa.php' ) ) {
		                   return get_stylesheet_directory() . '/single-casa.php';
		           } else {
		                   return plugin_dir_path( __DIR__ ) . '/includes/templates/single-casa.php';
		           }
		       }else if ( is_archive() || is_search() ) {
		             if ( file_exists( get_stylesheet_directory(). '/archive-casa.php' ) ) {
		                   return get_stylesheet_directory() . '/archive-casa.php';
		             } else {
		                     return plugin_dir_path( __DIR__ ) . '/includes/templates/archive-casa.php';
		             }
		       }else{

		       		return get_page_template();

		       }

		        return $original_template;
		}

}


$registerPostTypeAndTemplate = new RegisterPostTypeAndTemplate();
