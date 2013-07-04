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
$DIR_xListplay  = current(explode('scripts/', dirname(__FILE__).'/')).'scripts/';
$HTTP_SCRIPT_ROOT = current(explode('scripts/', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/')).'scripts/';
?>

<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">
<mediaDisplay name="photoView"
	rowCount="3"
	columnCount="3"
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
	idleImageWidthPC="8.6"
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
<image offsetXPC="10" offsetYPC="92" widthPC="20" heightPC="3.3" redraw="yes"><?php echo $DIR_SCRIPT_ROOT; ?>backgrounds/1080p.png</image>
<image offsetXPC="30" offsetYPC="92" widthPC="20" heightPC="3.3" redraw="yes"><?php echo $DIR_SCRIPT_ROOT; ?>backgrounds/720p.png</image>
<image offsetXPC="50" offsetYPC="92" widthPC="20" heightPC="3.3" redraw="yes"><?php echo $DIR_SCRIPT_ROOT; ?>backgrounds/lowq.png</image>
<onUserInput>
			<script>
				ret = "false";
				userInput = currentUserInput();
				if (userInput == "one" || userInput == "1")
				{
					showIdle();
					url="<?php echo $HTTP_SCRIPT_ROOT; ?>" + "xLiveCZ/modules/links/quality.php?action=1080p";
					jumpToLink("GotoPage");
					redrawDisplay();
					ret = "true";
				}
				if (userInput == "two" || userInput == "2")
				{
					showIdle();
					url="<?php echo $HTTP_SCRIPT_ROOT; ?>" + "xLiveCZ/modules/links/quality.php?action=720p";
					jumpToLink("GotoPage");
					redrawDisplay();
					ret = "true";
				}
				if (userInput == "three" || userInput == "3")
				{
					showIdle();
					url="<?php echo $HTTP_SCRIPT_ROOT; ?>" + "xLiveCZ/modules/links/quality.php?action=large";
					jumpToLink("GotoPage");
					redrawDisplay();
					ret = "true";
				}
				}
				ret;
			</script>
		</onUserInput>

	</mediaDisplay>

	<GotoPage>
		<link>
			<script>
				url;
			</script>
		</link>
	</GotoPage>
	
	
<channel>
	<title>Youtube</title>


<item>
<title>Szukaj</title>
	<link>rss_command://search</link>
	<location>http://youtube.com</location>
	<search url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,%s" />
	<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 0)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/1.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/1u.jpg"; }
     }
    </script>
	
  </media:thumbnail>
</item>

<item>
<title>Playlisty</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/ytpl.php?file=<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/youtube_playlists.rss</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 1)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/youtubepl.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/youtubeplu.jpg"; }
     }
	 </script>
  </media:thumbnail>

<mediaDisplay name="threePartsView" sideColorLeft="0:0:0" sideLeftWidthPC="18" sideRightWidthPC="10" sideColorRight="0:0:0" headerXPC="14" headerYPC="3" headerWidthPC="95"
	itemPerPage="8" itemImageXPC="21" itemImageYPC="18" itemXPC="30" itemYPC="18" itemWidthPC="46" itemHeightPC="8" menuXPC="8"	menuWidthPC="15" capXPC="82" capYPC="17" capHeightPC="10" headerCapXPC="90"
	headerCapYPC="10" headerCapWidthPC="0" showDefaultInfo="yes" backgroundColor="0:0:0" itemBackgroundColor="0:0:0"  infoYPC="85" popupXPC="7" popupWidthPC="15"
	popupBorderColor="0:0:0" idleImageXPC="45" idleImageYPC="45" idleImageWidthPC="8.6" idleImageHeightPC="6" sliding=yes showHeader=no forceFocusOnItem=yes>
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
		<text align="center" offsetXPC="0" offsetYPC="-2" widthPC="100" heightPC="20" fontSize="30" backgroundColor=-1:-1:-1 foregroundColor=250:250:250>
Youtube playlisty</text>
</mediaDisplay>
</item>

<item>
<title>Prywatne playlisty</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/ytpl.php?file=<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_pl_soukromy.rss</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 2)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/youtubepls.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/youtubeplsu.jpg"; }
     }
    </script>
  </media:thumbnail>
<mediaDisplay name="threePartsView" sideColorLeft="0:0:0" sideLeftWidthPC="18" sideRightWidthPC="10" sideColorRight="0:0:0" headerXPC="14" headerYPC="3" headerWidthPC="95"
	itemPerPage="8" itemImageXPC="21" itemImageYPC="18" itemXPC="30" itemYPC="18" itemWidthPC="46" itemHeightPC="8" menuXPC="8"	menuWidthPC="15" capXPC="82" capYPC="17" capHeightPC="10" headerCapXPC="90"
	headerCapYPC="10" headerCapWidthPC="0" showDefaultInfo="yes" backgroundColor="0:0:0" itemBackgroundColor="0:0:0"  infoYPC="85" popupXPC="7" popupWidthPC="15"
	popupBorderColor="0:0:0" idleImageXPC="45" idleImageYPC="45" idleImageWidthPC="8.6" idleImageHeightPC="6" sliding=yes showHeader=no forceFocusOnItem=yes>
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
		<text align="center" offsetXPC="0" offsetYPC="-2" widthPC="100" heightPC="20" fontSize="30" backgroundColor=-1:-1:-1 foregroundColor=250:250:250>
Prywatne playlisty</text>

</mediaDisplay>
</item>

<item>
<title>Kanałyy</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/ytch.php?file=<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_channels.rss</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 3)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/youtubechannel.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/youtubechannelu.jpg"; }
     }
    </script>
  </media:thumbnail>
<mediaDisplay name="threePartsView" sideColorLeft="0:0:0" sideLeftWidthPC="18" sideRightWidthPC="10" sideColorRight="0:0:0" headerXPC="14" headerYPC="3" headerWidthPC="95"
	itemPerPage="8" itemImageXPC="21" itemImageYPC="18" itemXPC="30" itemYPC="18" itemWidthPC="46" itemHeightPC="8" menuXPC="8"	menuWidthPC="15" capXPC="82" capYPC="17" capHeightPC="10" headerCapXPC="90"
	headerCapYPC="10" headerCapWidthPC="0" showDefaultInfo="yes" backgroundColor="0:0:0" itemBackgroundColor="0:0:0"  infoYPC="85" popupXPC="7" popupWidthPC="15"
	popupBorderColor="0:0:0" idleImageXPC="45" idleImageYPC="45" idleImageWidthPC="8.6" idleImageHeightPC="6" sliding=yes showHeader=no forceFocusOnItem=yes>
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
		<text align="center" offsetXPC="0" offsetYPC="-2" widthPC="100" heightPC="20" fontSize="30" backgroundColor=-1:-1:-1 foregroundColor=250:250:250>
Youtube kanały</text>
</mediaDisplay>
</item>


<item>
<title>Prywatne kanały</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/ytch.php?file=<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_channels_soukromy.rss</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 4)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/youtubech.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/youtubechu.jpg"; }
     }
    </script>
  </media:thumbnail>
<mediaDisplay name="threePartsView" sideColorLeft="0:0:0" sideLeftWidthPC="18" sideRightWidthPC="10" sideColorRight="0:0:0" headerXPC="14" headerYPC="3" headerWidthPC="95"
	itemPerPage="8" itemImageXPC="21" itemImageYPC="18" itemXPC="30" itemYPC="18" itemWidthPC="46" itemHeightPC="8" menuXPC="8"	menuWidthPC="15" capXPC="82" capYPC="17" capHeightPC="10" headerCapXPC="90"
	headerCapYPC="10" headerCapWidthPC="0" showDefaultInfo="yes" backgroundColor="0:0:0" itemBackgroundColor="0:0:0"  infoYPC="85" popupXPC="7" popupWidthPC="15"
	popupBorderColor="0:0:0" idleImageXPC="45" idleImageYPC="45" idleImageWidthPC="8.6" idleImageHeightPC="6" sliding=yes showHeader=no forceFocusOnItem=yes>
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
		<text align="center" offsetXPC="0" offsetYPC="-2" widthPC="100" heightPC="20" fontSize="30" backgroundColor=-1:-1:-1 foregroundColor=250:250:250>
Prywatne kanały</text>
</mediaDisplay>
</item>




<item>
<title>Standard Feeds</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/standardfeeds.php</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 5)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/yfeeds.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/yfeedsu.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

<item>
<title>Kategorie</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/categories.php</link>
<mediaDisplay name="threePartsView" sideColorLeft="0:0:0" sideLeftWidthPC="18" sideRightWidthPC="10" sideColorRight="0:0:0" headerXPC="14" headerYPC="3" headerWidthPC="95"
	itemPerPage="8" itemImageXPC="21" itemImageYPC="18" itemXPC="30" itemYPC="18" itemWidthPC="46" itemHeightPC="8" menuXPC="8"	menuWidthPC="15" capXPC="82" capYPC="17" capHeightPC="10" headerCapXPC="90"
	headerCapYPC="10" headerCapWidthPC="0" showDefaultInfo="yes" backgroundColor="0:0:0" itemBackgroundColor="0:0:0"  infoYPC="85" popupXPC="7" popupWidthPC="15"
	popupBorderColor="0:0:0" idleImageXPC="45" idleImageYPC="45" idleImageWidthPC="8.6" idleImageHeightPC="6" sliding=yes showHeader=no forceFocusOnItem=yes>
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
		<text align="center" offsetXPC="0" offsetYPC="-2" widthPC="100" heightPC="20" fontSize="30" backgroundColor=-1:-1:-1 foregroundColor=250:250:250>
Youtube kategorie</text>
</mediaDisplay>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 6)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/ytcat.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/ytcatu.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

<item>
<title>Twój YouTube</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/youtube_personal.php</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 7)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/ypers.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/ypersu.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

<item>
<title>Youtube Live</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_live_main.php</link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 8)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/youtubelive.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/youtubeliveu.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

</channel>
</rss>

