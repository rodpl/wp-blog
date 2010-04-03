<?php
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
		?>

		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

		<?php
		return;
	}
}

if ($comment_author == '') $comment_author = 'Name';
if ($comment_author_email == '') $comment_author_email = 'Email';
if ($comment_author_url == '') $comment_author_url = 'Website';

?>

<?php if ($comments) : ?>

			<div id="comments">	

<?php foreach ($comments as $comment) : ?>
				<div class="comment" id="comment-<?php comment_ID() ?>">
<?php if($post->post_author == $comment->user_id) echo '<div class="special">'; ?>
					<div class="author"><?php echo get_avatar( $comment->comment_author_email, $size = '36' )?> <span>by</span> <?php comment_author_link() ?> <small><a href="#comment-<?php comment_ID() ?>" title="">posted <?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('(edit)','&nbsp;&nbsp;&nbsp;',''); ?></small></div>
					<div class="response"><?php if ($comment->comment_approved == '0') : ?><em>Your comment is awaiting moderation.</em><br /><?php endif; ?><?php comment_text() ?></div>
<?php if($post->post_author == $comment->user_id) echo '</div>'; ?>
				</div>	

<?php endforeach; /* end for each comment */ ?>

			</div>

<?php else : // this is displayed if there are no comments so far ?>
<?php if ('open' == $post->comment_status) : ?>
<?php else : // comments are closed ?>
<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<a id="respond"></a>
			<div id="reply">

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
				<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

					<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

<?php else : ?>

					<p>
						<input class="textbox" type="text" name="author" value="<?php echo $comment_author; ?>" tabindex="1" onclick="this.select()" />
						<strong>*required</strong>
					 </p>
					
					<p>
						<input class="textbox" type="text" name="email" value="<?php echo $comment_author_email; ?>" tabindex="2" onclick="this.select()" />
						<strong>*required</strong> <small>(will not be published)</small>
					</p>
					
					<p>
						<input class="textbox" type="text" name="url" value="<?php echo $comment_author_url; ?>" tabindex="3" onclick="this.select()" />
					</p>
				
<?php endif; ?>
					
					<p class="allowed_html">
						<strong>Allowed html:</strong>
						<small>&lt;a href=&quot;&quot;&gt;, &lt;b&gt;, &lt;strong&gt;, &lt;em&gt;, &lt;i&gt;, &lt;strike&gt;, &lt;code&gt; and &lt;blockquote&gt;</small>
					</p>
					
					<p>
						<textarea name="comment" cols="10" rows="5" tabindex="4">Type your comment here ...</textarea>
					</p>
					
					<p>
						<input class="submit" name="submit" type="submit" tabindex="5" value="Submit Comment" />
						<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
					</p>

<?php do_action('comment_form', $post->ID); ?>

				</form>

<?php endif; // If registration required and not logged in ?>
		
		</div>

<?php endif; // if you delete this the sky will fall on your head ?>
