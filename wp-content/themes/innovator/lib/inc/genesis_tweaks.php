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

/**
 * Replace footer
 */
//remove_action('genesis_footer','genesis_do_footer');
//add_action('genesis_footer','enpro_do_footer');
function enpro_do_footer(){
	global $msd_social;
	if(has_nav_menu('footer_library_link')){$copyright .= wp_nav_menu( array( 'theme_location' => 'footer_library_link','container_class' => 'ftr-menu','echo' => FALSE ) ).'<br />';}
	if($msd_social){
		$copyright .= '&copy;Copyright '.date('Y').' '.$msd_social->get_bizname().' &middot; All Rights Reserved';
	} else {
		$copyright .= '&copy;Copyright '.date('Y').' '.get_bloginfo('name').' &middot; All Rights Reserved ';
	}
	if(has_nav_menu('footer_menu')){$copyright .= wp_nav_menu( array( 'theme_location' => 'footer_menu','container_class' => 'ftr-menu ftr-links','echo' => FALSE ) );}
	print '<div id="copyright" class="copyright gototop">'.$copyright.'</div><div id="social" class="social creds">';
	if($msd_social){do_shortcode('[msd-social]');}
	print '</div>';
}