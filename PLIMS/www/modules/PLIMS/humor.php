<?php

define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

function generateIndexHeader()	{
echo <<<HEA
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" rowCount="1" columnCount="4" showHeader="no" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="5" itemOffsetYPC="46" itemHeightPC="12" itemWidthPC="17" backgroundColor="0:0:0" idleImageXPC="82" idleImageYPC="80" idleImageWidthPC="4.65" idleImageHeightPC="8.25" sideColorBottom="0:0:0" sideColorTop="0:0:0" sideColorLeft="0:0:0" sideColorRight="0:0:0" mainPartColor="0:0:0">
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

<text redraw="yes" offsetXPC="50" offsetYPC="85" widthPC="10" heightPC="5" fontSize="14" backgroundColor="0:0:0">
<script>
Add(1, getFocusItemIndex()) + "/4";
</script>
</text>

<itemDisplay> 
<image offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">
<script>
	if (getDrawingItemState() == "focus")
	{
		print("' . imgpath . '" + getItemInfo(-1, "media") + ".jpg");
	}
	else
	{
		print("' . imgpath . '" + getItemInfo(-1, "media") + "_off.jpg");
	}
</script>
</image>
</itemDisplay>

<backgroundDisplay>
<image offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'humor.jpg</image>
</backgroundDisplay>
</mediaDisplay>		
				
<channel>

		<item>
            <title>Bash</title>
            <link>' . webpath . 'humor.php?category=bash</link>
            <media>logo-bash</media>
		</item>
		
		<item>
            <title>JoeMonster</title>
            <link>' . webpath . 'humor.php?category=joe</link>
            <media>logo-joe</media>
		</item>
		
		<item>
            <title>Kretyn</title>
            <link>' . webpath . 'humor.php?category=kretyn</link>
            <media>logo-kretyn</media>
		</item>
		
		<item>
            <title>Mleczko</title>
            <link>' . webpath . 'humor.php?mleczko=yes</link>
            <media>logo-mleczko</media>
		</item>

';
}

function generateMleczko()	{
	$videos = '';
	$xml = simplexml_load_file("http://tvwidget.pl/xml/mleczko.xml");
	$go = $xml->channel->item;

	foreach ($go as $obrazek) 
	{
		$videos .= '
<item>
<title>' . $obrazek->title .'</title>
<media>' . $obrazek->enclosure['url'] . '</media>
</item>
';
	}
	echo '<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" showHeader="no" rowCount="2" columnCount="6" columnPerPage="6" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="4" itemOffsetYPC="79" sliding="yes" itemBorderColor="246:174:74" itemHeightPC="8" itemWidthPC="14" itemBackgroundColor="0:0:0" idleImageXPC="90" idleImageYPC="5" idleImageWidthPC="5" idleImageHeightPC="8" backgroundColor="0:0:0" bottomYPC="100" sideTopHeightPC="0" mainPartColor="-1:-1:-1" sideColorBottom="-1:-1:-1" sideColorTop="-1:-1:-1" forceFocusOnItem="yes" itemCornerRounding="yes">

<image redraw="yes" offsetXPC="14" offsetYPC="5" widthPC="74" heightPC="74">
<script>
	getItemInfo(-1, "media");
</script>
</image>

<itemDisplay>
<text redraw="no" offsetXPC="2" offsetYPC="5" widthPC="96" heightPC="90" fontSize="14">
<script>
	getItemInfo(-1, "title");
</script>

</text>
</itemDisplay>

</mediaDisplay>

<channel>

' . $videos;
}


function generateSeriesHeader($cat)	{

switch ($cat) {
case "bash":	
	$hum = 'http://bash.org.pl/rss';
	break;
case "joe":		
	$hum = 'http://www.joemonster.org/backend.php?channel=krotkie';
	break;
case "kretyn":	
	$hum = 'http://www.kretyn.com/kretyn.feed';
	break;
}

$xm = simplexml_load_file($hum);
if ($xm === FALSE) die('Wrong XML');

$idx = 0;
$videos = '';

foreach ($xm->channel->item as $item) {
	$idx++;
	$tytul = $item->title;
	if (empty($item->pubDate))
		$kategoria = '-';
	else
		$kategoria = $item->pubDate;
	$opis = $item->description;

	$videos .= '
<item>
<title><![CDATA[' . $tytul . ']]></title>
<link>' . webpath . 'humor.php</link>
<idx>' . $idx . '</idx>
<opis><![CDATA[' .  htmlspecialchars_decode(strip_tags($opis)) . ']]></opis>
<kategoria>' . $kategoria . '</kategoria>
<canEnterItem>false</canEnterItem>
</item>
';
}

echo <<<SER
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="onePartView" showHeader="no" drawItemText="yes" showDefaultInfo="no" itemXPC="8" itemYPC="14" sliding="yes" itemPerPage="11" itemBorderColor="255:255:255" itemImageHeightPC="0" itemImageWidthPC="0" itemHeightPC="6.6" itemWidthPC="30" itemBackgroundColor="0:0:0" idleImageXPC="86" idleImageYPC="64" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" sideColorBottom="0:0:0" sideColorTop="0:0:0" sideColorLeft="0:0:0" sideColorRight="0:0:0" mainPartColor="0:0:0">
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

<text redraw="yes" offsetXPC="8" offsetYPC="85" widthPC="50" heightPC="5" fontSize="14" backgroundColor="0:0:0" align="center">
<script>
	getItemInfo(-1, "idx") + "/' . $idx . '";
</script>
</text>

<text redraw="yes" offsetXPC="42" offsetYPC="14" widthPC="25" heightPC="4" fontSize="13" backgroundColor="0:0:0">
<script>
	"Data publikacji: " + getItemInfo(-1, "kategoria");
</script>
</text>

<text redraw="yes" offsetXPC="42" offsetYPC="22" widthPC="50" heightPC="65" fontSize="13" lines="16" backgroundColor="0:0:0">
<script>
	getItemInfo(-1, "opis");
</script>
</text>
</mediaDisplay>

<channel>
' . 
$videos
;
}

function generateFooter()	{
echo <<<FOO
</channel>
</rss>
FOO;
}

if (isset($_GET['category'])) {
	generateSeriesHeader($_GET['category']);
	generateFooter();
}
elseif(isset($_GET['mleczko']))	{
	generateMleczko();
	generateFooter();	
}
else	{
	generateIndexHeader();
	generateFooter();
}
?>
