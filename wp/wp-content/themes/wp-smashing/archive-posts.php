<?php get_header(); ?>

	<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="head">
				<p><?php echo get_avatar( get_the_author_email(), $size = '36' )?></p>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</div>
			
			<div class="premetadata">Posted on <?php the_time(get_option('date_format')) ?>, <?php the_time(get_option('time_format')) ?>, by <?php the_author() ?>, under <?php the_category(', ') ?>.</div>

			<div class="entry">
<?php wp_the_excerpt_reloaded('excerpt_length=200&filter_type=excerpt&use_more_link=1&more_link_text=Read Entire Article ...&allowed_tags=<a><strong><img>'); ?>

<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
<?php endwhile; ?>
		<div class="post">
			<div class="navigation">
				<div class="prev"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="next"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>
		</div>
<?php else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
