<?php

error_reporting(0);
define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

$konfig = simplexml_load_file(dirpath . 'ustawienia.xml');
if (!empty($konfig->quality))	{
	define("IPLA_QUALITY", $konfig->quality);
}
else	{
	define("IPLA_QUALITY", 0);
}

if (!empty($konfig->nritems))	{
	define("IPLA_NRITEMS", $konfig->nritems);
}
else	{
	define("IPLA_NRITEMS", 15);
}

define("baza", '/tmp/plims_ipla.xml');
if (!file_exists(baza))	{
	$fi = file_get_contents('http://getmedia.redefine.pl/r/l_x_35_ipla/categories/list/?login=qc4iweax&ver=344&cuid=-31842300');
	$fo = fopen(baza, 'w');
	fwrite($fo, $fi);
	fclose($fo);
}

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
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'ipla_index.jpg</image>
</backgroundDisplay>
</mediaDisplay>

<channel>
';

$xm = simplexml_load_file(baza);
if ($xm === FALSE) die('Wrong XML');

foreach ($xm->cat as $serie) {
	if (($serie['pid'] == 0) && ($serie['id'] != 0))	{
		echo '
<item>
<title>' . $serie['title'] . '</title>
<link>' . webpath . 'ipla.php?cat=' . $serie['id'] . '</link>
</item>
';
	}
}

echo '
<item>
<title>Szukaj</title>
<link>rss_command://search</link>
<search url="' . webpath . 'ipla.php?search=%s" />
</item>
';

}


function generateSeriesHeader($cat, $szuk)	{
	$items = '';
	if ($szuk === FALSE)	{
		$xm = simplexml_load_file(baza);
		if ($xm === FALSE) die('Wrong XML');
		
		foreach ($xm->cat as $serie) {
			if (($serie['pid'] == $cat))	{
				$items .= '
<item>
<title><![CDATA[' . $serie['title'] . ']]></title>
<link>' . webpath . 'ipla.php?cat=' . $serie['id'] . '</link>
<desc><![CDATA[' . $serie['descr'] . ']]></desc>
<media>' . $serie['thumbnail'] . '</media>
</item>
';
			}
		}
	}
	
	if (empty($items))	{
		if ($szuk === FALSE)	{
			$xf = simplexml_load_file("http://getmedia.redefine.pl/action/2.0/vod/list/?login=qc4iweax&ver=344&cuid=-31842300&category=" . $cat);
			$pat = $xf->VoDs->vod;
		}
		else	{
			$xf = simplexml_load_file("http://getmedia.redefine.pl/vods/search/?vod_limit=" . IPLA_NRITEMS . "&login=qc4iweax&ver=344&cuid=-31842300&page=0&keywords=" . $cat);
			$pat = $xf->media->vod;
		}
		
		if ($xf === FALSE) die('Wrong XML');
		
		foreach ($pat as $clip) {
			$url = '';
			foreach ($clip->srcreq as $stream)	{
				if (($stream['quality'] == IPLA_QUALITY) && ($stream['format'] == 3))	{
					$url = $stream['url'];
					$type = 'flv';
					break;
				}
				elseif (($stream['quality'] == IPLA_QUALITY) && ($stream['format'] == 0))	{
					$url = $stream['url'];
					$type = 'ms-wmv"';
					break;
				}
			}
			
			if (empty($url))	{
				$url = $clip->srcreq[0]['url'];
				if ($clip->srcreq[0]['format'] == 0)	{
					$type = 'ms-wmv';
				}
				else	{
					$type = 'flv';
				}
			}
			
			$items .= '
<item>
<title><![CDATA[' . $clip['title'] . ']]></title>
<link>' . $url . '</link>
<enclosure type="video/x-' . $type . '" url="' . $url . '"/>
<desc><![CDATA[' . $clip['descr'] . ']]></desc>
<media>' . $clip['thumbnail_big'] . '</media>
</item>
';
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

<text redraw="yes" backgroundColor="0:0:0" foregroundColor="245:254:1" offsetXPC="45" offsetYPC="12" widthPC="48" heightPC="6" fontSize="16" lines="1">
<script>
	getItemInfo("title");
</script>
</text>

<text redraw="yes" backgroundColor="0:0:0" foregroundColor="255:255:255" offsetXPC="45" offsetYPC="22" widthPC="48" heightPC="40" fontSize="12" lines="11" align="justify">
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
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'ipla_cat.jpg</image>
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
	generateSeriesHeader($_GET['cat'], FALSE);
	generateFooter();
}
elseif (isset($_GET['search'])) {
	generateSeriesHeader($_GET['search'], TRUE);
	generateFooter();
}
else	{
	generateIndexHeader();
	generateFooter();
}
?>