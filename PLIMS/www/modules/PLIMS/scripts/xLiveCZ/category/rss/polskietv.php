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
		<text align="center" offsetXPC="0" offsetYPC="-2" widthPC="100" heightPC="20" fontSize="30" backgroundColor=-1:-1:-1 foregroundColor=250:250:250>
Polskie TV</text>

		</mediaDisplay>

<channel>
	<title>Polskie TV</title>
	<link></link>


<item>
<title>Edusat</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://178.73.10.66:1935/live/mpegts.stream", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/ee/edusat_pl.jpg" />
</item>

<item>
<title>CZWÓRKA</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://stream85.polskieradio.pl/video/czworka.sdp", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/radio/pp/polskie_radio4.jpg" />
</item>

<item>
<title>Eska TV</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://46.105.112.212:1935/live/mpegts.stream", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/hires/ee/eska_tv.png" />
</item>

<item>
<title>Music next HD TV</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=musicnext&amp;url=rtmp://vod.wowza.astrosa.pl:80/rtplive&amp;p=http://oognet.pl/content/details/1100&amp;a=rtplive&amp;y=:music_540p.stream", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/mm/music_mix.jpg" />
</item>

<item>
<title>Mango 24</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=obecne&amp;url=rtmp://stream.mango.pl/rtplive/live/1&amp;p=http://tv.mango.pl/&amp;a=rtplive&amp;y=live/1", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/mm/mango_24.jpg" />
</item>

<item>
<title>TV Sfera</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://85.11.67.199/sferatvlive/mpegts.stream", 10);</onClick>
<media:thumbnail url="http://www.gorczycki.pl/patroni/sfera_tv.jpg" />
</item>

<item>
<title>TV Toya</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=test&amp;url=mms://217.113.224.22/TVToya", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/tt/tv_toya.jpg" />
</item>

<item>
<title>TV Dami</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=test&amp;url=mms://82.139.8.249/dami", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/tt/tv_dami.jpg" />
</item>

<item>
<title>TV Master</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=test&amp;url=mms://89.151.0.13:8080", 10);</onClick>
<media:thumbnail url="http://www.master.pl/grafika/smlogo.png" />
</item>

<item>
<title>TV Biznes</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=live&amp;url=http://dcs-193-111-38-249.atmcdn.pl/streams/o2/TVBiznes/TVbiznes.livx", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/tt/tv_biznes.jpg" />
</item>

<item>
<title>iTV</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=test&amp;url=mms://stream.mni.pl/ITV", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/hires/ii/itv_pl.png" />
</item>

<item>
<title>TV Trwam</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=test&amp;url=mms://195.94.205.211/Trwam", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/tt/tv_trwam.jpg" />
</item>

<item>
<title>Telewizja Sudecka</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=test&amp;url=mms://82.139.8.249/sudecka", 10);</onClick>
<media:thumbnail url="http://dfn.bystrzyca.eu/2010/images/stories/loga/telewizja_sudecka.jpg" />
</item>

<item>
<title>Kosmica TV</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://streamserver.smartcast.de/kosmicaber/kosmicaber.stream",10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/kk/kosmica_tv.jpg" />
</item>

</channel>
</rss>