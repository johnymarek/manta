<?php

function str_between($string, $start, $end){ 
	$string = " ".$string; $ini = strpos($string, $start); 
	if ($ini == 0) return ""; $ini += strlen($start); $len = strpos($string,$end,$ini) - $ini; 
	return substr($string,$ini,$len); 
}

error_reporting(0);
define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

$konfig = simplexml_load_file(dirpath . 'ustawienia.xml');
switch ($konfig->quality) {
	case 0:
		$jakosc = '480';
		break;
	case 1:
		$jakosc = '720';
		break;
	case 2:
		$jakosc = '1080';
		break;
	default:
		$jakosc = '480';
}

$items = '';
$xm = simplexml_load_file("http://feeds.hd-trailers.net/hd-trailers?format=xml");
if ($xm === FALSE) die('Wrong XML');

foreach ($xm->channel->item as $item) {
	$stream = '';
	$title = explode('(', $item->title);
	$content = $item->children('content', true);
	$poster = str_between($content->encoded, 'static.hd-trailers.net', '.jpg');
	$date = str_replace("-0800", "", $item->pubDate);
	
	foreach ($item->enclosure as $strumien) {
		$pos = strpos($strumien['url'], $jakosc);
		if ($pos !== false)	{
			$stream = $strumien['url'];
			$typ = $strumien['type'];
			$rozmiar = number_format($strumien['length'] / 1048576, 1);
		}
	}
	
	if (!empty($stream))	{
		$items .= '
<item>
<title>' . $title[0] . '</title>
<subtitle>(' . $title[1] . '</subtitle>
<link>' . $stream . '</link>
<enclosure type="' . $typ . '" url="' . $stream . '"/>
<media>http://static.hd-trailers.net' . $poster . '.jpg</media>
<desc>' . $item->description . '</desc>
<size>' . $rozmiar . ' MB</size>
<date>' . $date . '</date>
</item>
';
	}

}
?>
<rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" showHeader="no" rowCount="2" columnCount="5" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="1" itemOffsetYPC="76" sliding="yes" itemBorderColor="0:128:255" itemHeightPC="9" itemWidthPC="18" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" bottomYPC="100" sideTopHeightPC="0" mainPartColor="-1:-1:-1" sideColorBottom="-1:-1:-1" sideColorTop="-1:-1:-1" fontSize="12">

<idleImage><?php echo imgpath ?>loader_1.png</idleImage>
<idleImage><?php echo imgpath ?>loader_2.png</idleImage>
<idleImage><?php echo imgpath ?>loader_3.png</idleImage>
<idleImage><?php echo imgpath ?>loader_4.png</idleImage>
<idleImage><?php echo imgpath ?>loader_5.png</idleImage>
<idleImage><?php echo imgpath ?>loader_6.png</idleImage>
<idleImage><?php echo imgpath ?>loader_7.png</idleImage>
<idleImage><?php echo imgpath ?>loader_8.png</idleImage>

<text align="right" redraw="yes" offsetXPC="44" offsetYPC="10" widthPC="26" heightPC="4" fontSize="16" backgroundColor="0:0:0">
<script>
	getItemInfo(-1, "title");
</script>
</text>

<text align="right" redraw="yes" offsetXPC="44" offsetYPC="14" widthPC="26" heightPC="3" fontSize="11" backgroundColor="0:0:0">
<script>
	getItemInfo(-1, "subtitle");
</script>
</text>

<text align="justify" lines="11" redraw="yes" offsetXPC="44" offsetYPC="18" widthPC="26" heightPC="36" fontSize="10" backgroundColor="0:0:0">
<script>
	getItemInfo(-1, "desc");
</script>
</text>

<text align="right" redraw="yes" offsetXPC="44" offsetYPC="57" widthPC="26" heightPC="3" fontSize="9" backgroundColor="0:0:0">
<script>
	"Dnia: " + getItemInfo(-1, "date");
</script>
</text>

<text align="right" redraw="yes" offsetXPC="44" offsetYPC="60" widthPC="26" heightPC="3" fontSize="9" backgroundColor="0:0:0">
<script>
	"Rozmiar: " + getItemInfo(-1, "size");
</script>
</text>

<image redraw="yes" offsetXPC="72" offsetYPC="10" widthPC="22" heightPC="53">
<script>
	getItemInfo(-1, "media");
</script>
</image>

<itemDisplay>
<text align="center" redraw="no" offsetXPC="1" offsetYPC="1" widthPC="92" heightPC="98" fontSize="13">
<script>
	getItemInfo(-1, "title");
</script>
</text>
</itemDisplay>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100"><?php echo imgpath ?>hdtrailers.jpg</image>
</backgroundDisplay>
</mediaDisplay>	

<channel>

<?php echo $items; ?>

</channel>
</rss>