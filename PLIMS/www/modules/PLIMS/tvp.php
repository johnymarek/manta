<?php

define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

$normalizeChars = array(
            '&Aacute;'=>'A', '&Agrave;'=>'A', '&Acirc;'=>'A', '&Atilde;'=>'A', '&Aring;'=>'A', '&Auml;'=>'A', '&AElig;'=>'AE', '&Ccedil;'=>'C',
            '&Eacute;'=>'E', '&Egrave;'=>'E', '&Ecirc;'=>'E', '&Euml;'=>'E', '&Iacute;'=>'I', '&Igrave;'=>'I', '&Icirc;'=>'I', '&Iuml;'=>'I', '&ETH;'=>'Eth',
            '&Ntilde;'=>'N', '&Oacute;'=>'O', '&Ograve;'=>'O', '&Ocirc;'=>'O', '&Otilde;'=>'O', '&Ouml;'=>'O', '&Oslash;'=>'O',
            '&Uacute;'=>'U', '&Ugrave;'=>'U', '&Ucirc;'=>'U', '&Uuml;'=>'U', '&Yacute;'=>'Y',
   
            '&aacute;'=>'a', '&agrave;'=>'a', '&acirc;'=>'a', '&atilde;'=>'a', '&aring;'=>'a', '&auml;'=>'a', '&aelig;'=>'ae', '&ccedil;'=>'c',
            '&eacute;'=>'e', '&egrave;'=>'e', '&ecirc;'=>'e', '&euml;'=>'e', '&iacute;'=>'i', '&igrave;'=>'i', '&icirc;'=>'i', '&iuml;'=>'i', '&eth;'=>'eth',
            '&ntilde;'=>'n', '&oacute;'=>'ó', '&ograve;'=>'o', '&ocirc;'=>'o', '&otilde;'=>'o', '&ouml;'=>'o', '&oslash;'=>'o',
            '&uacute;'=>'u', '&ugrave;'=>'u', '&ucirc;'=>'u', '&uuml;'=>'u', '&yacute;'=>'y',
           
            '&szlig;'=>'sz', '&thorn;'=>'thorn', '&yuml;'=>'y'
        );

function generateIndexHeader()	{
echo <<<HEA
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" showHeader="no" rowCount="2" columnCount="4" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="1" itemOffsetYPC="76" sliding="yes" itemBorderColor="0:128:255" itemHeightPC="9" itemWidthPC="23" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" bottomYPC="100" sideTopHeightPC="0" mainPartColor="-1:-1:-1" sideColorBottom="-1:-1:-1" sideColorTop="-1:-1:-1">
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
<text align="center" redraw="no" offsetXPC="1" offsetYPC="1" widthPC="92" heightPC="98" fontSize="13">
<script>
	getItemInfo(-1, "title");
</script>
</text>
</itemDisplay>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'tvp-index.jpg</image>
</backgroundDisplay>
</mediaDisplay>		
				
<channel>

<item>
<title>Seriale obyczajowe</title>
<link>' . webpath . 'tvp.php?menu=1649986</link>
</item>

<item>
<title>Seriale komediowe</title>
<link>' . webpath . 'tvp.php?menu=1649945</link>
</item>

<item>
<title>Seriale sensacyjne</title>
<link>' . webpath . 'tvp.php?menu=1649961</link>
</item>

<item>
<title>Seriale archiwalne</title>
<link>' . webpath . 'tvp.php?menu=1649991</link>
</item>

<item>
<title>Kultura</title>
<link>' . webpath . 'tvp.php?menu=4934965</link>
</item>

<item>
<title>Rozrywka</title>
<link>' . webpath . 'tvp.php?menu=8525989</link>
</item>

<item>
<title>Kulinaria</title>
<link>' . webpath . 'tvp.php?menu=4934960</link>
</item>

<item>
<title>Dla dzieci</title>
<link>' . webpath . 'tvp.php?menu=4934932</link>
</item>

<item>
<title>Podróże</title>
<link>' . webpath . 'tvp.php?menu=4934958</link>
</item>

<item>
<title>Styl życia</title>
<link>' . webpath . 'tvp.php?menu=4934957</link>
</item>

<item>
<title>Publicystyka</title>
<link>' . webpath . 'tvp.php?menu=4934956</link>
</item>

<item>
<title>Zdrowie</title>
<link>' . webpath . 'tvp.php?menu=4934954</link>
</item>

<item>
<title>Wiedza</title>
<link>' . webpath . 'tvp.php?menu=4934951</link>
</item>

<item>
<title>Historia</title>
<link>' . webpath . 'tvp.php?menu=6718966</link>
</item>

<item>
<title>Religia</title>
<link>' . webpath . 'tvp.php?menu=6665174</link>
</item>

<item>
<title>Dokument Polityka</title>
<link>' . webpath . 'tvp.php?menu=4191992</link>
</item>

<item>
<title>Dokument Religia </title>
<link>' . webpath . 'tvp.php?menu=4191990</link>
</item>

<item>
<title>Dokument Sztuka</title>
<link>' . webpath . 'tvp.php?menu=4191988</link>
</item>

<item>
<title>Dokument Historia</title>
<link>' . webpath . 'tvp.php?menu=4191987</link>
</item>

<item>
<title>Dokument Ludzie</title>
<link>' . webpath . 'tvp.php?menu=4191950</link>
</item>

<item>
<title>Dokument Społeczeństwo</title>
<link>' . webpath . 'tvp.php?menu=4191977</link>
</item>

<item>
<title>Archiwizja</title>
<link>' . webpath . 'tvp.php?menu=4192566</link>
</item>

<item>
<title>Tak to Było</title>
<link>' . webpath . 'tvp.php?menu=4192537</link>
</item>

<item>
<title>Rocznice i wydarzenia</title>
<link>' . webpath . 'tvp.php?menu=4192565</link>
</item>

<item>
<title>Filmy za darmo</title>
<link>' . webpath . 'tvp.php?menu=4190002</link>
</item>

<item>
<title>Rok w ogrodzie</title>
<link>' . webpath . 'tvp.php?category=1358</link>
</item>

<item>
<title>Przegapiłeś</title>
<link>' . webpath . 'tvp.php?category=1885</link>
</item>

<item>
<title>Najcześciej oglądane</title>
<link>' . webpath . 'tvp.php?category=929547</link>
</item>
 
<item>
<title>Teleexpress</title>
<link>' . webpath . 'tvp.php?category=8811603</link>
</item>

<item>
<title>Wiadomości</title>
<link>' . webpath . 'tvp.php?category=7405772</link>
</item>

<item>
<title>Panorama</title>
<link>' . webpath . 'tvp.php?category=5513139</link>
</item>

<item>
<title>Kronika</title>
<link>' . webpath . 'tvp.php?category=1277349</link>
</item>

<item>
<title>Kabarety</title>
<link>' . webpath . 'tvp.php?category=883</link>
</item>
';
}


function generateSeriesHeader()	{
echo <<<SER
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" rowCount="3" columnCount="3" drawItemText="no" showDefaultInfo="yes" showHeader="no" itemOffsetXPC="10" itemOffsetYPC="11" sliding="yes" itemBorderColor="255:255:255" itemHeightPC="23" itemWidthPC="25" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" sideColorBottom="0:0:0" sideColorTop="-1:-1:-1" bottomYPC="90">
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

<itemDisplay>
<image redraw="no" offsetXPC="1" offsetYPC="1" widthPC="98" heightPC="98">
<script>
	getItemInfo(-1, "media");
</script>
</image>
</itemDisplay>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'list.jpg</image>
<image redraw="no" offsetXPC="4" offsetYPC="2" widthPC="92" heightPC="90">' . imgpath . 'frame.png</image>
</backgroundDisplay>
</mediaDisplay>

<channel>
';
}


function playItem($id)	{
echo <<<PLA
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" rowCount="1" columnCount="1" drawItemText="no" showDefaultInfo="no" showHeader="no" itemOffsetXPC="50" itemOffsetYPC="20" sliding="no" itemBorderColor="0:128:255" itemHeightPC="12" itemWidthPC="17" itemBackgroundColor="-1:-1:-1" idleImageXPC="72" idleImageYPC="25" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="-1:-1:-1" sideColorBottom="0:0:0" sideColorTop="-1:-1:-1">
PLA;

echo '
<idleImage>' . imgpath . 'loader_1.png</idleImage>
<idleImage>' . imgpath . 'loader_2.png</idleImage>
<idleImage>' . imgpath . 'loader_3.png</idleImage>
<idleImage>' . imgpath . 'loader_4.png</idleImage>
<idleImage>' . imgpath . 'loader_5.png</idleImage>
<idleImage>' . imgpath . 'loader_6.png</idleImage>
<idleImage>' . imgpath . 'loader_7.png</idleImage>
<idleImage>' . imgpath . 'loader_8.png</idleImage>

<image redraw="no" offsetXPC="12" offsetYPC="18" widthPC="25" heightPC="30">
<script>
	getItemInfo(-1, "media");
</script>
</image>

<text redraw="no" backgroundColor="-1:-1:-1" offsetXPC="10" offsetYPC="47" widthPC="80" heightPC="10" fontSize="15" >
<script>
	getItemInfo(-1, "title");
</script>
</text>

<text redraw="no" backgroundColor="-1:-1:-1" offsetXPC="10" offsetYPC="58" widthPC="80" heightPC="25" fontSize="11" lines="5" >
<script>
	getItemInfo(-1, "description");
</script>
</text>

<itemDisplay>
<text align="center" backgroundColor="-1:-1:-1" redraw="no" offsetXPC="1" offsetYPC="1" widthPC="90" heightPC="98" fontSize="16" >
Odtwórz
</text>
</itemDisplay>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'list.jpg</image>
<image redraw="no" offsetXPC="4" offsetYPC="2" widthPC="92" heightPC="90">' . imgpath . 'frame.png</image>
</backgroundDisplay>
</mediaDisplay>

<channel>
';
		
	$xm = simplexml_load_file("http://www.tvp.pl/pub/stat/details?object_id=" . $id . "&video_id=" . $id . "&link_as_copy=true&xslt=internet-tv/samsung/video_details.xslt");
	if ($xm === FALSE) die('Wrong XML');
	global $normalizeChars;
	
	//$titletemp = iconv("UTF-8", "ASCII//TRANSLIT", $xm->object->title);
	$titletemp = htmlentities($xm->object->title, ENT_QUOTES, 'UTF-8', FALSE);
	$title = strtr($titletemp, $normalizeChars);
	//$desctemp = iconv("UTF-8", "ASCII//TRANSLIT", $xm->object->description);
	$desctemp = htmlentities($xm->object->description, ENT_QUOTES, 'UTF-8', FALSE);
	$desc = strtr($desctemp, $normalizeChars);
	$link = $xm->object['video_url'];
	$media = $xm->object->img['src'];
  
	if (!empty($link))
			echo '
<item>
<title>' . $title . '</title>
<description>' . $desc . '</description>
<link>' . $link . '</link>
<enclosure type="video/mp4" url="' . $link . '"/>
<media>' . $media . '</media>
</item>
';
}

function generateFooter()	{
echo <<<FOO
</channel>
</rss>
FOO;
}


function generateItems($selection, $menu)	{

	if ($menu === TRUE)	{
		$xmlfile = "http://www.tvp.pl/pub/stat/websitelisting?object_id=" .  $selection . "&child_mode=SIMPLE&rec_count=64&with_subdirs=true&link_as_copy=true&xslt=internet-tv/samsung/websites_listing.xslt&q=&samsungwidget=1&v=2&5";
		$typefile = webpath . "tvp.php?category=";
	}
	else	{
		$xmlfile = "http://www.tvp.pl/pub/sess/samsungvideolistingwrapper?object_id=" . $selection . "&play_mode=VOD&sort_by=RELEASE_DATE&rec_count=128&with_subdirs=true&child_mode=SIMPLE&xslt=internet-tv/samsung/website_details_wrapper.xslt&with_video=true";
		$typefile = webpath . "tvp.php?play=";
		
	}
	
	$xm = simplexml_load_file($xmlfile);
	if ($xm === FALSE) die('Wrong XML');
	global $normalizeChars;
	
	foreach ($xm->object as $serie) {
		//$titletemp = iconv("UTF-8", "ASCII//TRANSLIT", $serie->title);
		$titletemp = htmlentities($serie->title, ENT_QUOTES, 'UTF-8', FALSE);
		$title = strtr($titletemp, $normalizeChars);
		$media = $serie->img['src'];
  
		if (!empty($media))
			echo '
<item>
<title>' . $title . '</title>
<link>' . $typefile . $serie['id'] . '</link>
<media>' . $media . '</media>
</item>
';
	}
}


if (isset($_GET['menu'])) {
	generateSeriesHeader();
	generateItems($_GET['menu'], TRUE);
	generateFooter();
}
elseif (isset($_GET['category'])) {
	generateSeriesHeader();
	generateItems($_GET['category'], FALSE);
	generateFooter();
}
elseif (isset($_GET['play'])) {
	playItem($_GET['play']);
	generateFooter();
}
else	{
	generateIndexHeader();
	generateFooter();
}

?>