<?php
	
	$videos = '';
	$xml = simplexml_load_file("http://tvwidget.pl/xml/mleczko.xml");
	$go = $xml->channel->item;

	foreach ($go as $obrazek) 
	{
		$videos .= '
<item>
<title>' . $obrazek->title .'</title>
<media>' . $obrazek->enclosure['url'] . '</media>
</item>
';
	}
?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">
			
<mediaDisplay name="photoView" showHeader="no" rowCount="2" columnCount="6" columnPerPage="6" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="4" itemOffsetYPC="79" sliding="yes" itemBorderColor="246:174:74" itemHeightPC="8" itemWidthPC="14" itemBackgroundColor="0:0:0" idleImageXPC="90" idleImageYPC="5" idleImageWidthPC="5" idleImageHeightPC="8" backgroundColor="0:0:0" bottomYPC="100" sideTopHeightPC="0" mainPartColor="-1:-1:-1" sideColorBottom="-1:-1:-1" sideColorTop="-1:-1:-1" forceFocusOnItem="yes" itemCornerRounding="yes">

<image redraw="yes" offsetXPC="14" offsetYPC="5" widthPC="74" heightPC="74">
<script>
	getItemInfo(-1, "media");
</script>
</image>

<itemDisplay>
<text redraw="no" offsetXPC="2" offsetYPC="5" widthPC="96" heightPC="90" fontSize="14">
<script>
	getItemInfo(-1, "title");
</script>

</text>
</itemDisplay>

</mediaDisplay>

<channel>

<?php echo $videos; ?>

</channel>
</rss>