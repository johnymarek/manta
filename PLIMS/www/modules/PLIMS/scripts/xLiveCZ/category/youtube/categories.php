<?php
// ###############################################################
// ##                                                           ##
// ##   http://sites.google.com/site/pavelbaco/                 ##
// ##   Copyright (C) 2012  Pavel Bačo   (killerman)            ##
// ##                                                           ##
// ## This file is a part of xLiveCZ, this project doesnt have  ##
// ## any support from Xtreamer company and just be design for  ##  
// ## realtek based players									    ##
// ###############################################################
echo "<?xml version='1.0' encoding='UTF8' ?>";
$DIR_SCRIPT_ROOT  = current(explode('xLiveCZ/', dirname(__FILE__).'/')).'xLiveCZ/';
$HTTP_SCRIPT_ROOT = current(explode('scripts/', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/')).'scripts/';
?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">
<channel>

<item>
  <title>Krátké a kreslené filmy</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Film,Kreslene%20filmy</link>
</item>

<item>
  <title>Auta a dopravní prostředky</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Autos,Auta</link>
</item>

<item>
  <title>Hudba</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Music,Hudba</link>
</item>

<item>
  <title>Zvířata a domácí mazlíčci</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Animals,Zvirata</link>
</item>

<item>
  <title>Sport</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Sports,Sport</link>
</item>

<item>
  <title>Cestování a události</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Travel,Cestovani</link>
</item>

<item>
  <title>Hraní her</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Games,Hrani%20her</link>
</item>

<item>
  <title>Komedie</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Comedy,Komedie</link>
</item>

<item>
  <title>Lidé a blogy</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/People,Lide%20a%20blogy</link>
</item>

<item>
  <title>Zprávy a politika</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/News,Zpravy%20a%20politika</link>
</item>

<item>
  <title>Zábava</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Entertainment,Zabava</link>
</item>

<item>
  <title>Vzdělání</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Education,Vzdelani</link>
</item>

<item>
  <title>Jak na to a styl</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Howto,Jak%20na%20to%20a%20styl</link>
</item>

<item>
  <title>Neziskové organizace a aktivismus</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Nonprofit,Aktivismus</link>
</item>

<item>
  <title>Věda a technologie</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Tech,Veda%20a%20technologie</link>
</item>

<item>
  <title>Filmy</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Movies,Filmy</link>
</item>

<item>
  <title>Filmy - Komedie</title>
  <link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/videos/-/Movies_Comedy,Filmy%20-%20Komedie</link>
</item>


</channel>
</rss>