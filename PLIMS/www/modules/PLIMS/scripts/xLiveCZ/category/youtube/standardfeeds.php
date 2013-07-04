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
<mediaDisplay name="photoView"
	rowCount="2"
	columnCount="4"
	drawItemText="no"
	menuBorderColor="0:0:0"
	showHeader="no"
	menuCornerRounding="yes"
	itemBorderColor="0:0:0" 
	sideColorBottom="0:0:0"
	sideColorTop="0:0:0"
	itemImageXPC="10"
	itemOffsetXPC="7"
	backgroundColor="0:0:0"
	sliding="no"
	idleImageXPC="45"
	idleImageYPC="45"
	idleImageWidthPC="8,6"
	idleImageHeightPC="6"
	>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy0.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy1.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy2.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy3.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy4.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy5.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy6.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy7.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy8.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy9.png</idleImage>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="18"><?php echo $DIR_SCRIPT_ROOT; ?>backgrounds/top.png</image>
<image redraw="no" offsetXPC="3" offsetYPC="3" widthPC="10" heightPC="14"><?php echo $DIR_SCRIPT_ROOT; ?>image/youtube.png</image>
<text align="center" offsetXPC="0" offsetYPC="-2" widthPC="100" heightPC="20" fontSize="30" backgroundColor="-1:-1:-1" foregroundColor="250:250:250">
Youtube	</text>
	</mediaDisplay>

	<GotoPage>
		<link>
			<script>
				url;
			</script>
		</link>
	</GotoPage>
	
	
<channel>
	<title>YouTube</title>

<item>
<title>Ulubione</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/standardfeeds/CZ/most_popular,Neoblibenejsi</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 0)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/2.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/2u.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

<item>
<title>Najczęściej oglądane</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/standardfeeds/CZ/most_viewed,Nejsledovanejsi</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 1)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/3.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/3u.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

<item>
<title>Najczęściej komentowane</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/standardfeeds/CZ/most_discussed,Nejdiskutovanejsi</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 2)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/4.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/4u.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

<item>
<title>Najwyżej oceniane</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/standardfeeds/CZ/top_rated,Nejlepe%20hodnocene</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 3)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/5.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/5u.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

<item>
<title>Ulubione</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/standardfeeds/CZ/top_favorites,Oblibene</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 4)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/6.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/6u.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

<item>
<title>Najbardziej polecane</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/standardfeeds/CZ/most_responded,Nejdoporucovanejsi</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 5)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/7.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/7u.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

<item>
<title>Najczęściej udostępniane</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/standardfeeds/CZ/most_shared,Nejcasteji%20sdilena</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 6)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/8.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/8u.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

<item>
<title>Trendy</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/standardfeeds/CZ/on_the_web,Trendova%20videa</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 7)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/9.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/9u.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

</channel>
</rss>

