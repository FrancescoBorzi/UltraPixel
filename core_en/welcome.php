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
 	echo "<center><h2>Welcome to $mysitename!</h2></center>
<p>This is the welcome message of <b>UltraPixel</b>, if you read this it means you have just installed the theme.<br><br>

- You can add elements to the sidebar using the <a href='./wp-admin/widgets.php'>widgets menu</a>.<br><br>

- To edit this message and add contents to the footbar, you can usePer modificare questo messaggio di benvenuto e aggiungere contenuti nella footbar vai alle <a href='./wp-admin/themes.php?page=functions'>theme options</a> of control panel. If you want to disable the welcome message, just type \"<b>disable</b>\" (lowercase) as title.<br><br>

- Visit: <a target=_blank href='http://shinworld.altervista.org/ultrapixel/'>http://shinworld.altervista.org/ultrapixel/</a><br> to get UltraPixel theme updates.</p><br><br>
<center><a href='http://shinworld.altervista.org'>Coded by <b>ShinDarth</b> & <b>Helias</b></a></center>";
}
 
?>

</div>
<?php endif; ?>
