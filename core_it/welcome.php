<?php if (get_option('greeting') != "disable") : ?>
<div id="welcome">


<?php
$mysitename = get_bloginfo('name');
if (get_option('greeting') || get_option('welcomemessage'))
{
	if (get_option('greeting'))
	{
    		echo "<h2><center>" . get_option('greeting') . "</center></h2>";
    	}
  	if (get_option('welcomemessage'))
  	{
    		echo "<p>" . get_option('welcomemessage') . "</p>";
    	}
}
else
{
 	echo "<center><h2>Benvenuto su $mysitename!</h2></center>
<p>Questo è il riquadro di benvenuto del tema <b>UltraPixel</b>, se leggi questo testo significa che hai appena installato il tema.<br><br>

- Puoi aggiungere elementi alla barra laterale dal <a href='./wp-admin/widgets.php'>menù dei widgets</a> nel pannello di controllo.<br><br>

- Per modificare questo messaggio di benvenuto e aggiungere contenuti nella footbar vai alle <a href='./wp-admin/themes.php?page=functions'>opzioni tema</a> nel pannello di controllo. Per disabilitare il messaggio di benvenuto inserisci \"<b>disable</b>\" (tutto in minuscolo) come titolo.<br><br>

- Ricordati di visitare il sito: <a target=_blank href='http://shinworld.altervista.org/ultrapixel/'>http://shinworld.altervista.org/ultrapixel/</a><br> per gli aggiornamenti del tema UltraPixel.</p><br><br>
<center><a href='http://shinworld.altervista.org'>Coded by <b>ShinDarth</b> & <b>Helias</b></a></center>";
}
 
?>

</div>
<?php endif; ?>
