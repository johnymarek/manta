<?php
// ###############################################################
// ##   http://sites.google.com/site/pavelbaco/                 ##
// ##   Copyright (C) 2012  Pavel Bačo   (killerman)            ##
// ##                                                           ##
// ## This file is a part of xLiveCZ, this project doesnt have  ##
// ## any support from Xtreamer company and just be design for  ##  
// ## realtek based players									    ##
// ###############################################################
$DIR_SCRIPT_ROOT  = current(explode('xLiveCZ/', dirname(__FILE__).'/')).'xLiveCZ/';
$HTTP_SCRIPT_ROOT = current(explode('scripts/', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/')).'scripts/';
$file=$_GET["file"];

echo "<?xml version='1.0' ?>\n";
echo "<rss version=\"2.0\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\">\n";

$html = file_get_contents($file);

echo "<channel>\n<title>Playlista YouTube</title>";

	
	$videos = explode('<playlist>', $html);
    
	$videos = array_values($videos);
    unset($videos[0]);
	foreach($videos as $video) {

    $t1 = explode('<id>', $video);
    $t2 = explode('</id>', $t1[1]);
    $id = $t2[0];
	
	$t1 = explode('<nazev>', $video);
    $t2 = explode('</nazev>', $t1[1]);
    $title = $t2[0];
	$tit = urlencode($title);
	
   	echo "
			<item>
				<title>".$title."</title>
				<link>".$HTTP_SCRIPT_ROOT."xLiveCZ/category/youtube/yt_playlist.php?query=1,".$id."</link>
			</item>\n";
   
}
	echo "</channel>\n</rss>";
?>