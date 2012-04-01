<div id="welcome">


<?php
$mysitename = get_bloginfo('name');
 if (get_option('greeting') || get_option('welcomemessage')) {
  if (get_option('greeting')) {
    echo "<h2>" . get_option('greeting') . "</h2>";
    }
  if (get_option('welcomemessage')) {
    echo "<p>" . get_option('welcomemessage') . "</p>";
    }
  } else {
  echo "<h2>Benvenuto su $mysitename!</h2><p>Benvenuto, se leggi questo messaggio significa che hai appena installato il tema UltraPixel.<br> -Puoi modificare questo messaggio di benvenuto e/o aggiungere contenuti nella footbar direttamente dal <a href='./wp-admin/themes.php?page=functions'>pannello di controllo</a>.<br>-Ricordati di visitare il sito:<br><a target=_blank href=http://ultrapixel.altervista.org/>http://ultrapixel.altervista.org/</a><br> per le faq e gli aggiornamenti del tema UltraPixel.</p>";
}
 
?>

</div><!-- Closes welcome -->