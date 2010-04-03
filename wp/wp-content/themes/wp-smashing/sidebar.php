
<div id="sidebar">
	<div class="widgets">
		<div id="widget_advertisers" class="widget">
			<h4><span>Advertisers</span></h4>
			<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/SAMPLE_ADVERT.png" alt="SAMPLE ADVERTISEMENT" /></a>
			<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/SAMPLE_ADVERT.png" alt="SAMPLE ADVERTISEMENT" /></a>
			<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/SAMPLE_ADVERT.png" alt="SAMPLE ADVERTISEMENT" /></a>
			<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/SAMPLE_ADVERT.png" alt="SAMPLE ADVERTISEMENT" /></a>
		</div>
<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar')):else: ?>
		<!-- widget sidebar -->
<?php endif; ?>
	</div>
</div>
