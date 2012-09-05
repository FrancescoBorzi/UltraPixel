<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
	'name'=>'sidebar',
        'before_widget' => '<li id="%1$s" class="sidebaritem %2$s"><div class="sidebarbox">',
        'after_widget' => '</div></li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

add_action('admin_menu', 'add_welcome_interface');

function add_welcome_interface() {
  add_theme_page('welcome', 'Theme Options', '8', 'functions', 'editoptions');
  }

function editoptions() {
  ?>
  <div class='wrap'>
  <h2>Theme Options</h2>
  <form method="post" action="options.php">
  <?php wp_nonce_field('update-options') ?>
  <p><strong>Titolo del messaggio di benvenuto:</strong></p>
  <p><input type="text" name="greeting" value="<?php echo get_option('greeting'); ?>" /></p>
  <p><strong>Messaggio di benvenuto:</strong></p>
  <p><textarea name="welcomemessage" cols="100%" rows="10"><?php echo get_option('welcomemessage'); ?></textarea></p>
  <p><strong>Footbar:</strong></p>
  <p><textarea name="footbar" cols="100%" rows="10"><?php echo get_option('footbar'); ?></textarea></p>
  <p><strong>Per favore inserisci qui sotto il nome del tuo feed FeedBurner: </strong></p>
  <p><input type="text" name="feedname" value="<?php echo get_option('feedname'); ?>" /></p>
  <p><input type="submit" name="Submit" value="Aggiorna Opzioni" /></p>
  <input type="hidden" name="action" value="update" />
  <input type="hidden" name="page_options" value="feedname,greeting,welcomemessage,footbar" />
  </form>
  </div>
  <?php
  }


function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
			<a class="gravatar">
			<?php echo get_avatar($comment,$size='60'); ?>
			</a>

			<div class="commentbody">
			<cite><?php comment_author_link() ?></cite> 
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Il tuo commento è in attesa di approvazione.</em>
			<?php endif; ?>
			<br />
			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> on <?php comment_time() ?></a> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></small>

			<?php comment_text() ?>
			</div><div class="cleared"></div>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
<?php
        }



function mytheme_ping($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
			<div class="commentbody">
			<cite><?php comment_author_link() ?></cite> 
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Il tuo commento è in attesa di approvazione.</em>
			<?php endif; ?>
			<br />
			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> on <?php comment_time() ?></a> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></small>

			<?php comment_text() ?>
			</div>
     </div>
<?php
        }



?>
