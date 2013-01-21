<?php
add_shortcode('button','innovator_button_function');
function innovator_button_function($atts, $content = null){	
	extract( shortcode_atts( array(
      'url' => null,
	  'target' => '_self'
      ), $atts ) );
	$ret = '<div class="button-wrapper">
<a class="greenbutton" href="'.$url.'" target="'.$target.'">'.remove_wpautop($content).'</a>
</div>';
	return $ret;
}
add_shortcode('hero','innovator_landing_page_hero');
function innovator_landing_page_hero($atts, $content = null){
	$ret = '<div class="hero">'.remove_wpautop($content).'</div>';
	return $ret;
}
add_shortcode('callout','innovator_landing_page_callout');
function innovator_landing_page_callout($atts, $content = null){
	$ret = '<div class="callout">'.remove_wpautop($content).'</div>';
	return $ret;
}
function column_shortcode($atts, $content = null){
	extract( shortcode_atts( array(
	'cols' => '3',
	'position' => '',
	), $atts ) );
	switch($cols){
		case 5:
			$classes[] = 'one-fifth';
			break;
		case 4:
			$classes[] = 'one-fouth';
			break;
		case 3:
			$classes[] = 'one-third';
			break;
		case 2:
			$classes[] = 'one-half';
			break;
	}
	switch($position){
		case 'first':
		case '1':
			$classes[] = 'first';
		case 'last':
			$classes[] = 'last';
	}
	return '<div class="'.implode(' ',$classes).'">'.$content.'</div>';
}

add_shortcode('columns','column_shortcode');


function add_widget_area($atts){
	$widget_area_id = $atts[0];
	extract( shortcode_atts( array(
	'title' => ''
	), $atts ) );
	$ret = '<div id="'.$widget_area_id.'" class="widget-area clear"><div class="wrap">';
	if($title!=''){
		$ret .= '<div class="title one-fifth"><h4>'.$title.'</h4></div>
				<div class="widgets four-fifths">';
	}
	ob_start();
	dynamic_sidebar($widget_area_id);
	$ret .= ob_get_contents();
	ob_end_clean();
	$ret .= '</div></div>';
	if($title!=''){
		$ret .= '</div>';
	}
	return $ret;
}
add_shortcode('widgets','add_widget_area');