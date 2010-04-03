<?php 
if($_POST['wp_smashing_post'] == 'Y')
{
	$wp_smashing_index_template = 		$_POST['wp_smashing_index_template'];
	$wp_smashing_archive_template =		$_POST['wp_smashing_archive_template'];
	$wp_quickmail_to =					$_POST['wp_quickmail_to'];
	
	update_option('wp_smashing_index_template', $wp_smashing_index_template);
	update_option('wp_smashing_archive_template', $wp_smashing_archive_template);
	update_option('wp_quickmail_to', $wp_quickmail_to);
	
	echo('<div class="updated"><p><strong>Options Saved.</strong></p></div>');

} else {
	
	$wp_smashing_index_template = get_option('wp_smashing_index_template');
	$wp_smashing_archive_template = get_option('wp_smashing_archive_template');
	
	if(get_option('wp_quickmail_to') != '')
	{
		$wp_quickmail_to = get_option('wp_quickmail_to');
	} else {
		$wp_quickmail_to = get_bloginfo("admin_email");
	}
}
?>

<div class="wrap">
	<h2>WP SMASHING Options</h2>
	<form name="wp_smashing_form" method="post" action="">
	<input type="hidden" name="wp_smashing_post" value="Y">
	<h3>Calendar Settings</h3>
	<table class="form-table">
		<tr valign="top">
			<th scope="row"><label>Index Template</label></th>
			<td>
				<select name="wp_smashing_index_template">
					<option <?=($wp_smashing_index_template == 'calendar' ? 'selected="selected"' : '')?> value="calendar">Show Calendar on Index</option>
					<option <?=($wp_smashing_index_template == 'posts' ? 'selected="selected"' : '')?> value="posts">Show Posts on Index</option>
				</select>
				<span class="setting-description">Choose whether you want to utilize the calendar functionality on the <strong>Index Page</strong>. <em>currently using index-<?=$wp_smashing_index_template?>.php</em></span>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label>Archive Template</label></th>
			<td>
				<select name="wp_smashing_archive_template">
					<option <?=($wp_smashing_archive_template == 'calendar' ? 'selected="selected"' : '')?> value="calendar">Show Calendar for Monthly Archive</option>
					<option <?=($wp_smashing_archive_template == 'posts' ? 'selected="selected"' : '')?> value="posts">Show Posts for Monthly Archive </option>
				</select>
				<span class="setting-description">Choose whether you want to utilize the calendar functionality on the <strong>Archive Page</strong>. <em>currently using archive-<?=$wp_smashing_archive_template?>.php</em></span>
			</td>
		</tr>
	</table>
	<h3>QuickMail Settings</h3>
	<table class="form-table">
		<tr valign="top">
			<th scope="row"><label>QuickMail email address</label></th>
			<td><input name="wp_quickmail_to" type="text" value="<?=($wp_quickmail_to != '' ? $wp_quickmail_to : bloginfo("admin_email"))?>" class="regular-text" />
			<span class="setting-description">If this is blank, email will be sent to <strong><?php bloginfo("admin_email"); ?></strong></span></td>
		</tr>
	</table>
<?php /* Maybe Next Release ...
	<h3>Excerpt (reloaded) Settings</h3>
	<p>WP SMASHING uses a <a href="http://robsnotebook.com/the-excerpt-reloaded">modified version</a> of 
		<a href="http://www.catswhocode.com/blog/make-full-use-of-wordpress-with-the_excerpt_reloaded">the_excerpt_reloaded()</a> to display excerpts rather 
		than the built-in WordPress function the_excerpt(). It offers much more control over how your excerpts are displayed.</p>
	<table class="form-table">
		<tr valign="top">
			<th scope="row"><label>Excerpt Length (in characters)</label></th>
			<td><input name="ter_length" type="text" value="" class="small-text" />
			<span class="setting-description">length of excerpt in words. -1 to display all excerpt/content. Default: 120</span></td>
		</tr>
		<tr valign="top">
			<th scope="row"><label>Allowed Tags</label></th>
			<td><input name="ter_allowed_tags" type="text" value="" class="regular-text" />
			<span class="setting-description">HTML tags allowed in excerpt, 'all' to allow all tags. Default: &lt;a&gt;</span></td>
		</tr>
		<tr valign="top">
			<th scope="row"><label>Format Filter</label></th>
			<td>
				<select name="ter_filter_type">
					<option value="none">None</option>
					<option value="excerpt">Excerpt</option>
					<option value="excerpt_rss">Excerpt (RSS)</option>
					<option value="content">Content</option>
					<option value="content_rss">Content (RSS)</option>
				</select>
			<span class="setting-description">format filter used => 'content', 'excerpt', 'content_rss', 'excerpt_rss', 'none'. Default: none</span></td>
		</tr>
		<tr valign="top">
			<th scope="row"><label>User "more" Link?</label></th>
			<td>
				<select name="ter_use_link">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			<span class="setting-description">Do you want to use the "more" link to link to the original content? Default: yes</span></td>
		</tr>
		<tr valign="top">
			<th scope="row"><label>"more" Link Text</label></th>
			<td><input name="ter_link_text" type="text" value="" class="regular-text" />
			<span class="setting-description">Text to use for the "more" link. Default: (more...)</span></td>
		</tr>
		<tr valign="top">
			<th scope="row"><label>Show Dots?</label></th>
			<td>
				<select name="ter_show_dots">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			<span class="setting-description">Do you want to show the "..." dots after content that has been cut off? Default: yes</span></td>
		</tr>
	</table>
*/ ?>
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Save Options" />
	</p>
	</form>
</div>

Copyright &copy; 2009 &ndash; Greg Johnson