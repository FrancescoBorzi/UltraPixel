<?php get_header(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/smoothscroll.js" type="text/javascript"></script>
<a name="main"><div id="main">

<div id="contentwrapper">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <p class="topMeta">by <?php the_author_posts_link(); ?> on <?php the_time('M.d, Y') ?>, under <?php the_category(', '); ?></p>
  <div class="topContent"><?php the_content('(continue reading...)'); ?></div>
  <span class="topComments"><?php comments_popup_link('Lascia un commento', '1 Commento', '% Commenti'); ?></span>
  <span class="topTags"><?php the_tags('<em>:</em>', ', ', ''); ?></span>
  <span class="topMore"><a href="<?php the_permalink() ?>">more...</a></span>
<div class="cleared"></div>
</div> <!-- Closes topPost --><br/>

<?php endwhile; ?>

<?php else : ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>">Oggetto non trovato</a></h2>
  <div class="topContent"><p>Puoi rieffettuare la ricerca usando <a href="#searchform">questo form</a>...</p></div>
</div> <!-- Closes topPost -->

<?php endif; ?>

<div id="nextprevious">
<div class="alignleft"><?php next_posts_link('&laquo; Vecchi articoli') ?></div>
<div class="alignright"><?php previous_posts_link('Nuovi articoli &raquo;') ?></div>
<div class="cleared"></div>
</div>
</div> <!-- Closes contentwrapper-->



<?php get_sidebar(); ?>
<div class="cleared"></div>

</div><!-- Closes Main --></a>


<?php get_footer(); ?>