<?php
add_filter( 'genesis_attr_entry', 'msdlab_post_article', 10);
add_filter( 'genesis_attr_entry-header', 'msdlab_post_header', 10);
add_filter( 'genesis_attr_entry-content', 'msdlab_post_header', 10);
add_filter( 'genesis_attr_entry-footer', 'msdlab_post_header', 10);
genesis();
