<?php
	$dirpath = dirname($_SERVER["SCRIPT_FILENAME"]) . '/';
	$webpath = 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/';
	$imgpath = $dirpath . 'image/';
?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" rowCount="5" columnCount="4" showHeader="no" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="6" itemOffsetYPC="63" sliding="yes" itemHeightPC="5.5" itemWidthPC="22" itemBorderColor="46:122:213" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" sideColorBottom="0:0:0" sideColorTop="-1:-1:-1" bottomYPC="90">

<idleImage><?php echo $imgpath; ?>loader_1.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_2.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_3.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_4.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_5.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_6.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_7.png</idleImage>
<idleImage><?php echo $imgpath; ?>loader_8.png</idleImage>

<itemDisplay>
<text redraw="no" offsetXPC="2" offsetYPC="4" widthPC="92" heightPC="92" fontSize="12" lines="2" alignt="center">
<script>
	getItemInfo(-1, "title");
</script>
</text>
</itemDisplay>

<onUserInput>
<script>
	userInput = currentUserInput();
	Current_Item = getFocusItemIndex();
	
	if ( userInput == "video_frwd" )	{
		New = Add(-15, Current_Item);
		if ( New &lt; 0 )	{
			setFocusItemIndex(0);
		}
		else	{
			setFocusItemIndex(New);	
		}
		"true";
		redrawDisplay();
	} 
				
	if ( userInput == "video_ffwd" )	{
		New = Add(15, Current_Item);
		if ( New &gt; 70)	{
			setFocusItemIndex(70);
		}
		else	{
			setFocusItemIndex(New);
		}	
		"true";
		redrawDisplay();
	}
	
	if ( userInput == "pageup" || userInput == "PG" )	{
		New = Add(-30, Current_Item);
		if ( New &lt; 0 )	{
			setFocusItemIndex(0);
		}
		else	{
			setFocusItemIndex(New);	
		}	
		"true";
		redrawDisplay();
	} 
				
	if ( userInput == "pagedown" || userInput == "PD" )	{
		New = Add(30, Current_Item);
		if ( New &gt; 70 )	{ 
			setFocusItemIndex(70); 	
		}
		else	{ 
			setFocusItemIndex(New);	
		}	
		"true";
		redrawDisplay();
	}
	
	if (userInput == "ENTR" || userInput == "enter" || userInput == "video_play" )	{
		streamURL = getItemInfo(-1, "stream");
		if (streamURL != null)	{
			playItemURL(-1, 1);
			playItemURL(streamURL,5);
		}
		"true";
		redrawDisplay();
	}
	
	"false";
</script>
</onUserInput>

<backgroundDisplay>
<image offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100"><?php echo $imgpath; ?>eskazet.jpg</image>
</backgroundDisplay>

</mediaDisplay>

<channel>

<item>
<title>eSKa Slask 99.1 FM</title>
<stream>http://sask1-2.radio.pionier.net.pl:8000/pl/eska-slask.mp3</stream>
</item>

<item>
<title>eSKa Szczecin 96.9 FM</title>
<stream>http://sask1-4.radio.pionier.net.pl:8000/pl/eska-szczecin.mp3</stream>
</item>

<item>
<title>eSKa Poznan 93.0 FM</title>
<stream>http://sask1-4.radio.pionier.net.pl:8000/pl/eska-poznan.mp3</stream>
</item>

<item>
<title>eSKa Krakow 97.7 FM</title>
<stream>http://sask1-3.radio.pionier.net.pl:8000/pl/eska-krakow.mp3</stream>
</item>

<item>
<title>eSKa Wroclaw 104.9 FM</title>
<stream>http://sask1-3.radio.pionier.net.pl:8000/pl/eska-wroclaw.mp3</stream>
</item>

<item>
<title>eSKa Lodz 99.8 FM</title>
<stream>http://sask1-4.radio.pionier.net.pl:8000/pl/eska-lodz.mp3</stream>
</item>

<item>
<title>eSKa Warszawa 105.6 FM</title>
<stream>http://bialystok.radio.pionier.net.pl:8000/pl/eska-warszawa.mp3</stream>
</item>

<item>
<title>eSka Trojmiasto</title>
<stream>http://sask1-4.radio.pionier.net.pl:8000/pl/eska-trojmiasto.mp3</stream>
</item>

<item>
<title>eSKa Rock</title>
<stream>http://bialystok.radio.pionier.net.pl:8000/pl/eskarock.mp3</stream>
</item>

<item>
<title>Radio WaWa</title>
<stream>http://bialystok.radio.pionier.net.pl:8000/pl/wawa.mp3</stream>
</item>

<item>
<title>VOX FM</title>
<stream>http://warszawa1-3.radio.pionier.net.pl:8000/vox.mp3</stream>
</item>

<item>
<title>Radio Polo TV</title>
<stream>http://gramy01.eska.fm:8000/stream26_1.mp3</stream>
</item>

<item>
<title>eSKa Alternative</title>
<stream>http://gramy01.eska.fm:8000/stream21_1.mp3</stream>
</item>

<item>
<title>eSKa Ballads</title>
<stream>http://gdansk1-3.radio.pionier.net.pl:8000/pl/eska-stream11-1.mp3</stream>
</item>

<item>
<title>eSKa Po Polsku (Biao-Czerwoni)</title>
<stream>http://gdansk1-3.radio.pionier.net.pl:8000/pl/eska-stream9-1.mp3</stream>
</item>

<item>
<title>eSKa Bounce</title>
<stream>http://warszawa1-1.radio.pionier.net.pl:8000/pl/eska-stream3-1.mp3</stream>
</item>

<item>
<title>eSKa Cinema</title>
<stream>http://gramy01.eska.fm:8000/cinema_1.mp3</stream>
</item>

<item>
<title>eSKa Classic</title>
<stream>http://gramy01.eska.fm:8000/classic_1.mp3</stream>
</item>

<item>
<title>eSKa Classic Rock</title>
<stream>http://wroclaw.radio.pionier.net.pl:8000/pl/eska-stream13-1.mp3</stream>
</item>

<item>
<title>eSKa Club</title>
<stream>http://warszawa1-1.radio.pionier.net.pl:8000/pl/eska-stream4-1.mp3</stream>
</item>

<item>
<title>eSKa Eurotop</title>
<stream>http://wroclaw.radio.pionier.net.pl:8000/pl/eska-stream16-1.mp3</stream>
</item>

<item>
<title>eSKa Goraca 20</title>
<stream>http://wroclaw.radio.pionier.net.pl:8000/pl/eska-stream19-1.mp3</stream>
</item>

<item>
<title>eSKa Hity</title>
<stream>http://wroclaw.radio.pionier.net.pl:8000/pl/eska-stream14-1.mp3</stream>
</item>

<item>
<title>eSka Jazzy</title>
<stream>http://gramy01.eska.fm:8000/stream25_1.mp3</stream>
</item>

<item>
<title>eSka Lounge</title>
<stream>http://gdansk1-3.radio.pionier.net.pl:8000/pl/eska-stream10-1.mp3</stream>
</item>

<item>
<title>eSka Old's Cool</title>
<stream>http://wroclaw.radio.pionier.net.pl:8000/pl/eska-stream12-1.mp3</stream>
</item>

<item>
<title>eSKa Polski Rock</title>
<stream>http://gramy01.eska.fm:8000/stream23_1.mp3</stream>
</item>

<item>
<title>eSKa Squad</title>
<stream>http://warszawa1-1.radio.pionier.net.pl:8000/pl/eska-stream2-1.mp3</stream>
</item>

<item>
<title>eSKa Summer City</title>
<stream>http://gramy01.eska.fm:8000/stream19_1.mp3</stream>
</item>

<item>
<title>eSka Total Fresh</title>
<stream>http://wroclaw.radio.pionier.net.pl:8000/pl/eska-stream19-1.mp3</stream>
</item>

<item>
<title>eSKa World</title>
<stream>http://gramy01.eska.fm:8000/world_1.mp3</stream>
</item>

<item>
<title>eSKa xTreme</title>
<stream>http://warszawa1-1.radio.pionier.net.pl:8000/pl/eska-stream1-1.mp3</stream>
</item>

<item>
<title>eSKa LRMX - Armin Van Buuren</title>
<stream>http://gramy01.eska.fm:8000/buuren_1.mp3</stream>
</item>

<item>
<title>eSKa LRMX - Carl Cox</title>
<stream>http://gramy01.eska.fm:8000/cox_1.mp3</stream>
</item>

<item>
<title>eSKa LRMX - David Guetta</title>
<stream>http://gramy01.eska.fm:8000/guetta_1.mp3</stream>
</item>

<item>
<title>eSKa LRMX - Ferry Corsten</title>
<stream>http://gramy01.eska.fm:8000/corsten_1.mp3</stream>
</item>

<item>
<title>eSKa LRMX - John Digweed</title>
<stream>http://gramy01.eska.fm:8000/digweed_1.mp3</stream>
</item>

<item>
<title>eSKa LRMX - Puoteck</title>
<stream>http://poznan5-2.radio.pionier.net.pl:8000/eska-stream6-1.mp3</stream>
</item>

<item>
<title>Radio MyMusic</title>
<stream>http://gramy01.eska.fm:8000/stream17_1.mp3</stream>
</item>

<item>
<title>Radio TekstyFM</title>
<stream>http://gramy01.eska.fm:8000/stream24_1.mp3</stream>
</item>

<item>
<title>eSKa Wakacjobranie (Lotto)</title>
<stream>http://gramy01.eska.fm:8000/stream19_1.mp3</stream>
</item>

<item>
<title>ZET Radio</title>
<stream>http://radiozetmp3-32.eurozet.pl:8400</stream>
</item>

<item>
<title>ZET Radio Hits</title>
<stream>http://zet-hits-01.eurozet.pl:8000</stream>
</item>

<item>
<title>ZET Radio PL</title>
<stream>http://zetpl-01.eurozet.pl:8100</stream>
</item>

<item>
<title>ZET Radio Soul</title>
<stream>http://zetsoul-01.eurozet.pl:8100</stream>
</item>

<item>
<title>ZET Radio Dance</title>
<stream>http://zetdance-01.eurozet.pl:8000</stream>
</item>

<item>
<title>ZET Radio Classic Rock</title>
<stream>http://zetclassicrock-01.eurozet.pl:8100</stream>
</item>

<item>
<title>ZET Radio Love</title>
<stream>http://zetlove-01.eurozet.pl:8000</stream>
</item>

<item>
<title>ZET Radio Slow</title>
<stream>http://zet-slow-01.eurozet.pl:8200</stream>
</item>

<item>
<title>ZET Radio Gold</title>
<stream>http://zetgold-01.eurozet.pl:8000</stream>
</item>

<item>
<title>ZET Radio XX-Lecie</title>
<stream>http://zet-20lat-01.eurozet.pl:8000</stream>
</item>

<item>
<title>ZET Radio Party</title>
<stream>http://zetparty-01.eurozet.pl:8100</stream>
</item>

<item>
<title>ZET Radio Rock</title>
<stream>http://zetrock-01.eurozet.pl:8000</stream>
</item>

<item>
<title>ZET Radio Lato</title>
<stream>http://latozet-01.eurozet.pl:8300</stream>
</item>

<item>
<title>ZET Radio Hot</title>
<stream>http://zethot-01.eurozet.pl:8000</stream>
</item>

<item>
<title>ZET Radio Kids</title>
<stream>http://zetkids-01.eurozet.pl:8000</stream>
</item>

<item>
<title>ZET Radio 2000</title>
<stream>http://zet-2000-01.eurozet.pl:8100</stream>
</item>

<item>
<title>ZET Radio Osiecka</title>
<stream>http://zetosi-01.eurozet.pl:8000</stream>
</item>

<item>
<title>ZET Radio Sade</title>
<stream>http://zet-sade-01.eurozet.pl:8500</stream>
</item>

<item>
<title>ZET Radio Smooth Jazz</title>
<stream>http://zet-smoothjazz-01.eurozet.pl:8100</stream>
</item>

<item>
<title>ZET Radio Super Gold</title>
<stream>http://zetsupergold-01.eurozet.pl:8000</stream>
</item>

<item>
<title>ZET Radio Classic</title>
<stream>http://zetclassic-01.eurozet.pl:8100</stream>
</item>

<item>
<title>ZET Radio Choppin</title>
<stream>http://zetchopin-01.eurozet.pl:8100</stream>
</item>

<item>
<title>ZET Radio Rock & Rap</title>
<stream>http://zet-rockrap-01.eurozet.pl:8000</stream>
</item>

<item>
<title>ZET Radio Beatles</title>
<stream>http://johnlennon-01.eurozet.pl:8000</stream>
</item>

<item>
<title>Chilli ZET On-line</title>
<stream>http://chillizetmp3-01.eurozet.pl:8400</stream>
</item>

<item>
<title>Chilli ZET Soul</title>
<stream>http://chisou-01.eurozet.pl:8300</stream>
</item>

<item>
<title>Chilli ZET Ladies</title>
<stream>http://chilad-01.eurozet.pl:8300</stream>
</item>

<item>
<title>Chilli ZET PL</title>
<stream>http://chilli-pl-01.eurozet.pl:8300</stream>
</item>

<item>
<title>Chilli ZET Deep</title>
<stream>http://chilli-deep-01.eurozet.pl:8300</stream>
</item>

<item>
<title>Chilli ZET Rafal Bryndal Jazz Quartet</title>
<stream>http://chilli-jazz-01.eurozet.pl:8300</stream>
</item>

</channel>
</rss>