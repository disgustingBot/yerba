<?php

// database
// user: lattedev_gaea
// name: lattedev_gaea
// pass: mVLx3OAi21PBW6C0
// host: localhost

// wp-admin
// user: Zack
// pass: GF7Fo!M(xggj!%os&n

function gp_setup(){
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
  // wp_enqueue_script('main', get_theme_file_uri('/js/custom.js'), NULL, microtime(), true);
  // wp_enqueue_script('main', get_theme_file_uri('/js/custom2.js'), NULL, microtime(), true);
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}
add_action('wp_enqueue_scripts', 'gp_setup');

// Adding Theme Support

function gp_init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
  );
}
add_action('after_setup_theme', 'gp_init');

// this removes the "Archive" word from the archive title in the archive page
add_filter('get_the_archive_title',function($title){
  if(is_category()){$title=single_cat_title('',false);
  }elseif(is_tag()){$title=single_tag_title('',false);
  }elseif(is_author()){$title='<span class="vcard">'.get_the_author().'</span>';
  }return $title;
});


// Custom Post Type

function lattedev_restaurants() {
  register_post_type('restaurant',
    array(
      'rewrite' => array('slug' => 'restaurants'),
      'labels'  => array(
        'name'          => 'Restaurants',
        'singular_name' => 'Restarant',
        'add_new_item'  => 'Add New Restarant',
        'edit_item'     => 'Edit Restarant'
      ),
      'menu-icon'   => 'dashicons-clipboard',
      'public'      => true,
      'has_archive' => true,
      'supports'    => array(
        'title', 'thumbnail', 'editor', 'excerpt', 'comments'
      )
    )
  );
}
add_action('init', 'lattedev_restaurants');

function lattedev_locations() {
  register_post_type('location',
    array(
      'rewrite' => array('slug' => 'locations'),
      'labels'  => array(
        'name'          => 'Locations',
        'singular_name' => 'Location',
        'add_new_item'  => 'Add New Location',
        'edit_item'     => 'Edit Location'
      ),
      'menu-icon'   => 'dashicons-clipboard',
      'public'      => true,
      'has_archive' => true,
      'supports'    => array(
        'title', 'thumbnail', 'editor', 'excerpt', 'comments'
      )
    )
  );
}
add_action('init', 'lattedev_locations');


function ejr_jpeg_quality () {return 100;}
add_filter ('jpeg_quality', 'ejr_jpeg_quality');



function gp_get_related_posts( $post_id, $related_count, $args = array() ) {
	$args = wp_parse_args( (array) $args, array(
		'orderby' => 'rand',
		'return'  => 'query', // Valid values are: 'query' (WP_Query object), 'array' (the arguments array)
	) );

	$related_args = array(
		'post_type'      => get_post_type( $post_id ),
		'posts_per_page' => $related_count,
		'post_status'    => 'publish',
		'post__not_in'   => array( $post_id ),
		'orderby'        => $args['orderby'],
		'tax_query'      => array()
	);

	$post       = get_post( $post_id );
	$taxonomies = get_object_taxonomies( $post, 'names' );

	foreach ( $taxonomies as $taxonomy ) {
		$terms = get_the_terms( $post_id, $taxonomy );
		if ( empty( $terms ) ) {
			continue;
		}
		$term_list                   = wp_list_pluck( $terms, 'slug' );
		$related_args['tax_query'][] = array(
			'taxonomy' => $taxonomy,
			'field'    => 'slug',
			'terms'    => $term_list
		);
	}

	if ( count( $related_args['tax_query'] ) > 1 ) {
		$related_args['tax_query']['relation'] = 'OR';
	}

	if ( $args['return'] == 'query' ) {
		return new WP_Query( $related_args );
	} else {
		return $related_args;
	}
}



require_once get_stylesheet_directory() . '/inc/better-comments.php';

function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom');
