﻿<?php
###############################################################
##   Original take from HD for all 			                 ##
##   Traian Pricop  http://code.google.com/p/hdforall/       ##
##   Modified                                                ##
##   http://sites.google.com/site/pavelbaco/                 ##
##   Copyright (C) 2013  Pavel Bačo   (killerman)            ##
##                                                           ##
##                                                           ##
## This file is a part of xLiveCZ, this project doesnt have  ##
## any support from Xtreamer company and just be design for  ##
## realtek based players                                     ##
###############################################################

define('HTTP_SCRIPT_ROOT', current(explode('xLiveCZ/', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/')).'xLiveCZ/');
$DIR_SCRIPT_ROOT  = current(explode('xLiveCZ/', dirname(__FILE__).'/')).'xLiveCZ/';

echo '<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">

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
        <text align="left" offsetXPC="6" offsetYPC="15" widthPC="75" heightPC="4" fontSize="16" backgroundColor="10:105:150" foregroundColor="100:200:255">
    2= pridat do oblibenych
                </text>
        <text redraw="yes" offsetXPC="85" offsetYPC="12" widthPC="10" heightPC="6" fontSize="20" backgroundColor="10:105:150" foregroundColor="60:160:205">
                  <script>sprintf("%s / ", focus-(-1))+itemCount;</script>
                </text>
        <text  redraw="yes" align="center" offsetXPC="0" offsetYPC="90" widthPC="100" heightPC="8" fontSize="16" backgroundColor="10:105:150" foregroundColor="100:200:255">
                  <script>print(annotation); annotation;</script>
                </text>
                <image  redraw="yes" offsetXPC=60 offsetYPC=25 widthPC=30 heightPC=35>
  <script>print(img); img;</script>
                </image>

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
                                          location = getItemInfo(idx, "location");
                                          annotation  = getItemInfo(idx, "location");
                                          img = getItemInfo(idx, "image");
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
               
<onUserInput>
<script>
ret = "false";
userInput = currentUserInput();
				if (userInput == "PD" || userInput == "PG" || userInput == "pagedown" || userInput == "pageup") {
					idx = Integer(getFocusItemIndex());
					if (userInput == "PD" || userInput == "pagedown") {
  {
    idx -= -8;
    if(idx &gt;= itemCount)
      idx = itemCount-1;
  }
  else
  {
    idx -= 8;
    if(idx &lt; 0)
      idx = 0;
  }

  print("new idx: "+idx);
  setFocusItemIndex(idx);
        setItemFocus(0);

  "true";
}
else if (userInput == "two" || userInput == "2")

{
 showIdle();
 url="'.HTTP_SCRIPT_ROOT.'category/youtube/yt_live_add.php?mod=add*" + getItemInfo(getFocusItemIndex(),"link1") + "*" + getItemInfo(getFocusItemIndex(),"title1");
 dummy=getUrl(url);
 cancelIdle();
 redrawDisplay();
 ret="true";
}
redrawDisplay();
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
$query = $_GET["file"];
if($query) {
   $queryArr = explode(',', $query);
   $ch_id = urldecode($queryArr[0]);
   $tit=urldecode($queryArr[1]);
   $page=$queryArr[2];
}
echo "<channel>
	<title>".$tit."</title>";
	
if($page > 1) {
$sThisFile = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
$url = $sThisFile."?file=".$ch_id.",".urlencode($tit).",".($page-1);

echo '
<item>
<title>Předchozí strana</title>
<link>'.$url.'</link>
<annotation>Předchozí strana</annotation>
<durata></durata>
<pub></pub>
<image>'.$DIR_SCRIPT_ROOT.'image/leva.jpg</image>
<mediaDisplay name="threePartsView"/>
</item>';
}

function str_between($string, $start, $end){ 
	$string = " ".$string; $ini = strpos($string,$start); 
	if ($ini == 0) return ""; $ini += strlen($start); $len = strpos($string,$end,$ini) - $ini; 
	return substr($string,$ini,$len); 
}
$l="http://www.youtube.com/c4_browse_ajax?action_load_more_videos=1&channel_id=".$ch_id."&sort=p&live_view=500&view=19&paging=".$page."&flow=grid";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $l);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
  $h = curl_exec($ch);
  curl_close($ch);
  $r= json_decode($h, true);
  $html=$r["content_html"];
$videos = explode('channels-content-item', $html);

unset($videos[0]);
$videos = array_values($videos);

foreach($videos as $video) {
    $t1 = explode('href="', $video);
    $t2 = explode('"', $t1[1]);
    $link = $t2[0];

    $t1 = explode('src="', $video);
    $t2 = explode('"', $t1[1]);
    $image = $t2[0];
    //http://i3.ytimg.com/i/2MGuhIaOP6YLpUx106kTQw/mq1.jpg?v=913bde
    if (strpos($image,"http") === false)
     $image="http:".$image;
    $image=str_replace("https","http",$image);
    $t1=explode('href="',$video);
    $t2=explode('>',$t1[2]);
    $t3=explode('<',$t2[1]);
    $title = trim($t3[0]);

    $t1=explode('content-item-title',$video);
    $t2=explode('>',$t1[1]);
    $t3=explode('<',$t2[1]);
    $title=trim($t3[0]);

	$rand=mt_rand(4096,0xffff);
	$linktofinal = HTTP_SCRIPT_ROOT.'category/youtube/ytl.php?file='.$link;
    echo '
    <item>
    <title>'.$title.'</title>
    <onClick>
	<script>
    showIdle();
    url="'.$linktofinal.'";
    movie=getUrl(url);
    cancelIdle();
    playItemUrl(movie,10);
	</script>
    </onClick>
	<location>'.$title.'</location>
	<title1>'.urlencode($title).'</title1>
    <link1>'.urlencode($link).'</link1>
    <image>'.$image.'</image>
    <media:thumbnail url="'.$image.'" />
    <mediaDisplay name="threePartsView"/>
    </item>
    ';
}

$sThisFile = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
$url = $sThisFile."?file=".$ch_id.",".urlencode($tit).",".($page+1);

echo '
<item>
<title>Další strana</title>
<link>'.$url.'</link>
<annotation>Další strana</annotation>
<durata></durata>
<pub></pub>
<image>'.$DIR_SCRIPT_ROOT.'image/prava.jpg</image>
<mediaDisplay name="threePartsView"/>
</item>
</channel>
</rss>';
?>
