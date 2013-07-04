<?php

define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

function generateIndexHeader()	{
echo <<<HEA
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="onePartView" itemImageXPC="42" itemImageYPC="15" itemImageHeightPC="7" itemImageWidthPC="7" itemXPC="50" itemYPC="14" itemHeightPC="9" itemWidthPC="42" itemPerPage="8" backgroundColor="0:0:0" showHeader="no" idleImageXPC="82" idleImageYPC="80" idleImageWidthPC="4.65" idleImageHeightPC="8.25" sideColorBottom="0:0:0" sideColorTop="0:0:0" sideColorLeft="0:0:0" sideColorRight="0:0:0" mainPartColor="0:0:0" showDefaultInfo="no">
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

<text redraw="yes" offsetXPC="50" offsetYPC="85" widthPC="40" heightPC="5" fontSize="14" backgroundColor="0:0:0">
<script>
Add(1, getFocusItemIndex()) + "/3";
</script>
</text>
</mediaDisplay>		
				
<channel>

		<item>
            <title>Bash</title>
            <link>' . webpath . 'humor.php?category=bash</link>
            <media:thumbnail url="http://m.ocdn.eu/_m/98afff2d875a62c87447c4af9a915da6,0,1.jpg" width="120" height="90" />
		</item>
		
		<item>
            <title>JoeMonster</title>
            <link>' . webpath . 'humor.php?category=joe</link>
            <media:thumbnail url="http://sps3.s3.amazonaws.com/uploads/user/photo/8131/small_logo2.jpg" width="120" height="90" />
		</item>
		
		<item>
            <title>Kretyn</title>
            <link>' . webpath . 'humor.php?category=kretyn</link>
            <media:thumbnail url="http://www.kretyn.com/img/logo.png" width="120" height="90" />
		</item>

';
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
else	{
	generateIndexHeader();
	generateFooter();
}
?>
