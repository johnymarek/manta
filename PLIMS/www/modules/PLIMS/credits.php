<?php

require('wersja.inc');
define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

function is_valid_ipv4($ips)
{
    return preg_match('/\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.'.
        '(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.'.
        '(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.'.
        '(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/', $ips) !== 0;
}

$ip = shell_exec("/sbin/ifconfig | grep 'inetd '| grep -v '127.0.0.1' | cut -d: -f2 | awk '{ print $1}'");
if(is_valid_ipv4($ip) == 0) {
   $ip = shell_exec("/sbin/ifconfig | grep 'inet addr:' | grep -v '127.0.0.1' | cut -d: -f2 | cut -d' ' -f1");
   if(is_valid_ipv4($ip) == 0) {
	   $ip = "ADRES-IP";
   }
}

$adresip = 'http://' . trim($ip) . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/ustawienia.php';

echo '<?xml version="1.0" encoding="UTF-8" ?>'."\n";
echo '<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/">
<mediaDisplay name="onePartView" backgroundColor="0:0:0" showHeader="no" showDefaultInfo="no">

<image redraw="no" offsetXPC="20" offsetYPC="15" widthPC="15" heightPC="26">' . dirpath . 'plims.png</image>

<text redraw="no" offsetXPC="40" offsetYPC="17" fontSize="24" widthPC="20" heightPC="7" backgroundColor="-1:-1:-1" foregroundColor="70:140:210" align="left">PLIMS ' . WERSJA . '</text>

<text redraw="no" offsetXPC="40" offsetYPC="27" fontSize="15" widthPC="16" heightPC="5" backgroundColor="-1:-1:-1" foregroundColor="70:140:210" align="left">Programowanie:</text>

<text redraw="no" offsetXPC="57" offsetYPC="27" fontSize="15" widthPC="25" heightPC="5" backgroundColor="-1:-1:-1" foregroundColor="0:255:210" align="left">mikka, Xury &amp; dobosz23</text>

<text redraw="no" offsetXPC="40" offsetYPC="34" fontSize="15" widthPC="16" heightPC="5" backgroundColor="-1:-1:-1" foregroundColor="70:140:210" align="left">Grafika:</text>

<text redraw="no" offsetXPC="57" offsetYPC="34" fontSize="15" widthPC="25" heightPC="5" backgroundColor="-1:-1:-1" foregroundColor="0:255:210" align="left">Pavlik</text>

<text redraw="no" offsetXPC="18" offsetYPC="44" fontSize="13" widthPC="65" heightPC="12" backgroundColor="-1:-1:-1" foregroundColor="70:140:210" align="left" lines="3">Uwaga: niektóre serwisy (OnetVOD, TVN player) mają założoną blokadę geolokacyjną. Aby korzystać z wspomnianych serwisów należy posiadać polski adres IP.</text>

<text redraw="no" offsetXPC="18" offsetYPC="60" fontSize="13" widthPC="65" heightPC="5" backgroundColor="-1:-1:-1" foregroundColor="70:140:210" align="left">Do korzystania z weeb.tv wymagane jest konto.</text>

<text redraw="no" offsetXPC="18" offsetYPC="70" fontSize="13" widthPC="65" heightPC="5" backgroundColor="-1:-1:-1" foregroundColor="70:140:210" align="left">Panel zarządzania znajduje się pod adresem:</text>

<text redraw="no" offsetXPC="18" offsetYPC="75" fontSize="13" widthPC="65" heightPC="5" backgroundColor="-1:-1:-1" foregroundColor="0:255:210" align="left">' . $adresip . '</text>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'list.jpg</image>
<image redraw="no" offsetXPC="4" offsetYPC="2" widthPC="92" heightPC="90">' . imgpath . 'frame.png</image>
</backgroundDisplay>

<onUserInput>
	userInput = currentUserInput();
	if ( userInput == "enter" || userInput == "ENTR" ) {
		postMessage("return");
		"true";
	}
	"false";
</onUserInput>
</mediaDisplay>

<channel>
<title>O programie</title>
</channel>
</rss>
';
?>
