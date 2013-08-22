<?php

error_reporting(0);
define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

define("MAINURL", 'http://api.brightcove.com/services/library?');
define("TOKEN", 'JHmtFzwbUevUituBImybmBNA490FN0M6gfvVU9Ccv30.');
define("PLFILTER", '&playlist_fields=id,name,thumbnailURL,filterTags,videoIds');
define("VFILTER", '&playlist_fields=id,name,thumbnailURL,filterTags,videos&video_fields=id,name,shortDescription,videoStillURL,videoFullLength');
define("MAINQUERY", "token=" . TOKEN . "&get_item_count=true&media_delivery=http&page_size=1000&page_number=0");

define("POLQUERY", MAINURL . MAINQUERY . VFILTER . "&command=find_playlists_for_player_id&player_id=1423840913001");
define("PLAYQUERY", MAINURL . MAINQUERY . VFILTER . "&command=find_all_playlists");
define("VQUERY", MAINURL . MAINQUERY . VFILTER . "&command=find_playlist_by_id&playlist_id=");


function generateIndexHeader()	{
echo <<<HEA
<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">
<mediaDisplay name="photoView" rowCount="1" columnCount="5" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="4" itemOffsetYPC="81" sliding="yes"
itemWidthPC="17.4" itemHeightPC="10" itemBorderColor="0:0:0" idleImageXPC="90" idleImageYPC="5" idleImageWidthPC="5" idleImageHeightPC="8" bottomYPC="88" itemBackgroundColor="0:0:0" backgroundColor="-1:-1:-1" sideColorBottom="-1:-1:-1" sideColorTop="-1:-1:-1">
HEA;

echo '
<idleImage>' . imgpath . 'hdd_on.png</idleImage>
<idleImage>' . imgpath . 'hdd_off.png</idleImage>

<itemDisplay>
<image redraw="yes" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100" >
<script>
	if (getDrawingItemState() == "focus")	{
		"' . imgpath . 'item_on.png";
	}
	else	{
		"' . imgpath . 'item_off.png";
	}
</script>
</image>

<text redraw="no" backgroundColor="-1:-1:-1" foregroundColor="255:255:255" offsetXPC="5" offsetYPC="5" widthPC="90" heightPC="90" fontSize="16" align="center">
<script>
	getItemInfo(-1,"title");
</script>
</text>
</itemDisplay>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'axn.jpg</image>
</backgroundDisplay>
</mediaDisplay>

<channel>

<item>
<title>Polskie</title>
<link>' . webpath . 'axn.php?cat=polecane</link>
</item>

<item>
<title>Wszystkie</title>
<link>' . webpath . 'axn.php?cat=playlisty</link>
</item>
';
}


function generateSeriesHeader($cat)	{
	$items = '';
	if ($cat == 'playlisty')	
	{
		$lin = PLAYQUERY;
	}
	else
	{
		$lin = POLQUERY;
	}
	//echo $lin;
	$xm = file_get_contents($lin);
	$jso=json_decode($xm);
	
	foreach($jso->items as $jsit) {
		foreach($jsit->videos as $item) {
			//print_r($item);
			$axlink = $item->videoFullLength->url;
			if (!empty($axlink))	{
				$czas = floor($item->videoFullLength->videoDuration / 1000);
				$items .= '
<item>
<title><![CDATA[' . $item->name . ']]></title>
<link>' . $axlink . '</link>
<enclosure type="video/mp4" url="' . $axlink . '"/>
<desc><![CDATA[' . $item->shortDescription . ']]></desc>
<media>' . $item->videoStillURL . '</media>
<dura>' . gmdate("H:i:s", $czas) . '</dura>
</item>
';
			}
			$axlink = '';
		}
	}

echo <<<SER
<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">
<mediaDisplay name="photoView" showHeader="no" rowCount="1" columnCount="4" drawItemText="no" sideColorBottom="-1:-1:-1" sideColorTop="-1:-1:-1"
itemOffsetXPC="4" itemOffsetYPC="75" itemWidthPC="22" itemHeightPC="18" backgroundColor="0:0:0" itemBorderColor="255:255:255" sliding="yes" idleImageXPC="90" idleImageYPC="5" idleImageWidthPC="5" idleImageHeightPC="8" bottomYPC="100">
SER;

echo '
<idleImage>' . imgpath . 'hdd_on.png</idleImage>
<idleImage>' . imgpath . 'hdd_off.png</idleImage>

<text redraw="yes" backgroundColor="0:0:0" foregroundColor="245:254:1" offsetXPC="45" offsetYPC="12" widthPC="48" heightPC="6" fontSize="16" align="left">
<script>
	getItemInfo("title");
</script>
</text>

<text redraw="yes" backgroundColor="0:0:0" foregroundColor="255:255:255" offsetXPC="45" offsetYPC="18" widthPC="48" heightPC="4" fontSize="10" align="left">
<script>
	"Czas trwania: " + getItemInfo("dura");
</script>
</text>

<text redraw="yes" backgroundColor="0:0:0" foregroundColor="255:255:255" offsetXPC="45" offsetYPC="26" widthPC="48" heightPC="34" fontSize="12" lines="10" align="justify">
<script>
	getItemInfo("desc");
</script>
</text>

<itemDisplay>
<image redraw="no" offsetXPC="1" offsetYPC="1" widthPC="98" heightPC="98">
<script>
	getItemInfo(-1, "media");
</script>
</image>
</itemDisplay>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'axn_cat.jpg</image>
</backgroundDisplay>

</mediaDisplay>

<channel>
';

echo $items;
}


function generateFooter()	{
echo <<<FOO
</channel>
</rss>
FOO;
}

if (isset($_GET['cat'])) {
	generateSeriesHeader($_GET['cat']);
	generateFooter();
}
else	{
	generateIndexHeader();
	generateFooter();
}
?>
