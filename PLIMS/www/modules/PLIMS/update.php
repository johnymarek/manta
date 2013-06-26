<?php

$dirpath = dirname($_SERVER["SCRIPT_FILENAME"]) . '/';
$imgpath = $dirpath . 'image/';

$mospath = str_replace('/PLIMS/', '', $dirpath);


$mos_file = fopen('/tmp/plims_mos', 'w');
fwrite($mos_file, $mospath);
fclose($mos_file);

unlink('/tmp/plims_status');
shell_exec('sh ' . $dirpath . 'update.sh >> /tmp/plims_status &');

header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8" ?>'."\n";
echo '<rss version="2.0" xmlns:media="http://purl.org/dc/elements/1.1/" xmlns:dc="http://purl.org/dc/elements/1.1/">

<onEnter>
	setRefreshTime(2000);
</onEnter>

<onRefresh>
	stan = readStringFromFile("/tmp/plims_status");
</onRefresh>

<onExit>
	setRefreshTime(-1);
</onExit>

<mediaDisplay name="onePartView" drawItemText="no" showHeader="no" showDefaultInfo="no" backgroundColor="0:0:0" sliding="no" itemHeightPC="0" itemWidthPC="0" idleImageXPC="90" idleImageYPC="3" idleImageWidthPC="5" idleImageHeightPC="8" mainPartColor="-1:-1:-1" sideColorBottom="-1:-1:-1" sideColorTop="-1:-1:-1" sideColorLeft="-1:-1:-1" sideColorRight="-1:-1:-1" >

<idleImage>' . $imgpath . 'loader_1.png</idleImage>
<idleImage>' . $imgpath . 'loader_2.png</idleImage>
<idleImage>' . $imgpath . 'loader_3.png</idleImage>
<idleImage>' . $imgpath . 'loader_4.png</idleImage>
<idleImage>' . $imgpath . 'loader_5.png</idleImage>
<idleImage>' . $imgpath . 'loader_6.png</idleImage>
<idleImage>' . $imgpath . 'loader_7.png</idleImage>
<idleImage>' . $imgpath . 'loader_8.png</idleImage>

<text redraw="no" offsetXPC="20" offsetYPC="22" widthPC="58" heightPC="6" fontSize="18" backgroundColor="-1:-1:-1" align="left">
Aktualizacja PLIMS
</text>

<text redraw="yes" offsetXPC="20" offsetYPC="32" widthPC="58" heightPC="42" fontSize="13" backgroundColor="-1:-1:-1" align="left" lines="10">
	<script>getItemInfo(-1, "ti");</script>
</text>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . $imgpath . 'list.jpg</image>
<image redraw="no" offsetXPC="14" offsetYPC="12" widthPC="72" heightPC="70">' . $imgpath . 'frame.png</image>
</backgroundDisplay>

</mediaDisplay>
<channel>

<item>
<ti><script>stan;</script></ti>
</item>
</channel>
</rss>';
?>