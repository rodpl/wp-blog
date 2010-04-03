<?php

/* 
 ************ THERE IS NO REASON YOU NEED TO EDIT THIS FILE! *************
 *                                                                       *
 * To edit the CALENDAR theme for the Archive: Edit archive-calendar.php *
 * To edit the POSTS theme for the Archive: Edit archive-posts.php       *
 *                                                                       *
 ************ THERE IS NO REASON YOU NEED TO EDIT THIS FILE! *************
 */

if(is_month()) // If the user is requesting a monthly archive...
{
	if(get_option('wp_smashing_archive_template')) // As long as the plugin has been activated, this setting should exist
	{
		$wp_template_index = get_option('wp_smashing_archive_template'); // Find out which template to display

		include("archive-".$wp_template_index.".php"); // Display proper template

	} else { // Just in case it doesn't, default to displaying the calendar.

		include("archive-calendar.php");
	}
}

if(is_category() || is_tag() || is_day())			// If the user is requesting an archive by category or tag...
{
	include("archive-posts.php"); 	// ... show them the list of articles.
}

?>
