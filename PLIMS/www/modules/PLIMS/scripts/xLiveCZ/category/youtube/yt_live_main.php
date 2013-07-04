<?php
###############################################################
##   Original take from HD for all 			                 ##
##   Traian Pricop  http://code.google.com/p/hdforall/       ##
##   Modified                                                ##
##   http://sites.google.com/site/pavelbaco/                 ##
##   Copyright (C) 2013  Pavel Bačo   (killerman)            ##
##                                                           ##
## This file is a part of xLiveCZ, this project doesnt have  ##
## any support from Xtreamer company and just be design for  ##
## realtek based players                                     ##
###############################################################

define('HTTP_SCRIPT_ROOT', current(explode('xLiveCZ/', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/')).'xLiveCZ/');
$DIR_SCRIPT_ROOT  = current(explode('xLiveCZ/', dirname(__FILE__).'/')).'xLiveCZ/';
echo '<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">
<script>
	setRefreshTime(-1);
	enablenextplay = 0;
	itemCount = getPageInfo("itemCount");
	SwitchViewer(7);
</script>

<mediaDisplay name="threePartsView"
	sideLeftWidthPC="0"
	sideRightWidthPC="0"
	headerImageWidthPC="0"
	selectMenuOnRight="no"
	autoSelectMenu="no"
	autoSelectItem="no"
	itemImageHeightPC="0"
	itemImageWidthPC="0"
	itemXPC="3"
	itemYPC="25"
	itemWidthPC="52"
	itemHeightPC="8"
	capXPC="3"
	capYPC="25"
	capWidthPC="52"
	capHeightPC="64"
	itemBackgroundColor="0:0:0"
	itemPerPage="8"
    itemGap="0"
	bottomYPC="90"
	backgroundColor="0:0:0"
	showHeader="no"
	showDefaultInfo="no"
	imageFocus=""
	sliding="no" idleImageXPC="5" idleImageYPC="5" idleImageWidthPC="8" idleImageHeightPC="10"
>

 <text align="center" offsetXPC="2" offsetYPC="3" widthPC="54" heightPC="19" fontSize="30" backgroundColor="10:105:150" foregroundColor="100:200:255">
		  <script>getPageInfo("pageTitle");</script>
		</text>
  	<text redraw="yes" offsetXPC="46" offsetYPC="15" widthPC="10" heightPC="6" fontSize="20" backgroundColor="10:105:150" foregroundColor="60:160:205">
		  <script>sprintf("%s / ", focus-(-1))+itemCount;</script>
		</text>
	<text align="justify" redraw="yes"
          lines="9" fontSize=13
		      offsetXPC=58 offsetYPC=58 widthPC=40 heightPC=32
		      backgroundColor=0:0:0 foregroundColor=200:200:200>
			<script>print(annotation); annotation;</script>
		</text>
  	<text  redraw="yes" align="center" offsetXPC="0" offsetYPC="90" widthPC="100" heightPC="8" fontSize="17" backgroundColor="10:105:150" foregroundColor="100:200:255">
		  <script>print(titlu); titlu;</script>
		</text>
 <text align="center" offsetXPC="58.2" offsetYPC="0" widthPC="39.68" heightPC="52" fontSize="30" backgroundColor="130:130:130" foregroundColor="0:0:0">
		  <script>sprintf("YouTube",focus-(-1));</script>
		</text>
<image redraw="yes" offsetXPC="2.5" offsetYPC="4" widthPC="8" heightPC="11">'.$DIR_SCRIPT_ROOT.'image/youtubeu.jpg</image>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy1.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy2.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy3.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy4.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy5.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy6.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy7.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy8.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy9.png</idleImage>

		<itemDisplay>
			<text align="left" lines="1" offsetXPC=0 offsetYPC=0 widthPC=100 heightPC=100>
				<script>
					idx = getQueryItemIndex();
					focus = getFocusItemIndex();
					if(focus==idx)
					{
                      img = getItemInfo(idx,"image");
					  annotation = getItemInfo(idx, "annotation");
					  durata = getItemInfo(idx, "durata");
					  pub = getItemInfo(idx, "pub");
					  titlu = getItemInfo(idx, "title");
					}
					getItemInfo(idx, "title");
				</script>
				<fontSize>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "14"; else "14";
  				</script>
				</fontSize>
			  <backgroundColor>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "10:80:120"; else "-1:-1:-1";
  				</script>
			  </backgroundColor>
			  <foregroundColor>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "255:255:255"; else "140:140:140";
  				</script>
			  </foregroundColor>
			</text>

		</itemDisplay>
<onUserInput>
			<script>
				ret = "false";
				userInput = currentUserInput();
				if (userInput == "PD" || userInput == "PG" || userInput == "pagedown" || userInput == "pageup") {
					idx = Integer(getFocusItemIndex());
					if (userInput == "PD" || userInput == "pagedown") {
						idx -= -10;
						if (idx &gt;= getPageInfo("itemCount"))
							idx = 0;
					} else {
						idx -= 10;
						if (idx &lt; 0)
							idx = getPageInfo("itemCount")-1;
					}
					print("new idx: "+idx);
					setFocusItemIndex(idx);
					setItemFocus(0);
					redrawDisplay();
					ret = "true";
				} 
				ret;
</script>
</onUserInput>

	</mediaDisplay>

	<item_template>
		<mediaDisplay  name="threePartsView" idleImageXPC="5" idleImageYPC="5" idleImageWidthPC="8" idleImageHeightPC="10">
			<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy1.png</idleImage>
			<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy2.png</idleImage>
			<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy3.png</idleImage>
			<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy4.png</idleImage>
			<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy5.png</idleImage>
			<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy6.png</idleImage>
			<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy7.png</idleImage>
			<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy8.png</idleImage>
			<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy9.png</idleImage>
		</mediaDisplay>

	</item_template>

	<Destination>
		<link>
			<script>
				url;
			</script>
		</link>
	</Destination>
';

echo "
<channel>
	<title>Youtube live</title>

<item>
<title>Oblíbené</title>
<link>".HTTP_SCRIPT_ROOT."category/youtube/yt_live_fav.php</link>
</item>";

$l="http://www.youtube.com/live/all";
$html=file_get_contents($l);
$videos = explode('branded-page-module-title', $html);

unset($videos[0]);
$videos = array_values($videos);

foreach($videos as $video) {
  $t1=explode('href="',$video);
  $t2=explode('"',$t1[1]);
  $link=$t2[0];
  
  $t1=explode('title="',$video);
  $t2=explode('"',$t1[1]);
  $title=$t2[0];
  
  if (strpos($link,"channel") !==false) {
   $ch = substr(strrchr($link, "/"), 1);
   echo '
   <item>
   <title>'.$title.'</title>
   <link>'.HTTP_SCRIPT_ROOT.'category/youtube/yt_live.php?file='.$ch.','.urlencode($title).',1</link>
   </item>
   ';
  }
}
?>
</channel>
</rss>
