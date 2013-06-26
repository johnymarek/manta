<?php

define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

function generateIndex()	{
echo <<<HEA
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<onExit>                
  playItemURL(-1, 1);
</onExit>

<mediaDisplay name="photoView" showHeader="no" rowCount="1" columnCount="5" columnPerPage="5" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="1" itemOffsetYPC="82" sliding="no" itemBorderColor="0:128:255" itemHeightPC="9" itemWidthPC="18.5" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" bottomYPC="100" sideTopHeightPC="0" mainPartColor="-1:-1:-1" sideColorBottom="-1:-1:-1" sideColorTop="-1:-1:-1">
HEA;

echo '
<idleImage>' . imgpath . 'loader_1.png</idleImage>
<idleImage>' . imgpath . 'loader_2.png</idleImage>
<idleImage>' . imgpath . 'loader_3.png</idleImage>
<idleImage>' . imgpath . 'loader_4.png</idleImage>
<idleImage>' . imgpath . 'loader_5.png</idleImage>
<idleImage>' . imgpath . 'loader_6.png</idleImage>
<idleImage>' . imgpath . 'loader_7.png</idleImage>
<idleImage>' . imgpath . 'loader_8.png</idleImage>

<itemDisplay>
<text align="center" redraw="no" offsetXPC="1" offsetYPC="1" widthPC="92" heightPC="98" fontSize="14" >
<script>
	getItemInfo(-1, "title");
</script>
</text>
</itemDisplay>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'wp1.jpg</image>
</backgroundDisplay>	
</mediaDisplay>
				
<channel>
';
}


function generateIndexHeader()	{
$kanaly = array('Polecane', 'Kanały', 'Serie', 'Tydzień', 'Miesiąc');
$skroty = array('recommended', 'channellist', 'serieslist', 'week', 'month');
 
for($x = 0; $x < 5; $x++) {
	echo '
<item>
<title>' . $kanaly[$x] . '</title>
<link>' . webpath . 'wp.php?items=' . $skroty[$x] . '</link>
</item>
';
	}
}


function showItems($it)	{
echo <<<SER
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" showHeader="no" rowCount="2" columnCount="4" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="1" itemOffsetYPC="76" sliding="yes" itemBorderColor="0:128:255" itemHeightPC="9" itemWidthPC="23" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" bottomYPC="100" sideTopHeightPC="0" mainPartColor="-1:-1:-1" sideColorBottom="-1:-1:-1" sideColorTop="-1:-1:-1" fontSize="12">
SER;

echo '
<idleImage>' . imgpath . 'loader_1.png</idleImage>
<idleImage>' . imgpath . 'loader_2.png</idleImage>
<idleImage>' . imgpath . 'loader_3.png</idleImage>
<idleImage>' . imgpath . 'loader_4.png</idleImage>
<idleImage>' . imgpath . 'loader_5.png</idleImage>
<idleImage>' . imgpath . 'loader_6.png</idleImage>
<idleImage>' . imgpath . 'loader_7.png</idleImage>
<idleImage>' . imgpath . 'loader_8.png</idleImage>

<text align="left" lines="2" redraw="yes" offsetXPC="64" offsetYPC="9.5" widthPC="32" heightPC="8" fontSize="14" backgroundColor="0:0:0">
<script>
       getItemInfo(-1, "title");
</script>
</text>

<text align="justify" lines="11" redraw="yes" offsetXPC="64" offsetYPC="19.5" widthPC="32" heightPC="35" fontSize="12" backgroundColor="0:0:0">
<script>
	getItemInfo(-1, "desc");
</script>
</text>

<text align="left" redraw="yes" offsetXPC="64" offsetYPC="59" widthPC="24" heightPC="4" fontSize="12" backgroundColor="0:0:0">
<script>
	"Czas trwania: " + getItemInfo(-1, "long");
</script>
</text>

<text align="left" redraw="yes" offsetXPC="64" offsetYPC="63" widthPC="24" heightPC="4" fontSize="12" backgroundColor="0:0:0">
<script>
	"Publikacja: " + getItemInfo(-1, "date");
</script>
</text>

<image redraw="yes" offsetXPC="6" offsetYPC="10" widthPC="56" heightPC="56">
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
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'wp2.jpg</image>
</backgroundDisplay>	
</mediaDisplay>

<channel>
';
	

	if ($it == 'recommended')	{
		$xml_link = 'http://wp.tv/app/recommended?';
	}
	elseif ($it == 'channellist') 	{
		$xml_link = 'http://wp.tv/app/channellist?';
	}
	elseif ($it == 'serieslist') 	{
		$xml_link = 'http://wp.tv/app/serieslist?';
	}
	elseif ($it == 'week') 	{
		$xml_link = 'http://wp.tv/app/toprated?type=week';
	}
	elseif ($it == 'month') 	{
		$xml_link = 'http://wp.tv/app/toprated?type=month';
	}
	else	{
		$xml_link = 'http://wp.tv/app/cliplist?catid=' . $it;
	}
	
	$xml = file_get_contents($xml_link);
	$xm = json_decode($xml);
	//print_r($xm);
	
	$pos = strpos($xml, 'clipUrl');
	if ($pos !== false) {
	foreach ($xm->{'clips'} as $item) {
		$stream = str_replace('&', '&amp;', $item->clipUrl);
		echo '
<item>
<title>' . $item->title . '</title>
<link>' . $stream . '</link>
<enclosure type="video/mp4" url="' . $stream . '"/>
<media>' . $item->thumbnail . '</media>
<desc>' . $item->description . '</desc>
<long>' . gmdate("H:i:s", $item->length) . '</long>
<date>' . $item->date . '</date>
</item>
';
	};
	}
	
	else	{
		foreach ($xm as $item) {
		echo '
<item>
<title>' . $item->name. '</title>
<link>' . webpath . 'wp.php?items=' . $item->catId . '</link>
<media>' . $item->logo . '</media>
<desc>' . $item->description . '</desc>
<long>-</long>
<date>-</date>
</item>
';
	};
	}
	
}

function generateFooter()	{
echo <<<FOO
</channel>
</rss>
FOO;
}

if (isset($_GET['items'])) {
	showItems($_GET['items']);
	generateFooter();
}
else	{
	generateIndex();
	generateIndexHeader();
	generateFooter();
}
?>