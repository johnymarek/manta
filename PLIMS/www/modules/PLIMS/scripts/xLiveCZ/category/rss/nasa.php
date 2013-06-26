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
<!--Realtek chip players - killerman - without any support Xtreamer-->
<rss version="2.0" xmlns:media="http://purl.org/dc/elements/1.1/" xmlns:dc="http://purl.org/dc/elements/1.1/">
<mediaDisplay name=photoView
	rowCount=3
	columnCount=5
	drawItemText="no"
	showHeader="no" 
	menuBorderColor="0:0:0"
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
	itemGapYPC="2"
	itemGapXPC="1.5"
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
		<image redraw="no" offsetXPC="3" offsetYPC="3" widthPC="10" heightPC="14"><?php echo $DIR_SCRIPT_ROOT; ?>image/international.png</image>
		<image offsetXPC="74" offsetYPC="92" widthPC="20" heightPC="3.3" redraw="yes"><?php echo $DIR_SCRIPT_ROOT; ?>backgrounds/login.png</image>
		<text align="center" offsetXPC="0" offsetYPC="-2" widthPC="100" heightPC="20" fontSize="30" backgroundColor=-1:-1:-1 foregroundColor=250:250:250>
NASA TV</text>

<onUserInput>
			<script>
				ret = "false";
				userInput = currentUserInput();
				if (userInput == "one" || userInput == "1" || userInput == "option_red")
				{
					showIdle();
					url="<?php echo $HTTP_SCRIPT_ROOT; ?>" + "xLiveCZ/category/tv/showlogin.php";
					jumpToLink("GotoPage");
					redrawDisplay();
					ret = "true";
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
	<title>in</title>
	<link>/channel/in/rss</link>

<item>
<title>NBA TV</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://91.236.115.70:1935/stream&amp;w=http://cdn3.04stream.com/p/yui.swf&amp;p=http://www.04stream.com/ebb.php&amp;y=f2OI8s.stream", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/nn/nba_tv.jpg" />
</item>


<item>
<title>Nasa TV Media Channel</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=flvocko&amp;url=rtmp://cp76072.live.edgefcs.net/live/MED-HQ-Flash@42814</link>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/nn/nasa_tv_us.jpg" />
<enclosure type="video/flv" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=flvocko&amp;url=rtmp://cp76072.live.edgefcs.net/live/MED-HQ-Flash@42814"/>
</item>

<item>
<title>Nasa TV Media Channel</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://cp39920.live.edgefcs.net:1935/live&amp;w=http://www.ustream.tv/flash/viewer.swf&amp;y=nasahd@55196</link>
<media:thumbnail url="http://www.nasa.gov/images/content/194421main_hi-def-100tz.jpg" />
<enclosure type="video/flv" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://cp39920.live.edgefcs.net:1935/live&amp;w=http://www.ustream.tv/flash/viewer.swf&amp;y=nasahd@55196"/>
</item>

<item>
<title>Nasa TV Edu</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://cp76072.live.edgefcs.net/live/&amp;w=http://www.nasa.gov/templateimages/redesign/flash_player/swf/4.5/player.swf&amp;p=http://www.nasa.gov/multimedia/nasatv/edu_flash.html&amp;y=EDU-HQ-Flash@42809</link>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/nn/nasa_tv_us.jpg" />
<enclosure type="video/flv" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://cp76072.live.edgefcs.net/live/&amp;w=http://www.nasa.gov/templateimages/redesign/flash_player/swf/4.5/player.swf&amp;p=http://www.nasa.gov/multimedia/nasatv/edu_flash.html&amp;y=EDU-HQ-Flash@42809"/>
</item>

</channel>
</rss>