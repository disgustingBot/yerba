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


// add_action('init', 'cyb_session_start', 1);
// function cyb_session_start() {
//     if( ! session_id() ) {
//         session_start();
//     }
// }

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
        $buffer .= '<a class="standarCardImg rowcol1" href="'.get_permalink().'"><img class="standarCardImg" src="'.get_the_post_thumbnail_url(get_the_ID()).'" alt=""></a>';
        $buffer .= '<figcaption class="standarCardTxt">';
          $buffer .= '<h6><a href="'.get_permalink().'">'.get_the_title().'</a></h6>';
          $buffer .= '<p><a href="'.get_permalink().'">'.excerpt(65).'</a></p>';
        $buffer .= '</figcaption>';
      $buffer .= '</figure>';
    } wp_reset_postdata();

    $buffer .= '</flex></section>';

    return $buffer;
}


// TODO: mejorar el shorcode del mapa
// [map location='ibiza']
add_shortcode( 'map', 'lattedev_call_map' );
function lattedev_call_map( $atts ) {
  if ($atts['location'] == "ibiza") {
    $map = '<iframe class="ayudaMap" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cala%20bassa%20CBbC%2C%20ibiza+(CBbC)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"                                                                                                                       frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>';
  } elseif ($atts['location'] == "andorra") {
    $map = '<iframe class="ayudaMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33260.739969159324!2d1.7120075146981708!3d42.536989346729236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a58760b67c9eb5%3A0x6dcc9cf8116988!2sCBbC%20Costa%20Rodona!5e0!3m2!1ses-419!2sde!4v1572768018279!5m2!1ses-419!2sde" frameborder="0" style="border:0;" allowfullscreen=""></iframe>';
  } else {
    // $map = '<iframe class="ayudaMap" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cala%20bassa%20CBbC%2C%20ibiza+(CBbC)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"                                                                                                                       frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>';
    $map = 'El coso';
  }
  $buffer .= '<section class="ayuda">'.$map;
  $buffer .=   '<h4 class="ayudaTitle specialTitle rowcol1">¿En qué podemos ayudarte?</h4>
                <flex class="ayudaFlex flex2">
                  <figure class="info">
                    <a href="'.site_url('/contacto').'">
                      <img class="infoImg" src="'.get_template_directory_uri().'/img/ibiza/booking.png" alt="">
                    </a>
                    <figcaption class="infoCaption">
                      <a href="'.site_url('/contacto').'">
                        <h5 class="infoTitle">Reserva</h5>
                      </a>
                      <a href="'.site_url('/contacto').'">
                        <p>Lorem ipsum dolor sit amet ipsum dolor.</p>
                      </a>
                    </figcaption>
                  </figure>
                  <figure class="info">
                    <a href="'.site_url('/contacto').'">
                      <img class="infoImg" src="'.get_template_directory_uri().'/img/ibiza/info.png" alt="">
                    </a>
                    <figcaption class="infoCaption">
                      <a href="'.site_url('/contacto').'">
                        <h5 class="infoTitle">Donde Aparcar</h5>
                      </a>
                      <a href="'.site_url('/contacto').'">
                        <p>Lorem ipsum dolor sit amet ipsum dolor.</p>
                      </a>
                    </figcaption>
                  </figure>';
  $buffer .= '</flex></section>';

  return $buffer;
}






add_shortcode( 'instagram', 'lattedev_instagram' );
function lattedev_instagram( $atts ) {

  $access_token = 'YOUR ACCESS TOKEN';
  $tag = 'wordcamprussia2015';
  $return = rudr_instagram_api_curl_connect('https://api.instagram.com/v1/tags/' . $tag . '/media/recent?access_token=' . $access_token);

  //var_dump( $return ); // if you want to display everything the function returns

  foreach ( $return->data as $post ) {
  	$buffer .= '<a href="' . $post->images->standard_resolution->url . '"><img src="' . $post->images->thumbnail->url . '" /></a>';
  	/*
  	$post->images->standard_resolution->url - URL of 612x612 image
  	$post->images->low_resolution->url - URL of 150x150 image
  	$post->images->thumbnail->url - URL of 306x306 image

  	$post->type - "image" or "video"
  	$post->videos->low_resolution->url - URL of 480x480 video
  	$post->videos->standard_resolution->url - URL of 640x640 video

  	$post->link - URL of an Instagram post
  	$post->tags - array of assigned tags
  	$post->id - Instagram post ID
  	$post->filter - photo filter
  	$post->likes->count - the number of likes to this photo
  	$post->comments->count - the number of comments
  	$post->caption->text
  	$post->created_time

  	$post->user->username
  	$post->user->profile_picture
  	$post->user->id

  	$post->location->latitude
  	$post->location->longitude
  	$post->location->street_address
  	$post->location->name
  	*/

  }

  // $buffer .= '<section class="ayuda">'.$map.'</section>';

  return $buffer;
}









// https://rudrastyh.com/instagram/get-recent-photos-php.html

function rudr_instagram_api_curl_connect( $api_url ){
	$connection_c = curl_init(); // initializing
	curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
	curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // return the result, do not print
	curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
	$json_return = curl_exec( $connection_c ); // connect and get json data
	curl_close( $connection_c ); // close connection
	return json_decode( $json_return ); // decode and return
}






//Add our widget locations
function CBbCWidgetsInit() { register_sidebar( array ( 'name' => 'sidebar', 'id'   => 'sidebar1' )); }
add_action('widgets_init', 'CBbCWidgetsInit');
























 function register_menus() {
   register_nav_menu('home-menu',__( 'Home Menu' ));
   register_nav_menu('homeMobile-menu',__( 'Home Mobile Menu' ));
   register_nav_menu('magazine-menu',__( 'Magazine Menu' ));
   register_nav_menu('magazineMobile-menu',__( 'Magazine Mobile Menu' ));
 }
 add_action( 'init', 'register_menus' );









 // function gp_get_related_posts( $post_id, $related_count, $args = array() ) {
 // 	$args = wp_parse_args( (array) $args, array(
 // 		'orderby' => 'rand',
 // 		'return'  => 'query', // Valid values are: 'query' (WP_Query object), 'array' (the arguments array)
 // 	) );
 //
 // 	$related_args = array(
 // 		'post_type'      => get_post_type( $post_id ),
 // 		'posts_per_page' => $related_count,
 // 		'post_status'    => 'publish',
 // 		'post__not_in'   => array( $post_id ),
 // 		'orderby'        => $args['orderby'],
 // 		'tax_query'      => array()
 // 	);
 //
 // 	$post       = get_post( $post_id );
 // 	$taxonomies = get_object_taxonomies( $post, 'names' );
 //
 // 	foreach ( $taxonomies as $taxonomy ) {
 // 		$terms = get_the_terms( $post_id, $taxonomy );
 // 		if ( empty( $terms ) ) {
 // 			continue;
 // 		}
 // 		$term_list                   = wp_list_pluck( $terms, 'slug' );
 // 		$related_args['tax_query'][] = array(
 // 			'taxonomy' => $taxonomy,
 // 			'field'    => 'slug',
 // 			'terms'    => $term_list
 // 		);
 // 	}
 //
 // 	if ( count( $related_args['tax_query'] ) > 1 ) {
 // 		$related_args['tax_query']['relation'] = 'OR';
 // 	}
 //
 // 	if ( $args['return'] == 'query' ) {
 // 		return new WP_Query( $related_args );
 // 	} else {
 // 		return $related_args;
 // 	}
 // }
