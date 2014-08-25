<?php
/* Subtitle Support */
if(!class_exists('WPAlchemy_MetaBox')){
	include_once WP_CONTENT_DIR.'/wpalchemy/MetaBox.php';
}
add_action('init','subtitle_add_custom_metaboxes');
add_action('admin_footer','subtitle_footer_hook');
add_action( 'admin_print_scripts', 'subtitle_metabox_styles' );
add_action( 'genesis_after_header', 'msdlab_do_post_subtitle' );


function subtitle_add_custom_metaboxes(){
	global $subtitle_metabox;
    $subtitle_metabox = new WPAlchemy_MetaBox(array
    (
        'id' => '_subtitle',
        'title' => 'Header',
        'types' => array('page'),
        'context' => 'normal', // same as above, defaults to "normal"
        'priority' => 'high', // same as above, defaults to "high"
        'template' => get_stylesheet_directory() . '/lib/template/subtitle-meta.php',
        'autosave' => TRUE,
        'mode' => WPALCHEMY_MODE_EXTRACT, // defaults to WPALCHEMY_MODE_ARRAY
        'prefix' => '_msdlab_' // defaults to NULL
    ));
}

function subtitle_footer_hook()
{
	?><script type="text/javascript">
		jQuery('#titlediv').after(jQuery('#_subtitle_metabox'));
	</script><?php
}

// include css to help style our custom meta boxes
 
function subtitle_metabox_styles()
{
    if ( is_admin() )
    {
        wp_enqueue_style('wpalchemy-metabox', get_stylesheet_directory_uri() . '/lib/template/meta.css');
    }
}

function msdlab_do_post_subtitle() {
	global $wp_query, $subtitle_metabox;

    if ( ! is_page() )
        return;

    if ( get_query_var( 'paged' ) >= 2 )
        return;
    $subtitle_metabox->the_meta();
    if ( $subtitle_metabox->get_the_value('subtitle') )
        $headline = sprintf( '<div class="col-sm-5 intro-headline"><h1 class="entry-subtitle">%s</h1></div>', strip_tags( $subtitle_metabox->get_the_value('subtitle') ) );
    if ( $subtitle_metabox->get_the_value('header_text') )
        $intro_text = '<div class="col-sm-7 intro-text">'.apply_filters( 'the_content',$subtitle_metabox->get_the_value('header_text') ).'</div>';

    if ( $headline || $intro_text ){
        printf( '<div class="page-description"><div class="wrap row">%s</div></div>', $headline . $intro_text );
        remove_action('genesis_entry_header','genesis_do_post_title');
    }
}