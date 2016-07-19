<?php

function twentyfifteen_child_functions(){
	wp_enqueue_script ( 'hdtestjs_script',get_stylesheet_directory_uri() . '/js/testhd.js' );
}
add_action('wp_enqueue_scripts', 'twentyfifteen_child_functions' );

function twentyfifteen_child_new_widgets(){
	register_sidebar( array(
		'name'=>'customized new widget area',
		'id'=>'twentyfifteen_new_widget_area',
		'before_widget'=>'<aside>',
		'after_widget'=>'</aside>',
		'before_title'=>'<h3 class="widget-title">',
		'after_title'=>'</h3>',
	));
}
add_action('widgets_init','twentyfifteen_child_new_widgets');
