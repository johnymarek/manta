<?php

define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/'); 

function generateIndexHeader()	{
echo <<<HEA
<?xml version='1.0' ?><rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name=photoView sideBottomHeightPC=21 sideTopHeightPC=11 columnCount=4 rowCount=3 fontSize=16 imageBorderColor="255:255:0" imageBackgroundColor="0:0:0" itemBackgroundColor="0:0:0" sliding="yes" itemGapXPC=1 itemGapYPC=2 showHeader="no" showDefaultInfo="yes" drawItemText="no" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5">

<text  offsetXPC=36 offsetYPC=2 widthPC=35 heightPC=10 fontSize=25 backgroundColor=-1:-1:-1 foregroundColor=255:255:255>Filmy on-line</text>
	
<itemDisplay>
<image redraw="no" offsetXPC="1" offsetYPC="1" widthPC="98" heightPC="98">
<script>
	getItemInfo(-1, "media");
</script>
</image>
</itemDisplay>
HEA;

echo '
<idleImage>' . imgpath . 'loader_1.png</idleImage>
<idleImage>' . imgpath . 'loader_2.png</idleImage>
<idleImage>' . imgpath . 'loader_3.png</idleImage>
<idleImage>' . imgpath . 'loader_4.png</idleImage>
<idleImage>' . imgpath . 'loader_5.png</idleImage>
<idleImage>' . imgpath . 'loader_6.png</idleImage>
<idleImage>' . imgpath . 'loader_7.png</idleImage>
<idleImage>' . imgpath . 'loader_8.png</idleImage>
</mediaDisplay>
	
<channel>
	<title>Filmy on-line kategorie</title>
	<link>' . webpath . 'filmy_online.php</link>

<item>
<title>Akcja</title>
<link>' . webpath . 'filmy_online.php?cat=akcja</link>
<media>' . imgpath . 'fo_akcja.jpg</media>
</item>

<item>
<title>Animowane i familijne</title>
<link>' . webpath . 'filmy_online.php?cat=bajki</link>
<media>' . imgpath . 'fo_bajki.jpg</media>
</item>

<item>
<title>Dramat i obyczajowe</title>
<link>' . webpath . 'filmy_online.php?cat=dramat</link>
<media>' . imgpath . 'fo_dramat.jpg</media>
</item>

<item>
<title>Fantasy</title>
<link>' . webpath . 'filmy_online.php?cat=fantasy</link>
<media>' . imgpath . 'fo_fantasy.jpg</media>
</item>

<item>
<title>Horror i thriller</title>
<link>' . webpath . 'filmy_online.php?cat=horror</link>
<media>' . imgpath . 'fo_horror.jpg</media>
</item>

<item>
<title>Komedia</title>
<link>' . webpath . 'filmy_online.php?cat=komedia</link>
<media>' . imgpath . 'fo_komedia.jpg</media>
</item>

<item>
<title>Przygodowy</title>
<link>' . webpath . 'filmy_online.php?cat=przygodowy</link>
<media>' . imgpath . 'fo_przygodowy.jpg</media>
</item>

<item>
<title>Romans</title>
<link>' . webpath . 'filmy_online.php?cat=romans</link>
<media>' . imgpath . 'fo_romans.jpg</media>
</item>

<item>
<title>Sci-fi</title>
<link>' . webpath . 'filmy_online.php?cat=sci-fi</link>
<media>' . imgpath . 'fo_sci-fi.jpg</media>
</item>

<item>
<title>Sportowy</title>
<link>' . webpath . 'filmy_online.php?cat=sportowy</link>
<media>' . imgpath . 'fo_sportowy.jpg</media>
</item>

<item>
<title>Western</title>
<link>' . webpath . 'filmy_online.php?cat=western</link>
<media>' . imgpath . 'fo_western.jpg</media>
</item>

<item>
<title>Wojenny</title>
<link>' . webpath . 'filmy_online.php?cat=wojenny</link>
<media>' . imgpath . 'fo_wojenny.jpg</media>
</item>
';
}


function generateSeriesHeader($cat)	{
echo <<<SER
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">
SER;

echo '
	<onEnter>showIdle();</onEnter>

	<script>
		Jukebox = "http://natanielek.neostrada.pl/' . $cat . '.xml";
		Jukebox_ok = loadXMLFile(Jukebox);
		if (Jukebox_ok == null) {
			Jukebox_itemSize = 0;
			print("Load Jukebox fail ", Jukebox);
		}
		else {
			Jukebox_itemSize = getXMLElementCount("Jukebox", "Movie");
			print("Jukebox Item Size = ", Jukebox_itemSize);
		}
		if (Jukebox_itemSize &gt; 0) {
			Category_Title = getXMLText("Jukebox", "Category", "title");
			Category_Background ="' . imgpath . 'filmy_online.jpg";
			Category_RSS =getXMLText("Jukebox", "Category", "link");
			count=0;
			while(1) {
				Movie_ID = getXMLText("Jukebox", "Movie", count, "id");
				Movie_Title = getXMLText("Jukebox", "Movie", count, "title");
				Movie_Poster = getXMLText("Jukebox", "Movie", count, "poster");
				Movie_File = getXMLText("Jukebox", "Movie", count, "file");

				Movie_ID_Array = pushBackStringArray(Movie_ID_Array, Movie_ID);
				Movie_Title_Array = pushBackStringArray(Movie_Title_Array, Movie_Title);
				Movie_Poster_Array = pushBackStringArray(Movie_Poster_Array, Movie_Poster);
				Movie_File_Array = pushBackStringArray(Movie_File_Array, Movie_File);

				count += 1;
				if (count &gt; Jukebox_itemSize) {
					break;
				}
			}
		}
		setFocusItemIndex(0); 
		Current_Item_index=0;
	</script>

   	<mediaDisplay
	     name="photoFocusView"
	     fontSize="13"
	     backgroundColor="0:0:0"
	     bottomYPC="89"
	     idleImageHeightPC="16"
	     idleImageWidthPC="9"
	     imageParentFocus="null"
	     itemBackgroundColor="-1:-1:-1"
	     rowCount="1"
	     showDefaultInfo="yes"
	     showHeader="no"
	     sideColorTop="0:0:0"
	     sideTopHeightPC="0"
	     sideBottomHeightPC="0"
	     itemBorderColor=-1:-1:-1
	     itemBorderPC="0"
	     sideColorBottom="30:0:0"
	     columnCount="9"
	     itemPerPage="9"
	     itemBackgroundHeightPC="18.2"
	     itemBackgroundWidthPC="8"
	     itemHeightPC="16"
	     itemWidthPC="6.6"
	     itemOffsetXPC="4.5"
	     itemOffsetYPC="50"
	     itemGapXPC="2"
	     focusItemOffsetYPC="26.1"
	     focusItemWidthPC="19.2"
	     focusItemHeightPC="47.8"
	     focusItemBackgroundWidthPC="23.9"
	     focusItemBackgroundHeightPC="55"
     >

<idleImage>' . imgpath . 'loader_1.png</idleImage>
<idleImage>' . imgpath . 'loader_2.png</idleImage>
<idleImage>' . imgpath . 'loader_3.png</idleImage>
<idleImage>' . imgpath . 'loader_4.png</idleImage>
<idleImage>' . imgpath . 'loader_5.png</idleImage>
<idleImage>' . imgpath . 'loader_6.png</idleImage>
<idleImage>' . imgpath . 'loader_7.png</idleImage>
<idleImage>' . imgpath . 'loader_8.png</idleImage>

		<backgroundDisplay>
			<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">
				<script>
					print(Category_Background);
				</script>
			</image>
		</backgroundDisplay>

		<text redraw="no" align="center" offsetXPC="4" offsetYPC="3" widthPC="90" heightPC="10" fontSize="20" backgroundColor="-1:-1:-1" foregroundColor="192:192:192">
			<script>
				print(Category_Title);
			</script>
		</text>

	<onUserInput>
			<script>
				userInput = currentUserInput();

				Current_Item_index=getFocusItemIndex();
				Max_index = (-1 + Jukebox_itemSize);
				Prev_index = (-1 + Current_Item_index);
				Next_index = (1 + Current_Item_index);
				Prev10_index = (-10 + Current_Item_index);
				Next10_index = (10 + Current_Item_index);

				if (userInput == "pageup" &amp;&amp; Current_Item_index &gt; 9) {
					setFocusItemIndex(Prev10_index); 
					"true";
					redrawDisplay();
				} else if (userInput == "pagedown"  &amp;&amp; Current_Item_index &lt; (Max_index - 9)) {
					setFocusItemIndex(Next10_index); 
					"true";
					redrawDisplay();
				} else if (userInput == "left") {
					"false";
				} else if (userInput == "right") {
					"false";
				}
			</script>
	</onUserInput>
</mediaDisplay>

	<item_template>
		<displayTitle>
			<script>
				displayTitle=getStringArrayAt(Movie_Title_Array , -1);
				print(displayTitle);
			</script>
		</displayTitle>
		<onClick>
                        <script>
                                showIdle();
                                Current_Movie_File=getStringArrayAt(Movie_File_Array , Current_Item_index);
                                playItemURL(Current_Movie_File, 0, "");
                        </script>
    </onClick>
		<media:thumbnail>
			<script>
				Movie_Poster = getStringArrayAt(Movie_Poster_Array , -1);
				print(Movie_Poster);
			</script>
		</media:thumbnail>
	</item_template>

	<channel>
		<title><script>Category_Title;</script></title>
		<link><script>Category_RSS;</script></link>
		<itemSize><script>	Jukebox_itemSize;</script></itemSize>
';
}

function generateFooter()	{
echo <<<FOO
</channel>
</rss>
FOO;
}

if (isset($_GET['cat'])) {
	generateSeriesHeader($_GET['cat']);
	generateFooter();
}
else	{
	generateIndexHeader();
	generateFooter();
}
?>