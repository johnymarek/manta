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

<onExit>                
  playItemURL(-1, 1);
</onExit>

<mediaDisplay name="photoView" showHeader="no" rowCount="3" columnCount="4" columnPerPage="1" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="1" itemOffsetYPC="66" sliding="no" itemBorderColor="0:128:255" itemHeightPC="9" itemWidthPC="23.4" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" bottomYPC="100" sideTopHeightPC="0" mainPartColor="-1:-1:-1" sideColorBottom="-1:-1:-1" sideColorTop="-1:-1:-1">
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
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'polskieradio-index.jpg</image>
</backgroundDisplay>
</mediaDisplay>		
				
<channel>
';

}


function generateSeriesHeader($cat)	{
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

<onUserInput>
<script>
	userInput = currentUserInput();

	if( userInput == "ENTR" || userInput == "enter" || userInput == "video_play" ) {
		streamURL = getItemInfo(-1, "stream");
		if (streamURL != null){
			showidle();  
			playItemURL(-1, 1);
			cancelIdle();
			playItemURL(streamURL, 5);
		}
	}
	
	"false";
</script>
</onUserInput>
</mediaDisplay>

<channel>
';

	$contorig = file_get_contents("http://moje.polskieradio.pl/api/?key=20439fdf-be66-4852-9ded-1476873cfa22&output=xml&subcategory=" . $cat);	
	preg_match_all( "/\<channel\>(.*?)\<\/channel\>/", $contorig, $content);
		
	global $normalizeChars;
	
	foreach ($content[1] as $channel) {
		preg_match( "/\<title\>(.*?)\<\/title\>/", $channel, $name);
		preg_match( "/\<image\>http\:\/\/moje.polskieradio.pl\/_img\/kanaly\/(.*?)\.jpg<\/image\>/", $channel, $media);
		preg_match( "/stream link\=\"http\:\/\/mp3.(.*?)\" name=\"mp3\"/", $channel, $stream);
		
		//$titletemp = iconv("UTF-8", "ASCII//TRANSLIT", $serie->title);
		$titletemp = htmlentities($name[1], ENT_QUOTES, 'UTF-8', FALSE);
		$title = strtr($titletemp, $normalizeChars);
  
		if ((!empty($title)) && (!empty($stream[1])))
			echo '
<item>
<title>' . $title . '</title>
<media>http://moje.polskieradio.pl/_img/kanaly/' . $media[1] . '.jpg</media>
<stream>http://mp3.' . $stream[1] . '</stream>
</item>
';
	}
}


function generateFooter()	{
echo <<<FOO
</channel>
</rss>
FOO;
}


function generateItems()	{
	$nr = 0;
	$content = file_get_contents('http://moje.polskieradio.pl/api/categories/?key=20439fdf-be66-4852-9ded-1476873cfa22&output=xml');
	preg_match_all( "/\<id\>(.*?)\<\/id\>/", $content, $id);	
	preg_match_all( "/\<name\>(.*?)\<\/name\>/", $content, $name);
	
	global $normalizeChars;
	
	foreach ($id[1] as $program) {
		//$titletemp = iconv("UTF-8", "ASCII//TRANSLIT", $serie->title);
		$titletemp = htmlentities($name[1][$nr], ENT_QUOTES, 'UTF-8', FALSE);
		$title = strtr($titletemp, $normalizeChars);
  
		if (!empty($title))
			echo '
<item>
<title>' . $title . '</title>
<link>' . webpath . 'polskieradio.php?category=' . $program . '</link>
</item>
';
		$nr++;
	}
}


if (isset($_GET['category'])) {
	generateSeriesHeader($_GET['category']);
	generateFooter();
}
else	{
	generateIndexHeader();
	generateItems();
	generateFooter();
}

?>