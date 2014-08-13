<?php
function msdlab_post_meta(){
    global $formats_metabox,$post;
    $ret .= '<div class="bubble-wrapper col-sm-4">
        <div class="bubble">
        <h3 class="event-name">'.$post->post_title.'</h3>';
        $ret .= $formats_metabox->get_the_value('event_date')!=''?'<p class="event-date">'.date('F j, Y',strtotime($formats_metabox->get_the_value('event_date'))).'</p>':'<p class="post-date">'.get_the_date('F j, Y').'</p>';
        $ret .= $formats_metabox->get_the_value('event_location')!=''?'<p class="event-location">'.$formats_metabox->get_the_value('event_location').'</p>':'';
        $ret .= '</div>
        <div class="bubble-icon"></div>
    </div>';
    print $ret;
}
add_action('genesis_entry_header','msdlab_post_meta',1);
function msdlab_post_buttons(){
    global $formats_metabox,$wpalchemy_media_access,$post;
    while($formats_metabox->have_fields('buttons')):
        $ret .= '<a href="'.$formats_metabox->get_the_value('file').'" class="btn btn-default" target="_blank">'.$formats_metabox->get_the_value('title').'</a>';
    endwhile;
    if($ret!=''){$ret='<div class="buttons">'.$ret.'</div>';}
    print $ret;
}
add_action('genesis_entry_content','msdlab_post_buttons');
function msdlab_post_header( $attributes ){
    $attributes['class'] .= ' col-sm-7 col-sm-offset-1';
    return $attributes;
}
function msdlab_post_article( $attributes ){
    $attributes['class'] .= ' row';
    return $attributes;
}
add_filter( 'genesis_attr_entry', 'msdlab_post_article', 10);
add_filter( 'genesis_attr_entry-header', 'msdlab_post_header', 10);
add_filter( 'genesis_attr_entry-content', 'msdlab_post_header', 10);
add_filter( 'genesis_attr_entry-footer', 'msdlab_post_header', 10);
genesis();
