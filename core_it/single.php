<?php get_header(); ?>

<div id="main">

<div id="contentwrapper">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <p class="topMeta">by <?php the_author_posts_link(); ?> on <?php the_time('M.d, Y') ?>, under <?php the_category(', '); ?></p>
  <div class="topContent"><?php the_content('(Continua a leggere...)'); ?></div>
  <div class="cleared"></div>
  <span class="linkpages"><?php wp_link_pages(); ?></span><div class="cleared"></div>
  <?php if ( function_exists('the_tags') ) : ?><span class="topTags"><?php the_tags('<em>:</em>', ', ', ''); ?></span><?php endif; ?>
<div class="cleared"></div>
</div> <!-- Closes topPost -->
<br/><small><?php edit_post_link('Modificare questo articolo?','',''); ?></small>

<div id="comments">
<?php if (function_exists('wp_list_comments')): ?>
<!-- WP 2.7 and above -->
<?php comments_template('', true); ?>

<?php else : ?>
<!-- WP 2.6 and below -->
<?php comments_template(); ?>
<?php endif; ?>
</div> <!-- Closes Comment -->

<div id="extrastuff">
<span id="rssleft"><?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for this post (comments)')); ?></span>

<span id="trackright"><?php if ( pings_open() ) : ?> &#183; <a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Uniform Resource Identifier">URI</abbr>'); ?></a><?php endif; ?></span>
<div class="cleared"></div>
</div>

<?php endwhile; ?>

<?php else : ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>">Oggetto non trovato</a></h2>
  <div class="topContent"><p>Puoi rieffettuare la ricerca usando <a href="#searchform">questo form</a>...</p></div>
</div> <!-- Closes topPost -->

<?php endif; ?>

</div> <!-- Closes contentwrapper-->


<?php get_sidebar(); ?>
<div class="cleared"></div>

</div><!-- Closes Main -->


<?php get_footer(); ?>
