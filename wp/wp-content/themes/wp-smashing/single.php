<?php get_header(); ?>

	<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="head">
				<p><?php echo get_avatar( get_the_author_email(), $size = '36' )?></p>
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="premetadata">Posted on <?php the_time(get_option('date_format')) ?>, <?php the_time(get_option('time_format')) ?>, by <a href="<?php the_author_url() ?>"><?php the_author_firstname() ?> <?php the_author_lastname() ?></a>, under <?php the_category(', ') ?>.</div>

			<div class="entry">
<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>

			<div class="postmetadata">
				<p>
					This entry was posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>.
					You can follow any responses to this entry through the <a href="<?php bloginfo('rss2_url'); ?>"  title="<?php bloginfo('name'); ?> RSS Feed">RSS Feed</a>.
<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
						// Both Comments and Pings are open ?>
						You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.
<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
						// Only Pings are Open ?>
						Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.
<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
						// Comments are open, Pings are not ?>
						You can skip to the end and leave a response. Pinging is currently not allowed.
<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
						// Neither Comments, nor Pings are open ?>
						Both comments and pings are currently closed.
<?php } edit_post_link('Edit this entry.','',''); ?>
				</p>
			</div>

			<div class="navigation">
				<div class="prev"><?php previous_post_link('&laquo; %link') ?></div>
				<div class="next"><?php next_post_link('%link &raquo;') ?></div>
			</div>
		</div>

<?php comments_template(); ?>

<?php endwhile; ?>
<?php else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
