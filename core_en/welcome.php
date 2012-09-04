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
    echo "<h2>Welcome in $mysitename!</h2><p>Welcome, if you read this message it means you have just installed the UltraPixel theme.<br> -You can edit this welcome message and/or add contents in the footbar using the <a href='./wp-admin/themes.php?page=functions'>control panel</a>.<br>-Visit:<br><a target=_blank href=http://shinworld.altervista.org/ultrapixel>http://shinworld.altervista.org/ultrapixel</a><br> for faq and updates.</p>";
}
 
?>

</div><!-- Closes welcome -->
