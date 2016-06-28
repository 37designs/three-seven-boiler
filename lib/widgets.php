<?php 

function threeseven_widgets_init() { 
 if ( function_exists('register_sidebar')) {
 	
//	register_sidebar();

	register_sidebar(array(
		'id' => 'homepage-sidebar',
		'name' => 'Homepage Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
	
	register_sidebar(array(
		'id' => 'page-sidebar',
		'name' => 'Page Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
	
	register_sidebar(array(
		'id' => 'blog-sidebar',
		'name' => 'Blog Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
}

} 

add_action('widgets_init','threeseven_widgets_init');

?>