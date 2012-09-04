<div id="morefoot"><center>
<?php
 if (get_option('footbar'))
 {
   echo get_option('footbar');
 }
else
{
  echo "<hr>";
}
 
?>
</center>
<div class="cleared"></div>
</div><!-- Closes morefoot -->



<div id="footer">
<div id="footerleft">
<p>Powered by <a href="http://www.wordpress.org/">WordPress</a>. Theme <a href="http://ultrapixel.altervista.org/">UltraPixel</a> (DEV) designed by <a href="http://shinworld.altervista.org/"><font color="lightblue">Shin Darth</font></a>.
<!-- We worked free to develop WordPress, pixel and UltraPixel. Please do not remove credis.-->
</div>

<div id="footerright">
 <a href="#main">Back to top &uarr;</a></p>
</div>

<div class="cleared"></div>
<?php wp_footer(); ?>
</div><!-- Closes footer -->

</div><!-- Closes wrapper -->

</body>
</html>
