<?php global $wp_quickmail; ?>

	</div>
</div>

<div id="footer1">
	<div class="wrapper">
		<ul>
			<li class="about">
				<p>The founder of popular WordPress theme site BustATheme.com, <a href="http://greg-j.com">Greg Johnson</a> is a UI Designer and Software Developer that focuses on developing web applications used by other web masters to monetize their online presense. While Greg enjoys his career in web development, his career passion is in game design. Greg and his partners &mdash; who together form <a href="http://forgestudios.com">Forge Studios</a> &mdash; are currently developing their first commercial title for release on the iPhone. If you would like to get in touch with Greg or just see what he's up to, you can do so by visiting his website Greg-J.com.</p>
			</li>
			<li class="contact">
			<form method="post" action="">
				<p class="name"><input name="quickmail_n" type="text" value="<?=$wp_quickmail['name']?>" /> <em>*Name</em></p>
				<p class="email"><input name="quickmail_e" type="text" value="<?=$wp_quickmail['email']?>" /> <em>*Email</em></p>
				<p class="message"><textarea name="quickmail_m" rows="5" cols="20"><?=$wp_quickmail['message']?></textarea> <em>*Message</em></p>
				<p class="submit"><button name="quickmail_s" type="submit"><span>Send</span></button></p>
			</form>
			</li>
		</ul>
	</div>
</div>

<div id="footer2">
	<div class="wrapper">
<?php if(function_exists('dynamic_sidebar')): ?>
			<div class="left">
<?php if(dynamic_sidebar('Bottom Left')) :else: ?><!-- widget_left --><? endif; ?>
			</div>
			<div class="center">
<?php if(dynamic_sidebar('Bottom Center')) :else: ?><!-- widget_center --><? endif; ?>
			</div>
			<div class="right">
<?php if(dynamic_sidebar('Bottom Right')) :else: ?><!-- widget_right --><? endif; ?>
			</div>
		</div>
<?php endif; ?>
</div>

<div id="footer3">
	<div class="wrapper">
		<ul>
			<li>Powered by <a href="http://wordpress.org/">WordPress</a>.</li>
			<li>Theme developed by <a href="http://greg-j.com">Greg Johnson</a> via BustATheme.com</li>
		</ul>
		<p>Copyright &copy; <?=date("Y", time())?> - Greg Johnson</p>
	</div>
</div>

<?php wp_footer(); ?> 

<script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www."); document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E")); </script>
<script type="text/javascript"> var pageTracker = _gat._getTracker("UA-346893-14"); pageTracker._trackPageview();</script>
</body>
</html>
