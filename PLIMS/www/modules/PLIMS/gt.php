<?php

  $dirpath = dirname($_SERVER["SCRIPT_FILENAME"]) . '/';
	$webpath = 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/';
	$imgpath = $dirpath . 'image/';
echo "<?xml version='1.0' encoding='UTF8' ?>\n";
?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" rowCount="3" columnCount="3" drawItemText="no" showDefaultInfo="yes" showHeader="no" itemOffsetXPC="10" itemOffsetYPC="11" sliding="yes" itemBorderColor="255:255:255" itemHeightPC="23" itemWidthPC="25" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" sideColorBottom="0:0:0" sideColorTop="-1:-1:-1" bottomYPC="90">

		<idleImage><?php echo $imgpath; ?>busy0.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy1.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy2.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy3.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy4.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy5.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy6.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy7.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy8.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy9.png</idleImage>

<itemDisplay>
<image redraw="no" offsetXPC="1" offsetYPC="1" widthPC="98" heightPC="98">
<script>
	getItemInfo(-1, "media");
</script>
</image>
</itemDisplay>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100"><?php echo $imgpath; ?>list.jpg</image>
<image redraw="no" offsetXPC="4" offsetYPC="2" widthPC="92" heightPC="90"><?php echo $imgpath; ?>frame.png</image>
</backgroundDisplay>
</mediaDisplay>

<channel>

<item>
<title>GameTrailers.com reviews</title>
<link>http://www.gametrailers.com/gtrev_podcast.xml</link>
<media>http://gametrailers.mtvnimages.com/images/podcasts/VideoReviews.jpg</media>
<mediaDisplay name="threePartsView" 
	itemBackgroundColor="0:0:0" 
	backgroundColor="0:0:0" 
	sideLeftWidthPC="0" 
	itemImageXPC="5" 
	itemXPC="20" 
	itemYPC="20" 
	itemWidthPC="65" 
	capWidthPC="70" 
	unFocusFontColor="101:101:101" 
	focusFontColor="255:255:255" 
	idleImageWidthPC="8"
	idleImageHeightPC="10">
		<idleImage><?php echo $imgpath; ?>busy0.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy1.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy2.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy3.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy4.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy5.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy6.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy7.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy8.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy9.png</idleImage>
		<backgroundDisplay>
			<image  offsetXPC=0 offsetYPC=0 widthPC=100 heightPC=100>
			/image/black.jpg
			</image>  
		</backgroundDisplay>
		<image  offsetXPC=0 offsetYPC=2.8 widthPC=100 heightPC=15.6>
		<?php echo $imgpath; ?>vfeeds_title.jpg
		</image>
		<text  offsetXPC=23 offsetYPC=8 widthPC=35 heightPC=10 fontSize=20 backgroundColor=-1:-1:-1 foregroundColor=255:255:255>
		Reviews
		</text>		
	    </mediaDisplay>
</item>


<item>
<title>GameTrailers.com Wii spotlight</title>
<link>http://www.gametrailers.com/gtwii_podcast.xml</link>
<media>http://gametrailers.mtvnimages.com/images/podcasts/PodCast_Wii.jpg</media>
<mediaDisplay name="threePartsView" 
	itemBackgroundColor="0:0:0" 
	backgroundColor="0:0:0" 
	sideLeftWidthPC="0" 
	itemImageXPC="5" 
	itemXPC="20" 
	itemYPC="20" 
	itemWidthPC="65" 
	capWidthPC="70" 
	unFocusFontColor="101:101:101" 
	focusFontColor="255:255:255" 
	idleImageWidthPC="8"
	idleImageHeightPC="10">
		<idleImage><?php echo $imgpath; ?>busy0.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy1.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy2.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy3.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy4.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy5.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy6.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy7.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy8.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy9.png</idleImage>
		<backgroundDisplay>
			<image  offsetXPC=0 offsetYPC=0 widthPC=100 heightPC=100>
			<?php echo $imgpath; ?>black.jpg
			</image>  
		</backgroundDisplay>
		<image  offsetXPC=0 offsetYPC=2.8 widthPC=100 heightPC=15.6>
		<?php echo $imgpath; ?>vfeeds_title.jpg
		</image>
		<text  offsetXPC=23 offsetYPC=8 widthPC=35 heightPC=10 fontSize=20 backgroundColor=-1:-1:-1 foregroundColor=255:255:255>
		Reviews
		</text>		
	    </mediaDisplay>
</item>

<item>
<title>GameTrailers.com Xbox360 spotlight</title>
<link>http://www.gametrailers.com/gt360_podcast.xml</link>
<media>http://gametrailers.mtvnimages.com/images/podcasts/Xbox360.jpg</media>
<mediaDisplay name="threePartsView" 
	itemBackgroundColor="0:0:0" 
	backgroundColor="0:0:0" 
	sideLeftWidthPC="0" 
	itemImageXPC="5" 
	itemXPC="20" 
	itemYPC="20" 
	itemWidthPC="65" 
	capWidthPC="70" 
	unFocusFontColor="101:101:101" 
	focusFontColor="255:255:255" 
	idleImageWidthPC="8"
	idleImageHeightPC="10">
		<idleImage><?php echo $imgpath; ?>busy0.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy1.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy2.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy3.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy4.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy5.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy6.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy7.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy8.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy9.png</idleImage>
		<backgroundDisplay>
			<image  offsetXPC=0 offsetYPC=0 widthPC=100 heightPC=100>
			<?php echo $imgpath; ?>black.jpg
			</image>  
		</backgroundDisplay>
		<image  offsetXPC=0 offsetYPC=2.8 widthPC=100 heightPC=15.6>
		<?php echo $imgpath; ?>vfeeds_title.jpg
		</image>
		<text  offsetXPC=23 offsetYPC=8 widthPC=35 heightPC=10 fontSize=20 backgroundColor=-1:-1:-1 foregroundColor=255:255:255>
		Reviews
		</text>		
	    </mediaDisplay>
</item>


<item>
<title>GameTrailers.com Sony PS3 spotlight</title>
<link>http://www.gametrailers.com/gtps3_podcast.xml</link>
<media>http://gametrailers.mtvnimages.com/images/podcasts/SonyPS3.jpg</media>
<mediaDisplay name="threePartsView" 
	itemBackgroundColor="0:0:0" 
	backgroundColor="0:0:0" 
	sideLeftWidthPC="0" 
	itemImageXPC="5" 
	itemXPC="20" 
	itemYPC="20" 
	itemWidthPC="65" 
	capWidthPC="70" 
	unFocusFontColor="101:101:101" 
	focusFontColor="255:255:255" 
	idleImageWidthPC="8"
	idleImageHeightPC="10">
		<idleImage><?php echo $imgpath; ?>busy0.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy1.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy2.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy3.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy4.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy5.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy6.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy7.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy8.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy9.png</idleImage>
		<backgroundDisplay>
			<image  offsetXPC=0 offsetYPC=0 widthPC=100 heightPC=100>
			<?php echo $imgpath; ?>black.jpg
			</image>  
		</backgroundDisplay>
		<image  offsetXPC=0 offsetYPC=2.8 widthPC=100 heightPC=15.6>
		<?php echo $imgpath; ?>vfeeds_title.jpg
		</image>
		<text  offsetXPC=23 offsetYPC=8 widthPC=35 heightPC=10 fontSize=20 backgroundColor=-1:-1:-1 foregroundColor=255:255:255>
		Reviews
		</text>		
	    </mediaDisplay>
</item>

<item>
<title>GameTrailers.com Sony PSP spotlight</title>
<link>http://www.gametrailers.com/gtpsp_podcast.xml</link>
<media>http://gametrailers.mtvnimages.com/images/podcasts/PSP.jpg</media>
<mediaDisplay name="threePartsView" 
	itemBackgroundColor="0:0:0" 
	backgroundColor="0:0:0" 
	sideLeftWidthPC="0" 
	itemImageXPC="5" 
	itemXPC="20" 
	itemYPC="20" 
	itemWidthPC="65" 
	capWidthPC="70" 
	unFocusFontColor="101:101:101" 
	focusFontColor="255:255:255" 
	idleImageWidthPC="8"
	idleImageHeightPC="10">
		<idleImage><?php echo $imgpath; ?>busy0.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy1.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy2.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy3.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy4.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy5.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy6.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy7.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy8.png</idleImage>
		<idleImage><?php echo $imgpath; ?>busy9.png</idleImage>
		<backgroundDisplay>
			<image  offsetXPC=0 offsetYPC=0 widthPC=100 heightPC=100>
			<?php echo $imgpath; ?>black.jpg
			</image>  
		</backgroundDisplay>
		<image  offsetXPC=0 offsetYPC=2.8 widthPC=100 heightPC=15.6>
		<?php echo $imgpath; ?>vfeeds_title.jpg
		</image>
		<text  offsetXPC=23 offsetYPC=8 widthPC=35 heightPC=10 fontSize=20 backgroundColor=-1:-1:-1 foregroundColor=255:255:255>
		Reviews
		</text>		
	    </mediaDisplay>
</item>

</channel>

</rss>
