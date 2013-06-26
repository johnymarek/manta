<?php
// ###############################################################
// ##                                                           ##
// ##   http://sites.google.com/site/pavelbaco/                 ##
// ##   Copyright (C) 2012  Pavel Bačo   (killerman)            ##
// ##                                                           ##
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

<onEnter>

    optionsPath = "<?php echo $DIR_SCRIPT_ROOT; ?>category/youtube/yt.dat";
    optionsArray = readStringFromFile(optionsPath);
    username = getStringArrayAt(optionsArray, 0);
   
</onEnter>	

<mediaDisplay name="photoView"
	rowCount="2"
	columnCount="2"
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
<image redraw="no" offsetXPC="3" offsetYPC="3" widthPC="10" heightPC="14"><?php echo $DIR_SCRIPT_ROOT; ?>image/osobni.png</image>
<text align="center" offsetXPC="0" offsetYPC="-2" widthPC="100" heightPC="20" fontSize="30" backgroundColor="-1:-1:-1" foregroundColor="250:250:250">
Osobní Youtube</text>
</mediaDisplay>
	
<channel>
	<title>YouTube</title>


<item>
<title>Wprowadź swój login YouTube:</title>
	<onClick>
    				keyword = getInput();
    				if (keyword != null)
    				{
    				  username = keyword;
              arr = pushBackStringArray(arr, username);
              print("arr=",arr);
              writeStringToFile(optionsPath, arr);
            }
            redrawDisplay();
    
   </onClick>
	<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 0)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/ypersj.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/ypersju.jpg"; }
     }
    </script>
	
  </media:thumbnail>
</item>

<item>
<title>Ulubione</title>
<link><script>"<?php echo $HTTP_SCRIPT_ROOT; ?>" + "xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/users/"+username+"/favorites?v=2,Me%20oblibene";</script></link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 1)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/ypersobl.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/ypersoblu.jpg"; }
     }
	 </script>
  </media:thumbnail>
</item>

<item>
<title>Polecane</title>
<link><script>"<?php echo $HTTP_SCRIPT_ROOT; ?>" + "xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/users/"+username+"/recommendations?v=2,Mnou%20doporucene";</script></link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 2)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/ypersdop.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/ypersdopu.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>

<item>
<title>Moje filmy</title>
<link><script>"<?php echo $HTTP_SCRIPT_ROOT; ?>" + "xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/users/"+username+"/uploads?v=2,Ma%20videa";</script></link>
<media:thumbnail width="200" height="171">
    <script>
     if (getQueryItemIndex() == 3)
     {
          state=getDrawingItemState();
          if (state == "focus") {"<?php echo $DIR_SCRIPT_ROOT; ?>image/ypersvid.jpg"; }
          else					{"<?php echo $DIR_SCRIPT_ROOT; ?>image/ypersvidu.jpg"; }
     }
    </script>
  </media:thumbnail>
</item>
</channel>
</rss>

