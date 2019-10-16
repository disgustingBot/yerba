<?php

require_once 'customPosts.php';


function gp_setup(){
  wp_localize_script('mylib', 'WPURLS', array( 'siteurl' => get_option('siteurl') ));

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




function excerpt($charNumber){
  $excerpt = get_the_excerpt();
  $excerpt = substr($excerpt, 0, $charNumber);
  $result  = substr($excerpt, 0, strrpos($excerpt, ' '));
  // $result += $result . '(...)';
  return $result;
}







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












// [restaurants  location='ibiza' cant=5]
add_shortcode( 'restaurants', 'lattedev_call_restaurants' );
function lattedev_call_restaurants( $atts ) {
  $q = new WP_Query(array(
      'post_type' => 'restaurant',
      'posts_per_page' => $atts['cant'],
      'tax_query' => array(
          array(
              'taxonomy' => 'loc',   // taxonomy name
              'field' => 'slug',           // term_id, slug or name
              'terms' => $atts['location'],                  // term id, term slug or term name
          )
      ),
  ));
  while ($q->have_posts()) {$q->the_post();
    $buffer .= '<figure class="hidshow grid">';
      $buffer .= '<img class="hidshowImg rowcol1" src="'.get_the_post_thumbnail_url(get_the_ID()).'" alt="">';
      $buffer .= '<figcaption class="grid rowcol1">';
        $buffer .= '<p class="itemTitle rowcol1 itemTitleTR">'.get_the_title().'</p>';
        $buffer .= '<p class="rowcol1 hidshowTxt">'.get_the_excerpt().'</p>';
      $buffer .= '</figcaption>';
    $buffer .= '</figure>';
  } wp_reset_postdata();
  return $buffer;
}


// [magazine  tag='featured']
add_shortcode( 'magazine', 'lattedev_call_magazine' );
function lattedev_call_magazine( $atts ) {
  $buffer .= '<section class="section">
                <h4 class="centerTitle colMax">
                  <span class="magazineTitle1">CBbC</span>
                  <span class="specialTxt">Life</span>
                  <span class="magazineTitle3">Magazine</span>
                </h4>
                <flex class="magazineFlex flex3 colMax">';

    $q = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'tag' => $atts['tag'],
    ));
    while ($q->have_posts()) {$q->the_post();
      $buffer .= '<figure class="standarCard">';
        $buffer .= '<img class="standarCardImg rowcol1" src="'.get_the_post_thumbnail_url(get_the_ID()).'" alt="">';
        $buffer .= '<figcaption class="standarCardTxt">';
          $buffer .= '<h6>'.get_the_title().'</h6>';
          $buffer .= '<p>'.excerpt(100).'</p>';
        $buffer .= '</figcaption>';
      $buffer .= '</figure>';
    } wp_reset_postdata();

    $buffer .= '</flex></section>';

    return $buffer;
}



// [map]
add_shortcode( 'map', 'lattedev_call_map' );
function lattedev_call_map( $atts ) {
  $buffer .= '<section class="ayuda">
                <iframe class="ayudaMap" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cala%20bassa%20CBbC%2C%20ibiza+(CBbC)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              </section>';

  return $buffer;
}
