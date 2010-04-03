<?php

if(function_exists('register_sidebar'))
{
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div id="%2$s" class="widget">', 
		'after_widget' => '</div>', 
		'before_title' => "\n<h4><span>", 
		'after_title' => "</span></h4>\n", 
	));
	register_sidebar(array(
		'name' => 'Bottom Left',
		'before_widget' => '<div id="%2$s" class="widget">', 
		'after_widget' => '</div>', 
		'before_title' => "\n<h4><span>", 
		'after_title' => "</span></h4>\n", 
	));
	register_sidebar(array(
		'name' => 'Bottom Center',
		'before_widget' => '<div id="%2$s" class="widget">', 
		'after_widget' => '</div>', 
		'before_title' => "\n<h4><span>", 
		'after_title' => "</span></h4>\n", 
	));
	register_sidebar(array(
		'name' => 'Bottom Right',
		'before_widget' => '<div id="%2$s" class="widget">', 
		'after_widget' => '</div>', 
		'before_title' => "\n<h4><span>", 
		'after_title' => "</span></h4>\n", 
	));
}

?>
