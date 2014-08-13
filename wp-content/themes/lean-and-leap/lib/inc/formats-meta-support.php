<?php
/* Subtitle Support */
if(!class_exists('WPAlchemy_MetaBox')){
    include_once WP_CONTENT_DIR.'/wpalchemy/MetaBox.php';
}
global $wpalchemy_media_access;
if(!class_exists('WPAlchemy_MediaAccess')){
    include_once (WP_CONTENT_DIR.'/wpalchemy/MediaAccess.php');
}
$wpalchemy_media_access = new WPAlchemy_MediaAccess();

add_action('init','formats_add_custom_metaboxes');
add_action('admin_footer','formats_footer_hook', 99);
add_action( 'admin_enqueue_scripts', 'formats_metabox_enqueue' );
add_action( 'genesis_entry_header', 'msdlab_do_post_formats' );


function formats_add_custom_metaboxes(){
    global $formats_metabox;
    $formats_metabox = new WPAlchemy_MetaBox(array
    (
        'id' => '_formats',
        'title' => 'Additional Meta',
        'types' => array('post','page'),
        'context' => 'side', // same as above, defaults to "normal"
        'priority' => 'high', // same as above, defaults to "high"
        'template' => get_stylesheet_directory() . '/lib/template/formats-meta.php',
        'autosave' => TRUE,
        'mode' => WPALCHEMY_MODE_EXTRACT, // defaults to WPALCHEMY_MODE_ARRAY
        'prefix' => '_msdlab_' // defaults to NULL
    ));
}

function formats_footer_hook()
{
    ?><script type="text/javascript">
        jQuery('#submitdiv').after(jQuery('#_formats_metabox'));
        jQuery('.datepicker').datepicker();
    </script><?php
}

// include css to help style our custom meta boxes
 
function formats_metabox_enqueue()
{
    if ( is_admin() )
    {
        wp_enqueue_style('wpalchemy-metabox', get_stylesheet_directory_uri() . '/lib/template/meta.css');
        wp_enqueue_style('bootstrap-datepicker', get_stylesheet_directory_uri() . '/lib/css/datepicker.css', array('bootstrap-style'));
        wp_enqueue_script('bootstrap-datepicker', get_stylesheet_directory_uri() . '/lib/js/bootstrap-datepicker.js', array('jquery','bootstrap-jquery'));
    }
}

function msdlab_do_post_formats() {
    global $formats_metabox;
    $formats_metabox->the_meta();
    $formats = $formats_metabox->get_the_value('formats');

    if ( strlen( $formats ) == 0 )
        return;

    $formats = sprintf( '<h2 class="entry-formats">%s</h2>', apply_filters( 'genesis_post_title_text', $formats ) );
    echo apply_filters( 'genesis_post_title_output', $formats ) . "\n";

}