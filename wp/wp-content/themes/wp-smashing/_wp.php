<?php get_header(); ?>

	<div id="content">
		<div class="post">
		<h1>WP SMASHING settings plugin not installed</h1>
			<div class="entry">
				<p><strong>Oops!</strong> You still need to activate the <a target="_blank" href="<?=get_option('siteurl')?>/wp-admin/plugins.php">wp-smashing settings plugin!</a>.</p>
				<p>This WordPress theme requires the wp-smashing plugin to operate. As long as you downloaded this theme from <a href="http://bustatheme.com">Bust A Theme</a> and followed the installation instructions you just need to go to your <a target="_blank" href="<?=get_option('siteurl')?>/wp-admin/plugins.php">Plugin Administration</a> page and enable the plugin labeled "wp-smashing settings".</p>
				<p>If you are reading this message and have already enabled the wp-smashing settings plugin, the sky has fallen.</p>
			</div>
		</div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
