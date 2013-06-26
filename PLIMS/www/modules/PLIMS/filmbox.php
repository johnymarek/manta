<?php

define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

$xml = file_get_contents('http://filmboxliveapp.com/channel/channels.json');
	$xm = json_decode($xml);
	//print_r($xm);
	$items = '';
	foreach ($xm->{'channels'} as $item) {
		$items .= '
<item>
<title>' . $item->name . '</title>
<link>' . $item->stream . '</link>
<enclosure type="video/mp4" url="' . $item->stream . '"/>
<media>http://www.filmboxliveapp.com/mobile/ios/pl/images/' . $item->images[0]->image . '</media>
</item>
';
	};
?>
<rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" rowCount="2" columnCount="4" drawItemText="no" showDefaultInfo="yes" showHeader="no" itemOffsetXPC="31.5" itemOffsetYPC="14.5" sliding="no" itemBorderColor="0:0:255" itemHeightPC="18" itemWidthPC="14" itemBackgroundColor="225:225:225" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" sideColorBottom="0:0:0" sideColorTop="-1:-1:-1" bottomYPC="80">

<idleImage><?php echo imgpath; ?>loader_1.png</idleImage>
<idleImage><?php echo imgpath; ?>loader_2.png</idleImage>
<idleImage><?php echo imgpath; ?>loader_3.png</idleImage>
<idleImage><?php echo imgpath; ?>loader_4.png</idleImage>
<idleImage><?php echo imgpath; ?>loader_5.png</idleImage>
<idleImage><?php echo imgpath; ?>loader_6.png</idleImage>
<idleImage><?php echo imgpath; ?>loader_7.png</idleImage>
<idleImage><?php echo imgpath; ?>loader_8.png</idleImage>

<itemDisplay>
<image redraw="no" offsetXPC="1" offsetYPC="1" widthPC="98" heightPC="98">
<script>
	getItemInfo(-1, "media");
</script>
</image>
</itemDisplay>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100"><?php echo imgpath; ?>filmbox.jpg</image>

</backgroundDisplay>

</mediaDisplay>

<channel>

<?php echo $items; ?>
	
</channel>
</rss>