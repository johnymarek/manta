<?php echo "<?xml version='1.0' encoding='UTF8' ?>";
// ###############################################################
// ##                                                           ##
// ##   http://sites.google.com/site/pavelbaco/                 ##
// ##   Copyright (C) 2012  Pavel Baèo   (killerman)            ##
// ##                                                           ##
// ## This file is a part of xLiveCZ, this project doesnt have  ##
// ## any support from Xtreamer company and just be design for  ##  
// ## realtek based players									    ##
// ###############################################################
error_reporting(0);
$DIR_SCRIPT_ROOT  = current(explode('xLiveCZ/', dirname(__FILE__).'/')).'xLiveCZ/';
$HTTP_SCRIPT_ROOT = current(explode('scripts/', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/')).'scripts/';
function str_between($string, $start, $end){
	$string = " ".$string; $ini = strpos($string,$start);
	if ($ini == 0) return ""; $ini += strlen($start); $len = strpos($string,$end,$ini) - $ini;
	return substr($string,$ini,$len);
}
$url="http://livehd.tv/live.php";
$html=file_get_contents($url);
$token=str_between($html,"token':'","'");
$url2="http://livehd.tv/rtmp/flash-mbr.php";
$html2=file_get_contents($url2);
$server=str_between($html2,"<jwplayer:streamer>","</jwplayer:streamer>");
?>
<rss version="2.0">
<onEnter>
  startitem = "middle";
  setRefreshTime(1);
</onEnter>

<onRefresh>
  setRefreshTime(-1);
  itemCount = getPageInfo("itemCount");
</onRefresh>

<mediaDisplay name="threePartsView"
	sideLeftWidthPC="0"
	sideRightWidthPC="0"
	headerImageWidthPC="0"
	selectMenuOnRight="no"
	autoSelectMenu="no"
	autoSelectItem="no"
	itemImageHeightPC="0"
	itemImageWidthPC="0"
	itemXPC="8"
	itemYPC="25"
	itemWidthPC="45"
	itemHeightPC="8"
	capXPC="8"
	capYPC="25"
	capWidthPC="45"
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

  	<text align="center" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="20" fontSize="30" backgroundColor="10:105:150" foregroundColor="100:200:255">
		  <script>getPageInfo("pageTitle");</script>
		</text>
  	<text redraw="yes" offsetXPC="85" offsetYPC="12" widthPC="10" heightPC="6" fontSize="20" backgroundColor="10:105:150" foregroundColor="60:160:205">
		  <script>sprintf("%s / ", focus-(-1))+itemCount;</script>
		</text>
		<text align="justify" redraw="yes"
          lines="9" fontSize=13
		      offsetXPC=55 offsetYPC=48 widthPC=40 heightPC=38
		      backgroundColor=0:0:0 foregroundColor=200:200:200>
			<script>print(annotation); annotation;</script>
		</text>
  	  	<text  redraw="yes" align="center" offsetXPC="0" offsetYPC="90" widthPC="100" heightPC="8" fontSize="17" backgroundColor="10:105:150" foregroundColor="100:200:255">
		  <script>print(titlu); titlu;</script>
		</text>
		<image  redraw="no" offsetXPC=60 offsetYPC=25 widthPC=30 heightPC=25>
        <script>
		img;
		</script>
		</image>
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

		<itemDisplay>
			<text align="left" lines="1" offsetXPC=0 offsetYPC=0 widthPC=100 heightPC=100>
				<script>
					idx = getQueryItemIndex();
					focus = getFocusItemIndex();
					if(focus==idx) 
					{
					  img = getItemInfo(idx,"image");
					  titlu = getItemInfo(idx, "title");
					}
					getItemInfo(idx, "title");
				</script>
				<fontSize>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "16"; else "14";
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

	</mediaDisplay>
	<item_template>
		<mediaDisplay  name="threePartsView" idleImageXPC="5" idleImageYPC="5" idleImageWidthPC="8" idleImageHeightPC="10">
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
		</mediaDisplay>

	</item_template>
<channel>
	<title>OneHD</title>
	<menu>main menu</menu>

<item>
<title>OneHD - Live! Concert</title>
<image>http://www.livehd.tv/images/logo.png</image>
<media:thumbnail url="http://www.livehd.tv/images/logo.png" />
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=<?php echo $server; ?>/onehdhd&amp;w=http://www.livehd.tv/player/player.swf&amp;p=http://www.livehd.tv/&amp;y=onehdhd&amp;t=<?php echo $token; ?>", 10);</onClick>
<mediaDisplay name="threePartsView"/>
</item>

<item>
<title>OneHD - Live! Jazz</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=<?php echo $server; ?>/jazzhd&amp;w=http://www.livehd.tv/player/player.swf&amp;p=http://www.livehd.tv/&amp;y=jazzhd&amp;t=<?php echo $token; ?>", 10);</onClick>
<image>http://www.livehd.tv/images/onehd_jazz.png</image>
<media:thumbnail url="http://www.livehd.tv/images/onehd_jazz.png" />
<mediaDisplay name="threePartsView"/>
</item>

<item>
<title>OneHD - Live! Classics</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=<?php echo $server; ?>/classicshd&amp;w=http://www.livehd.tv/player/player.swf&amp;p=http://www.livehd.tv/&amp;y=classicshd&amp;t=<?php echo $token; ?>", 10);</onClick>
<image>http://www.livehd.tv/images/onehd_classics.png</image>
<media:thumbnail url="http://www.livehd.tv/images/onehd_classics.png" />
<mediaDisplay name="threePartsView"/>
</item>

<item>
<title>OneHD - Live! Dance</title>
<image>http://www.livehd.tv/images/onehd_dance.png</image>
<media:thumbnail url="http://www.livehd.tv/images/onehd_dance.png" />
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=<?php echo $server; ?>/dancehd&amp;w=http://www.livehd.tv/player/player.swf&amp;p=http://www.livehd.tv/&amp;y=dancehd&amp;t=<?php echo $token; ?>", 10);</onClick>
<mediaDisplay name="threePartsView"/>
</item>

<item>
<title>OneHD - Live! Rock</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=<?php echo $server; ?>/rockhd&amp;w=http://www.livehd.tv/player/player.swf&amp;p=http://www.livehd.tv/&amp;y=rockhd&amp;t=<?php echo $token; ?>", 10);</onClick>
<image>http://www.livehd.tv/images/onehd_rock.png</image>
<media:thumbnail url="http://www.livehd.tv/images/onehd_rock.png" />
<mediaDisplay name="threePartsView"/>
</item>

<item>
<title>OneHD - Live! Pop</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=<?php echo $server; ?>/pophd&amp;w=http://www.livehd.tv/player/player.swf&amp;p=http://www.livehd.tv/&amp;y=pophd&amp;t=<?php echo $token; ?>", 10);</onClick>
<image>http://www.livehd.tv/images/onehd_pop.png</image>
<media:thumbnail url="http://www.livehd.tv/images/onehd_pop.png" />
</item>
<mediaDisplay name="threePartsView"/>
</channel>
</rss>
