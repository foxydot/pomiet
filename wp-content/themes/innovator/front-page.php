<?php
remove_all_actions( 'genesis_do_sidebar' );
remove_all_actions( 'genesis_do_sidebar_alt' );
add_filter('the_content','remove_wpautop');

genesis();