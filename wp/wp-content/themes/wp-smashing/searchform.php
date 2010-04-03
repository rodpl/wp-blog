
<form method="get" id="whoooosearchform" action="<?php bloginfo('url'); ?>/">
	<h4><span><?php _e('Search for:'); ?></span></h4>
	<div class="form">
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="Search" />
	</div>
</form>
