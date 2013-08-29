<?php

error_reporting(0);
define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');
chmod(dirpath . "bin/rtmpdump", 0755);

$konfig = simplexml_load_file(dirpath . 'ustawienia.xml');
if (!empty($konfig->weeb_login))	{
	define("WEEB_LOGIN", $konfig->weeb_login);
}
else	{
	define("WEEB_LOGIN", 'plims_login');
}

if (!empty($konfig->weeb_pass))	{
	define("WEEB_HASLO", $konfig->weeb_pass);
}
else	{
	define("WEEB_HASLO", 'plims_haslo');
}

if (isset($konfig->weeb_hd))	{
	define("WEEB_HD", $konfig->weeb_hd);
}
else	{
	define("WEEB_HD", 1);
}

function geturl($url)	{
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)");
        $html = curl_exec($ch);
        curl_close($ch);
        return $html;
}

function posturl($url, $options)	{
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $options);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)");
        $html = curl_exec($ch);
        curl_close($ch);
        return $html;
}

function getChannels()	{
	$video = '';
	$max = 0;
	if (WEEB_HD == 1)	{
		$hd_kolor = '66:175:34';
		$hd_tekst = 'Włączone';
	}
	else
	{
		$hd_kolor = '255:0:0';
		$hd_tekst = 'Wyłączone';
	}
	
	$lista_kanalow = posturl("http://www.weeb.tv/api/getChannelList", "username=" . WEEB_LOGIN . "&userpassword=" . WEEB_HASLO);
	$kanaly = json_decode($lista_kanalow, true);
	//echo $lista_kanalow;
	
	foreach ($kanaly as $kanal => $wartosc) {
		if ($wartosc["multibitrate"] == 1)	{
			$hd_qual = 'Tak';
		}
		else	{
			$hd_qual = 'Nie';
		}
		$max++;
		$video .= '
<item>
<title>' . $wartosc["channel_title"] . '</title>
<onClick>
	showIdle();
	url="'. webpath . 'weeb.php?stream=' . $wartosc["cid"] . '&amp;hd=' . $wartosc["multibitrate"]  .'";
	movie=getUrl(url);
	cancelIdle();
	playItemUrl(movie,10);
</onClick>
<desc><![CDATA[' . $wartosc["channel_description"] . ']]></desc>
<author>' . $wartosc["user_name"] . '</author>
<media>http://static.weeb.tv/ci/' . $wartosc["cid"] . '.jpg</media>
<thumb>http://static.weeb.tv/thumb/' . $wartosc["cid"] . '.jpg</thumb>
<hd>' . $hd_qual . '</hd>
<tv>' . $wartosc["channel_name"] . '</tv>
</item>
';
	}
	$max = $max-1;
	
	echo <<<SER
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" rowCount="1" columnCount="11" drawItemText="no" showDefaultInfo="no" showHeader="no" itemOffsetXPC="1" itemOffsetYPC="78" sliding="yes" itemBorderColor="255:255:255" itemHeightPC="14" itemWidthPC="8" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" sideColorBottom="0:0:0" sideColorTop="-1:-1:-1" bottomYPC="90">
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

<text redraw="no" backgroundColor="-1:-1:-1" foregroundColor="255:255:255" offsetXPC="11" offsetYPC="42" widthPC="10" heightPC="5" fontSize="13" align="left">
Użytkownik:
</text>

<text redraw="no" backgroundColor="-1:-1:-1" foregroundColor="66:175:34" offsetXPC="21" offsetYPC="42" widthPC="23" heightPC="5" fontSize="13" align="left">
' . WEEB_LOGIN . '
</text>

<text redraw="no" backgroundColor="-1:-1:-1" foregroundColor="255:255:255" offsetXPC="11" offsetYPC="46" widthPC="4" heightPC="5" fontSize="13" align="left">
HD:
</text>

<text redraw="no" backgroundColor="-1:-1:-1" foregroundColor="' . $hd_kolor . '" offsetXPC="15" offsetYPC="46" widthPC="10" heightPC="5" fontSize="13" align="left">
' . $hd_tekst . '
</text>

<text redraw="yes" backgroundColor="0:0:0" foregroundColor="245:254:1" offsetXPC="56.6" offsetYPC="10" widthPC="35" heightPC="5" fontSize="16" lines="1">
<script>
	getItemInfo(-1, "title");
</script>
</text>

<image redraw="yes" offsetXPC="71.2" offsetYPC="16" widthPC="22" heightPC="22">
<script>
	getItemInfo(-1, "thumb");
</script>
</image>

<text redraw="yes" backgroundColor="0:0:0" foregroundColor="255:255:255" offsetXPC="57.2" offsetYPC="15" widthPC="12" heightPC="4" fontSize="11" align="left">
<script>
"Jakość HD: " + getItemInfo(-1, "hd");
</script>
</text>

<text redraw="yes" backgroundColor="0:0:0" foregroundColor="255:255:255" offsetXPC="57.2" offsetYPC="18.8" widthPC="12" heightPC="4" fontSize="11" align="left">
<script>
"Autor: " + getItemInfo(-1, "author");
</script>
</text>

<text redraw="yes" backgroundColor="0:0:0" foregroundColor="255:255:255" offsetXPC="56.6" offsetYPC="39" widthPC="38" heightPC="25" fontSize="11" lines="8" align="justify">
<script>
	getItemInfo(-1, "desc");
</script>
</text>

<text redraw="no" backgroundColor="-1:-1:-1" foregroundColor="255:255:255" offsetXPC="9.9" offsetYPC="50" widthPC="50" heightPC="4" fontSize="13" align="left">
Przycisk 0 - Program TV
</text>

<text redraw="no" backgroundColor="-1:-1:-1" foregroundColor="255:255:255" offsetXPC="9.9" offsetYPC="54" widthPC="50" heightPC="4" fontSize="13" align="left">
Przycisk 1 - Hity dnia!
</text>

<text redraw="no" backgroundColor="-1:-1:-1" foregroundColor="255:255:255" offsetXPC="9.9" offsetYPC="58" widthPC="50" heightPC="4" fontSize="13" align="left">
Przycisk 2 - Ostatnio oglądane
</text>

<text redraw="no" backgroundColor="-1:-1:-1" foregroundColor="255:255:255" offsetXPC="9.9" offsetYPC="62" widthPC="50" heightPC="4" fontSize="13" align="left">
Przycisk 3 - Logowanie
</text>

<itemDisplay>
<image redraw="no" offsetXPC="1" offsetYPC="1" widthPC="98" heightPC="98">
<script>
	getItemInfo(-1, "media");
</script>
</image>
</itemDisplay>

<onUserInput>
<script>
	userInput = currentUserInput();
	Current_Item = getFocusItemIndex();
	
	if (userInput == "video_frwd" || userInput == "pageup" || userInput == "PG")
	{
		New = Add(-11, Current_Item);
		if ( New &lt; 0 )	{
			setFocusItemIndex(0);
		}
		else	{
			setFocusItemIndex(New);	
		}	
		"true";
		redrawDisplay();
	}
	if (userInput == "video_ffwd" || userInput == "pagedown" || userInput == "PD")
	{
		New = Add(11, Current_Item);
		if ( New &gt; ' . $max . ' )	{ 
			setFocusItemIndex(' . $max . '); 	
		}
		else	{ 
			setFocusItemIndex(New);	
		}	
		"true";
		redrawDisplay();
	}
	if (userInput == "zero" || userInput == "0")
	{
		showIdle();
		url="' . webpath . 'program.php?weeb=" + getItemInfo(-1, "tv");
		jumpToLink("GotoPage");
		"true";
		redrawDisplay();
	}
	if (userInput == "one" || userInput == "1" || userInput == "option_red")
	{
		showIdle();
		url="' . webpath . 'program.php?weeb=http://www.telemagazyn.pl/rss/hit,krss.xml";
		jumpToLink("GotoPage");
		"true";
		redrawDisplay();
	}
	if (userInput == "two" || userInput == "2" || userInput == "option_green")
	{
		showIdle();
		url="' . webpath . 'weeb.php?last=y";
		last=getUrl(url);
		cancelIdle();
		
		movie=getUrl(last);
		playItemUrl(movie,10);
	}
	if (userInput == "three" || userInput == "3" || userInput == "option_yellow")
	{
		showIdle();
		url="' . webpath . 'showlogin.php";
		jumpToLink("GotoPage");
		"true";
		redrawDisplay();
	}
	"false";
</script>
</onUserInput>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'weebtv.jpg</image>
</backgroundDisplay>
</mediaDisplay>

<GotoPage>
	<link>
		<script>
			url;
		</script>
	</link>
</GotoPage>

<channel>
' . $video;
}

function getLink($stream, $hd)	{
	unlink(dirpath . "weeb.last");
	unlink(dirpath . "weeb.cgi");
	$weeb_last = fopen(dirpath . "weeb.last", 'w');
	$welast = str_replace('&', '&amp;', $_SERVER["QUERY_STRING"]);
	fwrite($weeb_last, $welast);
	fclose($weeb_last);
	
	if (($hd == 1) && (WEEB_HD == 1))	{
		$hd_link = 'HI';
	}
	else	{
		$hd_link = '';
	}
	
	$strumien = posturl('http://www.weeb.tv/api/setPlayer', "cid=" . $stream . '&username=' . WEEB_LOGIN . '&userpassword=' . WEEB_HASLO . '&platform=XBMC');
	//echo $strumien;
	$url_parsed = parse_url('http://www.weeb.tv/?' . $strumien);
	parse_str($url_parsed['query'], $dane);
	//print_r($dane);

	$link = 'exec ' . dirpath . 'bin/rtmpdump -o - -r "' . $dane["10"] . '/' . $dane["11"] . $hd_link . '" -W "http://static2.weeb.tv/player.swf" -p "http://weeb.tv" -y "' . $dane["11"] . $hd_link . '" --weeb "' . $dane["73"] . ';' . WEEB_LOGIN . ';' . WEEB_HASLO . '" -v';
	//echo $link;
	
	$weeb_play = fopen(dirpath . "weeb.cgi", 'w');
	fwrite($weeb_play, "#!/bin/sh\ncat <<EOF\nContent-type: \"video/mp4\"\n\nEOF\n" . $link);
	fclose($weeb_play);
	chmod(dirpath . "weeb.cgi", 0755);
	echo webpath . 'weeb.cgi';
}

function getLast()	{
	$wlast = file_get_contents(dirpath . "weeb.last");
	echo webpath . 'weeb.php?' . $wlast;
}

function generateFooter()	{
echo <<<FOO
</channel>
</rss>
FOO;
}

if (isset($_GET['stream'])) {
	getLink($_GET['stream'], $_GET['hd']);
}
elseif (isset($_GET['last'])) {
	getLast();
}
else	{
	getChannels();
	generateFooter();
}
?>
