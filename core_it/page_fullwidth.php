<?php
/*
Template Name: Page Full Width
*/
?>

<?php get_header(); ?>

<div id="main">

<div id="contentwrapper2">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <div class="topContent"><?php the_content('(continua a leggere...)'); ?></div>
<div class="cleared"></div>
</div> <!-- Closes topPost -->


<?php endwhile; ?>

<?php else : ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>">Oggetto non trovato</a></h2>
  <div class="topContent"><p>Puoi rieffettuare la ricerca usando <a href="#searchform">questo form</a>...</p></div>
</div><!-- Closes topPost -->

<?php endif; ?>

</div> <!-- Closes contentwrapper2-->


<div class="cleared"></div>

</div><!-- Closes Main -->


<?php get_footer(); ?>
