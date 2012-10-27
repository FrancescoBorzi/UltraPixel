<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"  />
<title><?php if (is_home () ) { bloginfo('name'); echo " - "; bloginfo('description'); 
} elseif (is_category() ) {single_cat_title(); echo " - "; bloginfo('name');
} elseif (is_single() || is_page() ) {single_post_title(); echo " - "; bloginfo('name');
} elseif (is_search() ) {bloginfo('name'); echo " search results: "; echo wp_specialchars($s);
} else { wp_title('',true); }?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="robots" content="follow, all" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>

<!-- this product is released under General Public License. Please see the attached file for details. You can also find details about the license at http://www.opensource.org/licenses/gpl-license.php -->


<script type="text/javascript"><!--//--><![CDATA[//><!--
sfHover = function() {
	if (!document.getElementsByTagName) return false;
	var sfEls = document.getElementById("nav").getElementsByTagName("li");

	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}

}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]></script>


<!--[if IE]>
<META HTTP-EQUIV=REFRESH CONTENT=0; URL=http://shinworld.altervista.org/ultrapixel/ie_en.html'>
<script language="JavaScript" type="text/javascript">
window.onload = function()
{
    self.setTimeout("location.href='http://ultrapixel.altervista.org/ie_eng.html'", 0);
}
</script>
<![endif]-->



</head>

<body>
<div id="wrapper">

<div id="header">

<div id="logo">
<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
<span><?php bloginfo('description'); ?></span>
</div>


<div id="topright">
<ul>
  <?php wp_list_pages('depth=1&title_li=0&sort_column=menu_order'); ?>
  <?php wp_register(); ?>
  <li><?php wp_loginout(); ?></li>
  <?php wp_meta(); ?>
  <li><a target="_blank_" href="http://shinworld.altervista.org/wordpress/?p=716">download UltraPixel</a></li>
  <li><a href="#main">skip to content &darr;</a></li>
</ul>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>
<div class="cleared"></div>
</div> <!-- Closes header -->



<div id="catnav">
<div id="toprss"><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rss-trans.png" alt="<?php bloginfo('name'); ?>" width="65" height="24" /></a></div> <!-- Closes toprss -->
<ul id="nav">
  <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
  <?php wp_list_categories('sort_column=name&title_li=&depth=2'); ?>
</ul>
</div> <!-- Closes catnav -->

<div class="cleared"></div>
