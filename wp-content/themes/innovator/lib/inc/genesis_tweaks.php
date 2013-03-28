<?php
add_action('after_setup_theme','innovator_add_homepage_sidebars');
function innovator_add_homepage_sidebars(){
	genesis_register_sidebar(array(
	'name' => 'Homepage Widget Area One',
	'description' => 'Homepage central widget areas',
	'id' => 'homepage-one'
			));
	genesis_register_sidebar(array(
    'name' => 'Homepage Widget Area Two',
    'description' => 'Homepage central widget areas',
    'id' => 'homepage-two'
    		));
	genesis_register_sidebar(array(
    'name' => 'Homepage Widget Area Three',
    'description' => 'Homepage central widget areas',
    'id' => 'homepage-three'
    		));
	genesis_register_sidebar(array(
    'name' => 'Homepage Widget Area Four',
    'description' => 'Homepage central widget areas',
    'id' => 'homepage-four'
    		));
	genesis_register_sidebar(array(
    'name' => 'Homepage Widget Area Five',
    'description' => 'Homepage central widget areas',
    'id' => 'homepage-five'
    		));
    
}

/** Customize search form input box text */
add_filter( 'genesis_search_text', 'custom_search_text' );
function custom_search_text($text) {
	return esc_attr( 'Begin your search here...' );
}

add_filter('genesis_breadcrumb_args', 'custom_breadcrumb_args');
function custom_breadcrumb_args($args) {
	$args['labels']['prefix'] = ''; //marks the spot
	return $args;
}
remove_action( 'genesis_before_post_content', 'genesis_post_info' );
remove_action( 'genesis_after_post_content', 'genesis_post_meta' );

add_filter('get_the_excerpt','innovator_excerpt');
function innovator_excerpt( $excerpt ){
	global $post;
	$excerpt .= '<p><a href="'.get_permalink($post->ID).'" class="readmore yellowdot">Read More</a></p>';
	return $excerpt;
}