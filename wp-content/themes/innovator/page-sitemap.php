<?php
/**
 * Handles display of sitemap page.
 *
 */

/** Remove default loop **/
remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_loop', 'genesis_404' );
/**
 * This function outputs a 404 "Not Found" error message
 *
 * @since 1.6
 */
function genesis_404() { 
global $post,$msd_cpt_framework; ?>
	<div class="post hentry">

		<h1 class="entry-title"><?php print $post->post_title; ?></h1>
		<div class="entry-content">

				<h4><?php _e( 'Doctors:', 'genesis' ); ?></h4>
				<ul class="cols-2">
					<?php 
					$args = array( 'post_type' => 'msd_doctor', 'numberposts' => -1, );
					$items = get_posts($args);
					usort($items, $msd_cpt_framework->doctor->sort_by_lastname);
					foreach($items AS $item){
						print '<li><a href="'.get_permalink($item->ID).'">'.$item->post_title.'</a></li>';
					}
					?>
				</ul>
				<h4><?php _e( 'Pages:', 'genesis' ); ?></h4>
				<ul class="cols-2">
					<?php wp_list_pages( 'title_li=' ); ?>
				</ul>
		</div><!-- end .entry-content -->

	</div><!-- end .postclass -->

<?php
}

genesis();
