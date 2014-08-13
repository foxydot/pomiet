<?php

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
