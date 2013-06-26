<?php
// ###############################################################
// ##                                                           ##
// ##   http://sites.google.com/site/pavelbaco/                 ##
// ##   Copyright (C) 2012  Pavel Bačo   (killerman)            ##
// ##   Copyright (C) 2012  kmarty					            ##
// ##                                                           ##
// ## This file is a part of xLiveCZ, this project doesnt have  ##
// ## any support from Xtreamer company and just be design for  ##  
// ## realtek based players									    ##
// ###############################################################
echo "<?xml version='1.0' ?>\n";
$DIR_SCRIPT_ROOT  = current(explode('xLiveCZ/', dirname(__FILE__).'/')).'xLiveCZ/';
$HTTP_SCRIPT_ROOT = current(explode('scripts/', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/')).'scripts/';
?>

<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/">
<channel>
<title>Kanały YouTube</title>
<?php	

$videos = array_values(explode('<channel>', file_get_contents($_GET["file"])));
unset($videos[0]);

foreach($videos as $video) {
	$t1 = explode('<id>', $video);
	$t2 = explode('</id>', $t1[1]);
	$id = $t2[0];

	$t1 = explode('<nazev>', $video);
	$t2 = explode('</nazev>', $t1[1]);
	$title = $t2[0];
?>
	<item>
		<title><?php echo $title; ?></title>
		<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/y.php?query=1,http://gdata.youtube.com/feeds/api/users/<?php echo $id; ?>/uploads?orderby=updated,<?php echo urlencode($title); ?></link>
	</item>
<?php } ?>
</channel>
</rss>

