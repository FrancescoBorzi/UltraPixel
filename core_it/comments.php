<?php // Do not delete these lines
// thanks to Jeremy at http://clarktech.no-ip.com for the tips
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Perfavore, non caricare direttamente questa pagina. Grazie!');
if (function_exists('post_password_required')) 
	{
	if ( post_password_required() ) 
		{
		echo '<p class="nocomments">Questo post &egrave; protetto da una password. Inserisci la password per visualizzare i commenti.</p>';
		return;
		}
	} else 
	{
	if (!empty($post->post_password)) 
		{ // if there's a password
			if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) 
			{  // and it doesn't match the cookie  ?>
				<p class="nocomments">Questo post &egrave; protetto da una password. Inserisci una password per visualizzare i commenti.</p>
				<?php return;
			}
		}
	}
if (function_exists('wp_list_comments')):
//WP 2.7 Comment Loop
if ( have_comments() ) : ?>

	<?php if ( ! empty($comments_by_type['comment']) ) :
	$count = count($comments_by_type['comment']);
	($count !== 1) ? $txt = "Commenti per questo articolo" : $txt = "Commento per questo articolo"; ?>
	<h3 id="commentstitle"><?php echo $count . " " . $txt; ?></h3>
	<ul class="commentlist">
		<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
	</ul>
	<?php endif; ?>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
		<div class="cleared"></div>
	</div>

	<?php if ( ! empty($comments_by_type['pings']) ) :
	$countp = count($comments_by_type['pings']);
	($countp !== 1) ? $txtp = "Trackbacks / Pingbacks for this entry" : $txtp = "Trackback or Pingback for this entry"; ?>
	<h3><?php echo $countp . " " . $txtp; ?></h3>
	<ul class="trackback">
		  <?php wp_list_comments('type=pings&callback=mytheme_ping'); ?>
	</ul>
	<?php endif; ?>


<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) :
		// If comments are open, but there are no comments.
	else : ?><p class="nocomments">Commenti disabilitati.</p>
	<?php endif;
endif;
else:
//WP 2.6 and older Comment Loop
/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>
 
<!-- You can start editing here. -->
<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number('Non ci sono commenti', '1 commento', '% commenti' );?> to &#8220;<?php the_title(); ?>&#8221;</h3> 
	<ol class="commentlist">
	<?php foreach ( $comments as $comment ) : ?>
		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">

<a class="gravatar">
<?php 
$mygravatarurl = get_bloginfo('template_directory')."/images/gravatar-trans.png";

if (function_exists('get_avatar')) {
      echo get_avatar( $comment, 60, $mygravatarurl);
   } else {
      //alternate gravatar code for < 2.5
      $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=
         " . md5($email) . "&default=" . urlencode($default) . "&size=" . $size;
      echo "<img src='$grav_url' height='60px' width='60px' />";
   }
?>
</a>

			<div class="commentbody">
			<cite><?php comment_author_link() ?></cite> 
			<?php if ($comment->comment_approved == '0') : ?>
			<em>I tuoi commenti sono in attesa di approvazione</em>
			<?php endif; ?>
			<br />
			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> alle <?php comment_time() ?></a> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></small>

			<?php comment_text() ?>
			</div><div class="cleared"></div><!-- clears the floats so the backgrounds show all the way down -->
		</li>
 
	<?php /* Changes every other comment to a different class */	
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>
	<?php endforeach; /* end for each comment */ ?>
	</ol>
 <?php else : // this is displayed if there are no comments so far ?>
 
  <?php if ('open' == $post->comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
	<p class="nocomments">Commenti disabilitati.</p>






 
<?php endif; ?>
 
<?php endif; ?>
 
<?php endif; // 2.6 and older Comment Loop end ?>
 
<?php if ('open' == $post->comment_status) : ?>
<div class="cleared"></div>
<div id="respond">
<h3>Lascia un commento</h3>
<?php if (function_exists('cancel_comment_reply_link')) { 
//2.7 comment loop code ?>
<div id="cancel-comment-reply">
	<small><?php cancel_comment_reply_link();?></small>
</div>
<?php } ?>
 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Devi essere <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">loggato</a> per lasciare un commento.</p></div>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>
	<?php
		if (function_exists('wp_logout_url')) {
			$logout_link = wp_logout_url();
		} else {
			$logout_link = get_option('siteurl') . '/wp-login.php?action=logout';
		}
	?>
<p>User: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.
<a href="<?php echo $logout_link; ?>" title="Log out"><?php _e('Logout &raquo;'); ?></a></p>
<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>
<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>
<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>
<?php endif; ?>

<?php if (function_exists('cancel_comment_reply_link')) { 
//2.7 comment loop code ?>
 <?php comment_id_fields(); ?>
<?php } ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->
<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
<p><input name="submit" type="submit" id="submit" class="submitbutton" tabindex="5" value="Pubblica commento" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>

<?php do_action('comment_form', $post->ID); ?>
 
</form>
</div>
<?php endif; // If registration required and not logged in ?>
 
<?php endif; // if you delete this the sky will fall on your head ?>
