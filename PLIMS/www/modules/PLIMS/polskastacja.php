<?php
	$dirpath = dirname($_SERVER["SCRIPT_FILENAME"]) . '/';
	$webpath = 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/';
	$imgpath = $dirpath . 'image/';
?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">

<onExit>                
  playItemURL(-1, 1);
</onExit>

<mediaDisplay name="photoView" rowCount="4" columnCount="4" showHeader="no" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="4" itemOffsetYPC="59" sliding="yes" itemHeightPC="8" itemWidthPC="21.5" itemBorderColor="46:122:213" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" sideColorBottom="0:0:0" sideColorTop="-1:-1:-1" bottomYPC="90">

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
		if ( New &gt; 76)	{
			setFocusItemIndex(76);
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
		if ( New &gt; 76 )	{ 
			setFocusItemIndex(76); 	
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
<image offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100"><?php echo $imgpath; ?>polskastacja.jpg</image>
</backgroundDisplay>

</mediaDisplay>

<channel>

<item>
<title>HOT 100 - Goraca Setka Nowych HITOW</title>
<stream>http://188.165.20.29:5900</stream>
</item>

<item>
<title>Muzyka na TOPIE (Polskie Radio)</title>
<stream>http://188.165.20.29:8360</stream>
</item>

<item>
<title>Super Przeboje (Polskie Radio)</title>
<stream>http://188.165.20.29:2450</stream>
</item>

<item>
<title>Tylko Polskie Przeboje</title>
<stream>http://91.121.89.153:8060</stream>
</item>

<item>
<title>Najwieksze Przeboje '80 '90 (Polskie Radio)</title>
<stream>http://91.121.89.153:8250</stream>
</item>

<item>
<title>Najwieksze Przeboje '60 '70 (Polskie Radio)</title>
<stream>http://91.121.133.111:9460</stream>
</item>

<item>
<title>Nastolatka (Polskie Radio)</title>
<stream>http://91.121.103.183:2960</stream>
</item>

<item>
<title>Dance 100 (Polskie Radio)</title>
<stream>http://91.121.77.187:2260</stream>
</item>

<item>
<title>Polskie Niezapomniane Przeboje</title>
<stream>http://188.165.20.29:8160</stream>
</item>

<item>
<title>Przeboje We Dwoje (Polskie Radio)</title>
<stream>http://188.165.20.29:9060</stream>
</item>

<item>
<title>DISCO POLO RADIO</title>
<stream>http://91.121.165.51:9160</stream>
</item>

<item>
<title>Polski Power Dance (Polskie Radio)</title>
<stream>http://91.121.89.153:4560</stream>
</item>

<item>
<title>'80 & ItaloDisco</title>
<stream>http://188.165.23.150:9700</stream>
</item>

<item>
<title>Era DISCO</title>
<stream>http://91.121.18.185:5200</stream>
</item>

<item>
<title>New Romantic</title>
<stream>http://91.121.89.198:2500</stream>
</item>

<item>
<title>Piosenki z Filmow</title>
<stream>http://91.121.89.153:80</stream>
</item>

<item>
<title>Muzyka Filmowa</title>
<stream>http://91.121.92.167:9200</stream>
</item>

<item>
<title>Soul</title>
<stream>http://91.121.77.187:6300</stream>
</item>

<item>
<title>R'N'B</title>
<stream>http://188.165.20.29:5800</stream>
</item>

<item>
<title>HIP HOP</title>
<stream>http://91.121.116.107:9300</stream>
</item>

<item>
<title>Polski Hip Hop</title>
<stream>http://188.165.20.29:6100</stream>
</item>

<item>
<title>DJ Top 50</title>
<stream>http://91.121.157.133:7600</stream>
</item>

<item>
<title>PARTY</title>
<stream>http://188.165.23.150:8500</stream>
</item>

<item>
<title>Club HITS</title>
<stream>http://91.121.165.51:7800</stream>
</item>

<item>
<title>Ibiza Hits</title>
<stream>http://188.165.21.29:3300</stream>
</item>

<item>
<title>HOT House</title>
<stream>http://91.121.89.198:7700</stream>
</item>

<item>
<title>Funky House</title>
<stream>http://188.165.21.29:3100</stream>
</item>

<item>
<title>House & Dance</title>
<stream>http://91.121.165.51:9500</stream>
</item>

<item>
<title>House Progressive</title>
<stream>http://188.165.21.29:3200</stream>
</item>

<item>
<title>HardStyle</title>
<stream>http://91.121.236.243:80</stream>
</item>

<item>
<title>Drum And Bass</title>
<stream>http://91.121.236.242:80</stream>
</item>

<item>
<title>Trance Vocal</title>
<stream>http://188.165.21.29:3500</stream>
</item>

<item>
<title>TRAX</title>
<stream>http://91.121.164.186:8600</stream>
</item>

<item>
<title>Dancehall</title>
<stream>http://91.121.92.167:4800</stream>
</item>

<item>
<title>Electro-House</title>
<stream>http://188.165.20.29:6000</stream>
</item>

<item>
<title>Electro</title>
<stream>http://91.121.165.51:2100</stream>
</item>

<item>
<title>Tylko ROCK</title>
<stream>http://188.165.22.29:9400</stream>
</item>

<item>
<title>Ballady Rockowe</title>
<stream>http://91.121.103.183:6200</stream>
</item>

<item>
<title>Modern ROCK</title>
<stream>http://91.121.164.186:7200</stream>
</item>

<item>
<title>Mocne Brzmienie Rocka</title>
<stream>http://91.121.89.198:5100</stream>
</item>

<item>
<title>Punk</title>
<stream>http://87.98.236.75:3700</stream>
</item>

<item>
<title>Indie Rock</title>
<stream>http://87.98.236.75:3800</stream>
</item>

<item>
<title>Gothic</title>
<stream>http://91.121.165.51:2300</stream>
</item>

<item>
<title>Polska Scena Alternatywna</title>
<stream>http://87.98.236.75:3600</stream>
</item>

<item>
<title>Blues</title>
<stream>http://188.165.20.29:5500</stream>
</item>

<item>
<title>Poezja Spiewana</title>
<stream>http://91.121.77.187:6600</stream>
</item>

<item>
<title>Radio CCM - Contemporary Christian</title>
<stream>http://188.165.20.29:4100</stream>
</item>

<item>
<title>Polska Muzyka Chrzescijanska</title>
<stream>http://91.121.236.241:80</stream>
</item>

<item>
<title>Italia</title>
<stream>http://91.121.157.133:5000</stream>
</item>

<item>
<title>Muzyka Francuska</title>
<stream>http://91.121.157.138:5600</stream>
</item>

<item>
<title>Latino</title>
<stream>http://91.121.77.187:9800</stream>
</item>

<item>
<title>Muzyka Zydowska</title>
<stream>http://91.121.89.198:2600</stream>
</item>

<item>
<title>Klasycznie</title>
<stream>http://91.121.92.167:8900</stream>
</item>

<item>
<title>Klasyka Muzyki Elektronicznej</title>
<stream>http://91.121.164.186:7900</stream>
</item>

<item>
<title>Chillout</title>
<stream>http://91.121.89.153:7100</stream>
</item>

<item>
<title>Lounge</title>
<stream>http://188.165.21.29:3400</stream>
</item>

<item>
<title>JAZZ</title>
<stream>http://91.121.92.167:8700</stream>
</item>

<item>
<title>Smooth Jazz</title>
<stream>http://91.121.157.138:5700</stream>
</item>

<item>
<title>EDEN (New Age & World Music)</title>
<stream>http://91.121.89.153:9900</stream>
</item>

<item>
<title>Folk</title>
<stream>http://91.121.89.153:8800</stream>
</item>

<item>
<title>Etno POP</title>
<stream>http://91.121.164.186:5300</stream>
</item>

<item>
<title>Bollywood</title>
<stream>http://91.121.92.167:4600</stream>
</item>

<item>
<title>Biesiada</title>
<stream>http://91.121.89.153:4000</stream>
</item>

<item>
<title>Muzyka Ludowa</title>
<stream>http://91.121.92.167:4900</stream>
</item>

<item>
<title>Biesiada Slaska</title>
<stream>http://91.121.77.187:4300</stream>
</item>

<item>
<title>W rytmie REGGAE</title>
<stream>http://91.121.89.153:7000</stream>
</item>

<item>
<title>Polskie Reggae</title>
<stream>http://91.121.77.187:4400</stream>
</item>

<item>
<title>Dzieciom</title>
<stream>http://91.121.77.187:9600</stream>
</item>

<item>
<title>Boysband And Girslband</title>
<stream>http://91.121.92.167:4700</stream>
</item>

<item>
<title>Szanty</title>
<stream>http://91.121.77.187:5400</stream>
</item>

<item>
<title>Fashion</title>
<stream>http://188.165.21.29:3000</stream>
</item>

<item>
<title>Eurowizja/Eurovision</title>
<stream>http://91.121.77.187:6400</stream>
</item>

<item>
<title>Country</title>
<stream>http://91.121.116.107:7300</stream>
</item>

<item>
<title>Przeboje Na Lato</title>
<stream>http://91.121.165.51:2000</stream>
</item>

<item>
<title>Premiery i Nowosci Muzyczne</title>
<stream>http://87.98.236.75:3900</stream>
</item>

<item>
<title>Muzyka Niemiecka</title>
<stream>http://91.121.18.185:2800</stream>
</item>

<item>
<title>Sport</title>
<stream>http://91.121.18.185:2700</stream>
</item>

</channel>
</rss>