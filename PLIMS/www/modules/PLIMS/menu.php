<?php
	require('wersja.inc');
	$dirpath = dirname($_SERVER["SCRIPT_FILENAME"]) . '/';
	$webpath = 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/';
	$imgpath = $dirpath . 'image/';
	echo "<?xml version='1.0' encoding='UTF8' ?>\n";
?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" rowCount="3" columnCount="5" showHeader="no" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="5" itemOffsetYPC="46" sliding="yes" itemHeightPC="12" itemWidthPC="17" itemBorderColor="0:0:0" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" sideColorBottom="0:0:0" sideColorTop="-1:-1:-1" bottomYPC="90">

<idleImage><?php echo $imgpath; ?>loader_1.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_2.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_3.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_4.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_5.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_6.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_7.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_8.png</idleImage>

<text redraw="yes" backgroundColor="0:0:0" foregroundColor="255:255:255" offsetXPC="12" offsetYPC="89.5" widthPC="20" heightPC="5" fontSize="16">
<script>
	getItemInfo(-1, "title");
</script>
</text>

<text redraw="no" backgroundColor="0:0:0" foregroundColor="255:255:255" offsetXPC="33" offsetYPC="86" widthPC="62" heightPC="4" fontSize="11" align="right">
<script>
	"PLIMS <?php echo WERSJA; ?> by mikka, Pavlik, Xury &amp; dobosz23";
</script>
</text>

<text redraw="no" backgroundColor="0:0:0" foregroundColor="255:255:255" offsetXPC="33" offsetYPC="90" widthPC="62" heightPC="4" fontSize="11" align="right">
<script>
	"Przyciski: 0 - o programie &#32; | &#32; 5 - aktualizacja";
</script>
</text>

<itemDisplay> 
<image offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">
<script>
	if (getDrawingItemState() == "focus")
	{
		print("<?php echo $imgpath; ?>" + getItemInfo(-1, "media") + ".jpg");
	}
	else
	{
		print("<?php echo $imgpath; ?>" + getItemInfo(-1, "media") + "_off.jpg");
	}
</script>
</image>
</itemDisplay> 

<onUserInput>
<script>
	userInput = currentUserInput();
	if (userInput == "zero" || userInput == "0")
	{
		showIdle();
		url="<?php echo $webpath; ?>credits.php";
		jumpToLink("GotoPage");
		"true";
		redrawDisplay();
	}
	if (userInput == "video_search" || userInput == "five")
	{
		showIdle();
		url="<?php echo $webpath; ?>update.php";
		jumpToLink("GotoPage");
		"true";
		redrawDisplay();
	}
	"false";
</script>
</onUserInput>


<backgroundDisplay>
<image offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100"><?php echo $imgpath; ?>background.jpg</image>
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

<item>
<title>Weeb.TV</title>
<link><?php echo $webpath; ?>weeb.php</link>
<media>logo-weebtv</media>
</item>

<item>
<title>Program TV</title>
<link><?php echo $webpath; ?>program.php</link>
<media>logo-txt</media>
</item>

<item>
<title>PolskaStacja</title>
<link><?php echo $webpath; ?>polskastacja.php</link>
<media>logo-polskastacja</media>
</item>

<item>
<title>ipla</title>
<link><?php echo $webpath; ?>ipla.php</link>
<media>logo-ipla</media>
</item>

<item>
<title>iPtak</title>
<link><?php echo $webpath; ?>iptak.php</link>
<media>logo-iptak</media>
</item>

<item>
<title>Radio Eska i Zet</title>
<link><?php echo $webpath; ?>eskazet.php</link>
<media>logo-radiapl</media>
</item>

<item>
<title>VOD TVP</title>
<link><?php echo $webpath; ?>tvp.php</link>
<media>logo-tvp</media>
</item>

<item>
<title>Bajki</title>
<link><?php echo $webpath; ?>scripts/xLiveCZ/category/rss/detske.php</link>
<media>logo-dladzieci</media>
</item>

<item>
<title>Polskie Radio</title>
<link><?php echo $webpath; ?>polskieradio.php</link>
<media>logo-polskieradio</media>
</item>

<item>
<title>tvn player</title>
<link><?php echo $webpath; ?>tvn.php</link>
<media>logo-tvn</media>
</item>

<item>
<title>Filmy online</title>
<link><?php echo $webpath; ?>filmy_online.php</link>
<media>logo-filmy_online</media>
</item>

<item>
<title>OpenFM</title>
<link><?php echo $webpath; ?>openfm.php</link>
<media>logo-openfm</media>
</item>

<item>
<title>WP.TV</title>
<link><?php echo $webpath; ?>wp.php</link>
<media>logo-wp</media>
</item>

<item>
<title>HD Trailers</title>
<link><?php echo $webpath; ?>hdtrailers.php</link>
<media>logo-hdtrailers</media>
</item>

<item>
<title>YouTube</title>
<link><?php echo $webpath; ?>scripts/xLiveCZ/category/yt.php</link>
<media>logo-yt</media>
</item>

<item>
<title>OnetVOD</title>
<link><?php echo $webpath; ?>onet.php</link>
<media>logo-onetvod</media>
</item>

<item>
<title>Filmweb Trailers</title>
<link><?php echo $webpath; ?>fwtrailers.php</link>
<media>logo-fwtrailers</media>
</item>

<item>
<title>Game Trailers</title>
<link><?php echo $webpath; ?>gt.php</link>
<media>logo-gt</media>
</item>

<item>
<title>FilmBox</title>
<link><?php echo $webpath; ?>filmbox.php</link>
<media>logo-filmbox</media>
</item>

<item>
<title>Polskie TV</title>
<link>http://zam.opf.slu.cz/baco/skripty/tv.php?link=https://dl.dropboxusercontent.com/u/44973024/tv/polske_tv.xml,,<?php echo $webpath; ?>scripts,Polskie</link>
<media>polskie</media>
</item>

<item>
<title>Andrzej Mleczko</title>
<link><?php echo $webpath; ?>mleczko.php</link>
<media>logo-mleczko</media>
</item>

<item>
<title>Humor</title>
<link><?php echo $webpath; ?>humor.php</link>
<media>logo-humor</media>
</item>

<item>
<title>Beeg (18+)</title>
<link>rss_command://search</link>
<search url="<?php echo $webpath; ?>scripts/xLiveCZ/category/rss/%s.php" />
<media>logo-beeg</media>
</item>

</channel>
</rss>
