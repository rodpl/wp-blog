<?php

/* 
 ********** THERE IS NO REASON YOU NEED TO EDIT THIS FILE! ***********
 *                                                                   *
 * To edit the CALENDAR theme for the Index: Edit index-calendar.php *
 * To edit the POSTS theme for the Index: Edit index-posts.php       *
 *                                                                   *
 ********** THERE IS NO REASON YOU NEED TO EDIT THIS FILE! ***********
 */

if(!function_exists('wp_calendar')) // If the wp_calendar function doesn't exist, the plugin has not been activated
{
	die(include('_wp.php')); // If the plugin has not been activated, show the notice when the index is loaded.
}

if(get_option('wp_smashing_index_template')) // As long as the plugin has been activated, this setting should exist
{
	$wp_template_index = get_option('wp_smashing_index_template'); // Find out which template to display

	include("index-".$wp_template_index.".php"); // Display proper template

} else { // Just in case it doesn't, default to displaying the calendar.

	include("index-calendar.php");
}
?>
