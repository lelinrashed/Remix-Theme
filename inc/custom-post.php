<?php 


	// Register custom post type for portfolio section

	add_action( 'init', 'portfolio_post_type' );
	
	function portfolio_post_type() {
		$labels = array(
			'name'               => _x( 'Portfolios', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Portfolio', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'Portfolios', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New', 'Portfolio', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add New Portfolio', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New Portfolio', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit Portfolio', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View Portfolio', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All Portfolios', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search Portfolios', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent Portfolios:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No Portfolios found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'your-plugin-textdomain' )
		);

		$args = array(
			'labels'             => $labels,
	        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'Portfolio' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		);

		register_post_type( 'portfolio', $args );
	}


	// Register custom taxonomy for proftfolio section

	
	add_action( 'init', 'portfolio_taxonomy', 0 );
	function portfolio_taxonomy() {

		$labels = array(
			'name'              => _x( 'Genres', 'taxonomy general name', 'textdomain' ),
			'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'textdomain' ),
			'search_items'      => __( 'Search Genres', 'textdomain' ),
			'all_items'         => __( 'All Genres', 'textdomain' ),
			'parent_item'       => __( 'Parent Genre', 'textdomain' ),
			'parent_item_colon' => __( 'Parent Genre:', 'textdomain' ),
			'edit_item'         => __( 'Edit Genre', 'textdomain' ),
			'update_item'       => __( 'Update Genre', 'textdomain' ),
			'add_new_item'      => __( 'Add New Genre', 'textdomain' ),
			'new_item_name'     => __( 'New Genre Name', 'textdomain' ),
			'menu_name'         => __( 'Genre', 'textdomain' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'genre' ),
		);

		register_taxonomy( 'genre', array( 'portfolio' ), $args );

	}

































 ?>