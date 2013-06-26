<?php
###############################################################
##   Original take from eboda HD for all                     ##
##   Modified                                                ##
##   http://sites.google.com/site/pavelbaco/                 ##
##   Copyright (C) 2012  Pavel Bačo   (killerman)            ##
##   modified view by Sealex                                 ##
##                                                           ##
##   Protect url, popup window by wencaS ©2013               ##
##   http://www.wencas.cz                                    ##
##                                                           ##
## This file is a part of xLiveCZ, this project doesnt have  ##
## any support from Xtreamer company and just be design for  ##
## realtek based players                                     ##
###############################################################

@include_once dirname(__FILE__)."/ytf.php";

echo '<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">
<script>
	setRefreshTime(-1);
	enablenextplay = 0;
	itemCount = getPageInfo("itemCount");
	SwitchViewer(7);
</script>

<onRefresh>
	if ( Integer( 1 + getFocusItemIndex() ) != getPageInfo("itemCount") && enablenextplay == 1 && playvideo == getFocusItemIndex()) {
		ItemFocus = getFocusItemIndex();
		setFocusItemIndex( Integer( 1 + getFocusItemIndex() ) );
		redrawDisplay();
		setRefreshTime(-1);
		"true";
	}

	if ( enablenextplay == 1 ) {
		enablenextplay = 0;
		url=getItemInfo(getFocusItemIndex(),"paurl");
		movie=getUrl(url);
		playItemUrl(movie,10);

		if ( Integer( 1 + getFocusItemIndex() ) == getPageInfo("itemCount") ) {
			enablenextplay = 0;
			setRefreshTime(-1);
		} else {
			playvideo = getFocusItemIndex();
			setRefreshTime(4000);
			enablenextplay = 1;
		}
	} else {
		setRefreshTime(-1);
		redrawDisplay();
		"true";
	}
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
  	<text  redraw="yes" align="left" offsetXPC="58" offsetYPC="53" widthPC="18" heightPC="5" fontSize="17" backgroundColor="10:105:150" foregroundColor="100:200:255">
		  <script>print(durata); durata;</script>
		</text>
  	<text  redraw="yes" align="left" offsetXPC="77" offsetYPC="53" widthPC="21" heightPC="5" fontSize="17" backgroundColor="10:105:150" foregroundColor="100:200:255">
		  <script>print(pub); pub;</script>
		</text>
  	<text  redraw="yes" align="center" offsetXPC="0" offsetYPC="90" widthPC="100" heightPC="8" fontSize="17" backgroundColor="10:105:150" foregroundColor="100:200:255">
		  <script>print(titlu); titlu;</script>
		</text>
 <text align="center" offsetXPC="58.2" offsetYPC="0" widthPC="39.68" heightPC="52" fontSize="30" backgroundColor="130:130:130" foregroundColor="0:0:0">
		  <script>sprintf("YouTube",focus-(-1));</script>
		</text>
<image redraw="yes" offsetXPC="2.5" offsetYPC="4" widthPC="8" heightPC="11">'.$DIR_SCRIPT_ROOT.'image/youtubeu.jpg</image>
		<!--<image  redraw="yes" offsetXPC=63 offsetYPC=20 widthPC=25 heightPC=30>-->
		<image  redraw="yes" offsetXPC=59 offsetYPC=1 widthPC=38 heightPC=50>
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
				} else
				if (userInput == "video_play" || userInput == "play") {
					showIdle();
					playvideo = getFocusItemIndex();
					url=getItemInfo(getFocusItemIndex(),"paurl");
					movie=getUrl(url);
					playItemUrl(movie,10);

					if( Integer(1+getFocusItemIndex()) == getPageInfo("itemCount") ) {
						enablenextplay = 0;
						setRefreshTime(-1);
					} else {
						setRefreshTime(4000);
						enablenextplay = 1;
					}
					cancelIdle();
					ret = "true";
				}
				if (userInput == "video_ffwd" || userInput == "ffwd") {
					showIdle();
					enablenextplay = 0;
					setRefreshTime(-1);
					cancelIdle();
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

$query = $_GET["query"];
if($query) {
   $queryArr = explode(',', $query);
   $page = $queryArr[0];
   $search = $queryArr[1];
}

$link="http://gdata.youtube.com/feeds/api/users/".$search."/uploads?start-index=".$page."&max-results=25&v=2";

$link=str_replace("&","&amp;",$link);
$html = file_get_contents($link);
echo '
	<channel>
		<title>Uploads by '.$search.'</title>';
if($page > 1) {
$sThisFile = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
$url = $sThisFile."?query=".($page-25).",";
if($search) {
  $url = $url.$search; 
}

echo '
<item>
<title>Předchozí strana</title>
<link>'.$url.'</link>
<annotation>Předchozí strana</annotation>
<durata></durata>
<pub></pub>
<mediaDisplay name="threePartsView"/>
</item>';
}

$videos = explode('<entry>', $html);
unset($videos[0]);
$videos = array_values($videos);
foreach($videos as $video) {
	$id = str_between($video,"<id>http://gdata.youtube.com/feeds/api/videos/","</id>");
	$title = str_between($video,"<title type='text'>","</title>");
	$descriere=str_between($video,"<content type='text'>","</content>");
	$durata = sec2hms(str_between($video,"duration='","'"));
	$data = str_between($video,"<updated>","</updated>");
	$data = str_replace("T"," ",$data);
	$data = str_replace("Z","",$data);
	$data=explode(" ",$data);
	$data=$data[0];
	$name = preg_replace('/[^A-Za-z0-9_]/','_',$title).".mp4";

	$item['title']      = $title;
	$item['id']         = $id;
	$item['name']       = $name;
	$item['annotation'] = $descriere;
	$item['durata']     = $durata;
	$item['pub']        = $data;
	echo CreateItem($item);
}
$sThisFile = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
$url = $sThisFile."?query=".($page+25).",";
if($search) { 
  $url = $url.$search; 
}

echo '
<item>
<title>Další strana</title>
<link>'.$url.'</link>
<annotation>Další strana</annotation>
<durata></durata>
<pub></pub>
<mediaDisplay name="threePartsView"/>
</item>

</channel>
</rss>';
?>