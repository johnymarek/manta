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

	$dirpath = dirname($_SERVER["SCRIPT_FILENAME"]) . '/';
	$webpath = 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/';
	$imgpath = $dirpath . 'image/';

   $file2 = "ustawienia.xml";
   IF (file_exists($file2)==false) {
   $fp = fopen($file2, "r+");
   $line = '<Ustawienia>
	<quality>1</quality>
	<nritems>15</nritems>
	<weeb_login></weeb_login>
	<weeb_pass></weeb_pass>
	<weeb_hd>1</weeb_hd>
</Ustawienia>';
 fwrite(fopen($file2, 'w'), $line);
   }
   
   $weebtv      = simplexml_load_file("ustawienia.xml");
   $weebtv_username = $weebtv->weeb_login;
   $weebtv_password = $weebtv->weeb_pass;
?>
<!--Realtek chip players - killerman - without any support Xtreamer-->
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/">
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

 	<text align="center" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="20" fontSize="30" backgroundColor="10:105:150" foregroundColor="100:200:255">Wprowadzanie danych logowania</text>
  <text redraw="yes" align="left" offsetXPC="58" offsetYPC="25" widthPC="40" heightPC="8" fontSize="20" backgroundColor="-1:-1:-1" foregroundColor="100:200:255">
    <?php echo $weebtv_username; ?>
	</text>
  	<text redraw="yes" align="left" offsetXPC="58" offsetYPC="33" widthPC="40" heightPC="8" fontSize="20" backgroundColor="-1:-1:-1" foregroundColor="100:200:255">
    <?php echo $weebtv_password; ?>
	</text>
<idleImage><?php echo $imgpath; ?>loader_1.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_2.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_3.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_4.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_5.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_6.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_7.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_8.png</idleImage>>

		<itemDisplay>
			<text align="left" lines="1" offsetXPC=20 offsetYPC=0 widthPC=50 heightPC=100>
				<script>
					idx = getQueryItemIndex();
					focus = getFocusItemIndex();
					if(focus==idx) 
					{
					  location = getItemInfo(idx, "location");
					  img = getItemInfo(idx,"image");
					  annotation = getItemInfo(idx, "annotation");
					  durata = getItemInfo(idx, "durata");
					  pub = getItemInfo(idx, "pub");
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
<idleImage><?php echo $imgpath; ?>loader_1.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_2.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_3.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_4.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_5.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_6.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_7.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_8.png</idleImage>
		</mediaDisplay>
	</item_template>
  <channel>
    <title> </title>
    <item>
      <title>   Login dla WeebTV</title>
      <link>rss_command://search</link>
      <search url="<?php echo $webpath; ?>login.php?query=ustawienia.xml,username,%s" />
    </item>
    <item>
      <title>   Hasło dla WeebTV</title>
      <link>rss_command://search</link>
      <search url="<?php echo $webpath; ?>login.php?query=ustawienia.xml,passwd,%s" />
    </item>


    <item>
      <title>Powrót</title>
<mediaDisplay name="photoView" rowCount="1" columnCount="11" drawItemText="no" showDefaultInfo="no" showHeader="no" itemOffsetXPC="1" itemOffsetYPC="78" sliding="yes" itemBorderColor="255:255:255" itemHeightPC="14" itemWidthPC="8" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" sideColorBottom="0:0:0" sideColorTop="-1:-1:-1" bottomYPC="90">
<idleImage><?php echo $imgpath; ?>loader_1.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_2.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_3.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_4.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_5.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_6.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_7.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_8.png</idleImage>
	</mediaDisplay>
	<link><?php echo $webpath; ?>weeb.php</link>
    </item>
  </channel>
</rss>
