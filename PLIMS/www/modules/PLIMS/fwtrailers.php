<?php

function str_between($string, $start, $end){ 
	$string = " ".$string; $ini = strpos($string, $start); 
	if ($ini == 0) return ""; $ini += strlen($start); $len = strpos($string,$end,$ini) - $ini; 
	return substr($string,$ini,$len); 
}

define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

$items = '';
$xm = simplexml_load_file("http://natanielek.neostrada.pl/filmweb.xml");
if ($xm === FALSE) die('Wrong XML');

foreach ($xm->channel->item as $item) {
	$stream = '';
	$content = $item->children('content', true);
	$poster = str_between($content->encoded, 'http://1.fwcdn.pl/', '.jpg');
	$date = str_replace("-0800", "", $item->pubDate);
	
	foreach ($item->enclosure as $strumien) {
			$stream = $strumien['url'];
			$typ = $strumien['type'];
			$rozmiar = number_format($strumien['length'] / 1048576, 1);
	}
	
	if (!empty($stream))	{
		$items .= '
<item>
<title>' . $item->title . '</title>
<link>' . $stream . '</link>
<enclosure type="' . $typ . '" url="' . $stream . '"/>
<media>http://1.fwcdn.pl/' . $poster . '.jpg</media>
<desc>' . $item->description . '</desc>
<subtitle>' . $item->subtitle . '</subtitle>
<size>' . $rozmiar . ' MB</size>
<date>' . $date . '</date>
</item>
';
	}

}
?>
<rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" showHeader="no" rowCount="2" columnCount="5" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="1" itemOffsetYPC="74" sliding="yes" itemBorderColor="203:32:19" itemHeightPC="9" itemWidthPC="18" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" bottomYPC="100" sideTopHeightPC="0" mainPartColor="-1:-1:-1" sideColorBottom="-1:-1:-1" sideColorTop="-1:-1:-1" fontSize="12">

<idleImage><?php echo imgpath ?>loader_1.png</idleImage>
<idleImage><?php echo imgpath ?>loader_2.png</idleImage>
<idleImage><?php echo imgpath ?>loader_3.png</idleImage>
<idleImage><?php echo imgpath ?>loader_4.png</idleImage>
<idleImage><?php echo imgpath ?>loader_5.png</idleImage>
<idleImage><?php echo imgpath ?>loader_6.png</idleImage>
<idleImage><?php echo imgpath ?>loader_7.png</idleImage>
<idleImage><?php echo imgpath ?>loader_8.png</idleImage>

<text align="left" redraw="yes" offsetXPC="33.5" offsetYPC="5.3" widthPC="40" heightPC="8" fontSize="15" backgroundColor="0:0:0">
<script>
	getItemInfo(-1, "title");
</script>
</text>

<text align="justify" lines="11" redraw="yes" offsetXPC="33.5" offsetYPC="13" widthPC="40" heightPC="38" fontSize="12" backgroundColor="0:0:0">
<script>
	getItemInfo(-1, "desc");
</script>
</text>

<text align="left" redraw="yes" offsetXPC="33.5" offsetYPC="48" widthPC="40" heightPC="5" fontSize="11" backgroundColor="0:0:0">
<script>
	"Typ wideo: " + getItemInfo(-1, "subtitle");
</script>
</text>

<text align="left" redraw="yes" offsetXPC="33.5" offsetYPC="52" widthPC="40" heightPC="5" fontSize="11" backgroundColor="0:0:0">
<script>
	"Data premiery: " + getItemInfo(-1, "date");
</script>
</text>

<text align="left" redraw="yes" offsetXPC="33.5" offsetYPC="56" widthPC="40" heightPC="5" fontSize="11" backgroundColor="0:0:0">
<script>
	"Rozmiar: " + getItemInfo(-1, "size");
</script>
</text>

<image redraw="yes" offsetXPC="73.5" offsetYPC="7.5" widthPC="22" heightPC="53">
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
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100"><?php echo imgpath ?>fwtrailers.jpg</image>
</backgroundDisplay>
</mediaDisplay>	

<channel>

<?php echo $items; ?>

</channel>
</rss>
