<?php

/**
 * Registers the `project` post type.
 */
function project_init() {
	register_post_type( 'project', array(
		'labels'                => array(
			'name'                  => __( 'Projects', 'andreibrindas' ),
			'singular_name'         => __( 'Project', 'andreibrindas' ),
			'all_items'             => __( 'All Projects', 'andreibrindas' ),
			'archives'              => __( 'Project Archives', 'andreibrindas' ),
			'attributes'            => __( 'Project Attributes', 'andreibrindas' ),
			'insert_into_item'      => __( 'Insert into Project', 'andreibrindas' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Project', 'andreibrindas' ),
			'featured_image'        => _x( 'Featured Image', 'project', 'andreibrindas' ),
			'set_featured_image'    => _x( 'Set featured image', 'project', 'andreibrindas' ),
			'remove_featured_image' => _x( 'Remove featured image', 'project', 'andreibrindas' ),
			'use_featured_image'    => _x( 'Use as featured image', 'project', 'andreibrindas' ),
			'filter_items_list'     => __( 'Filter Projects list', 'andreibrindas' ),
			'items_list_navigation' => __( 'Projects list navigation', 'andreibrindas' ),
			'items_list'            => __( 'Projects list', 'andreibrindas' ),
			'new_item'              => __( 'New Project', 'andreibrindas' ),
			'add_new'               => __( 'Add New', 'andreibrindas' ),
			'add_new_item'          => __( 'Add New Project', 'andreibrindas' ),
			'edit_item'             => __( 'Edit Project', 'andreibrindas' ),
			'view_item'             => __( 'View Project', 'andreibrindas' ),
			'view_items'            => __( 'View Projects', 'andreibrindas' ),
			'search_items'          => __( 'Search Projects', 'andreibrindas' ),
			'not_found'             => __( 'No Projects found', 'andreibrindas' ),
			'not_found_in_trash'    => __( 'No Projects found in trash', 'andreibrindas' ),
			'parent_item_colon'     => __( 'Parent Project:', 'andreibrindas' ),
			'menu_name'             => __( 'Projects', 'andreibrindas' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_rest'          => true,
		'rest_base'             => 'project',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'project_init' );

/**
 * Sets the post updated messages for the `project` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `project` post type.
 */
function project_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['project'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Project updated. <a target="_blank" href="%s">View Project</a>', 'andreibrindas' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'andreibrindas' ),
		3  => __( 'Custom field deleted.', 'andreibrindas' ),
		4  => __( 'Project updated.', 'andreibrindas' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Project restored to revision from %s', 'andreibrindas' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Project published. <a href="%s">View Project</a>', 'andreibrindas' ), esc_url( $permalink ) ),
		7  => __( 'Project saved.', 'andreibrindas' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Project submitted. <a target="_blank" href="%s">Preview Project</a>', 'andreibrindas' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Project scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Project</a>', 'andreibrindas' ),
		date_i18n( __( 'M j, Y @ G:i', 'andreibrindas' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Project draft updated. <a target="_blank" href="%s">Preview Project</a>', 'andreibrindas' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'project_updated_messages' );
