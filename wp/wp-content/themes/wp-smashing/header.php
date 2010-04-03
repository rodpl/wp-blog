<?php global $jgrowl; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jScrollPane.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jgrowl.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/widgets.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/jScrollPane.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/jgrowl.css" />
<script type="text/javascript">
$(document).ready(function(){
	$('.day').jScrollPane({scrollbarWidth:5, scrollbarMargin:0});
	$("a#toggle_search").toggle(function()
	{
		$("div#search_panel").slideToggle("normal");
	},function()
	{
		$("div#search_panel").slideToggle("normal");
	});
	<?php echo $jgrowl; ?>
});
</script>
</head>
<body>

<div id="header">
	<p><a href="<?=get_settings('home')?>"><strong><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></strong></a></p>
</div>

<div id="search_panel">
<form method="get" id="whoooosearchform" action="<?php bloginfo('url'); ?>/" >
	<p class="search_form"><input type="text" class="textbox" value="<?php the_search_query(); ?>" name="s" /> <button type="submit" value="Search"><span>Search</span></button> </p>
</form>
</div>

<div id="navigation">
	<ul>
		<li><a href="<?php echo get_settings('home'); ?>"><?php _e('Home') ?></a></li>
		<?php wp_list_pages('title_li=&depth=1') ?>
		<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>"  title="<?php bloginfo('name'); ?> RSS Feed"><span><?php _e("Subscribe") ?></span></a></li>
		<li class="search"><a id="toggle_search" href=""><span>Search</span></a></li>
	</ul>
</div>

<div id="quote">
	<p>&quot;Design is a plan for arranging elements in such a way as best to accomplish a particular purpose&quot; &mdash; Charles Eames</p>
</div>

<div id="frame">
	<div id="page">
