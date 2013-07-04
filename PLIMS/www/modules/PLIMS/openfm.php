<?php

define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

function generateIndexHeader()	{
echo <<<HEA
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<onExit>                
  playItemURL(-1, 1);
</onExit>

<mediaDisplay name="photoView" showHeader="no" rowCount="3" columnCount="4" columnPerPage="1" drawItemText="no" showDefaultInfo="no" itemOffsetXPC="1" itemOffsetYPC="67" sliding="no" itemBorderColor="0:128:255" itemHeightPC="9" itemWidthPC="23.4" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" bottomYPC="100" sideTopHeightPC="0" mainPartColor="-1:-1:-1" sideColorBottom="-1:-1:-1" sideColorTop="-1:-1:-1">
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

<itemDisplay>
<text align="center" redraw="no" offsetXPC="1" offsetYPC="1" widthPC="92" heightPC="98" fontSize="14" >
<script>
	getItemInfo(-1, "title");
</script>
</text>
</itemDisplay>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'openfm.jpg</image>
</backgroundDisplay>
</mediaDisplay>		
				
<channel>
';

$kanaly = array('Szczególnie Polecamy', 'Impreza', 'Pop', 'Hip-Hop/RnB', 'Rock/Metal', 'Alternatywa', 'Reggae', 'Elektronika', 'Jazz', 'Inne');
$skroty = array('pol', 'impr', 'pop', 'hhrnb', 'RM', 'alt', 'reG', 'elek', 'jazz', 'inne');
 
for($x = 0; $x < 10; $x++) {
	echo '
<item>
<title>' . $kanaly[$x] . '</title>
<link>' . webpath . 'openfm.php?category=' . $skroty[$x] . '</link>
</item>
';
	}
}


function generateSeriesHeader($cat)	{
echo <<<SER
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" rowCount="3" columnCount="3" drawItemText="no" showDefaultInfo="yes" showHeader="no" itemOffsetXPC="10" itemOffsetYPC="11" sliding="yes" itemBorderColor="255:255:255" itemHeightPC="23" itemWidthPC="25" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" sideColorBottom="0:0:0" sideColorTop="-1:-1:-1" bottomYPC="90">
SER;

echo '
<idleImage>' . imgpath . 'loader_1.png</idleImage>
<idleImage>' . imgpath . 'loader_2.png</idleImage>
<idleImage>' . imgpath . 'loader_3.png</idleImage>
<idleImage>' . imgpath . 'loader_4.png</idleImage>
<idleImage>' . imgpath . 'loader_5.png</idleImage>
<idleImage>' . imgpath . 'loader_6.png</idleImage>
<idleImage>' . imgpath . 'loader_7.png</idleImage>
<idleImage>' . imgpath . 'loader_8.png</idleImage>

<itemDisplay>
<image redraw="no" offsetXPC="1" offsetYPC="1" widthPC="98" heightPC="98">
<script>
	getItemInfo(-1, "media");
</script>
</image>
</itemDisplay>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'openfm.jpg</image>
<image redraw="no" offsetXPC="4" offsetYPC="2" widthPC="92" heightPC="90">' . imgpath . 'frame.png</image>
</backgroundDisplay>

<onUserInput>
<script>
	userInput = currentUserInput();

	if( userInput == "ENTR" || userInput == "enter" || userInput == "video_play" ) {
		streamURL = getItemInfo(-1, "stream");
		if (streamURL != null){
			showidle();  
			playItemURL(-1, 1);
			cancelIdle();
			playItemURL(streamURL, 5);
		}
	}
	
	"false";
</script>
</onUserInput>
</mediaDisplay>

<channel>
';

	switch ($cat) {
    case "pol":
        $kanaly = Array(
		array("IMPREZA",'http://gr-relay-1.gaduradio.pl/2','http://open.fm/files/openfm/impreza_0.png'),
		array("IMPREZA PL",'http://gr-relay-1.gaduradio.pl/12','http://open.fm/files/openfm/impreza_0.png'),
		array("TOP SUMMER HITS",'http://gr-relay-1.gaduradio.pl/75','http://open.fm/files/openfm/tsh_www_0.png'),
		array("HIP-HOP KEMP",'http://gr-relay-1.gaduradio.pl/18','http://open.fm/files/openfm/HHK_www.png'),
		array("VIVA",'http://gr-relay-1.gaduradio.pl/64','http://openfm.festiwalmtv.pl/viva-2/images/logo_viva_radio.png'),
		array("MTV",'http://gr-relay-1.gaduradio.pl/51','http://px.wporzo.pl/stuff/mtv.PNG'),
		array("MTV ROCKS",'http://gr-relay-1.gaduradio.pl/77','http://open.fm/files/openfm/logo_mtv_rocks_radio_500x500_dostosowane_do_czarne_tlo1111.png'),
		array("MAYDAY",'http://gr-relay-1.gaduradio.pl/80','http://open.fm/files/openfm/logo_MAYDAY_150x150.png'),
		array("DISCO POLO",'http://gr-relay-1.gaduradio.pl/21','http://open.fm/files/openfm/DiscoPolo_logo_180x82.png'),
		array("DISCO POLO FRESZZZ",'http://gr-relay-1.gaduradio.pl/57','http://open.fm/files/openfm/DiscoPoloFreszzz_logo_153x82.png'),
		array("DISCO POLO CLASSIC",'http://gr-relay-1.gaduradio.pl/49','http://open.fm/files/openfm/DiscoPoloClassic_logo_155x82.png'),
		array("500 NAJWIĘKSZYCH HITÓW",'http://gr-relay-1.gaduradio.pl/11','http://open.fm/files/openfm/500_best_www.png')
		);
        break;
		
    case "impr":
        $kanaly = Array(
		array("500 PARTY HITS",'http://gr-relay-1.gaduradio.pl/81','http://open.fm/files/openfm/party_500x500www.png'),
		array("DANCE",'http://gr-relay-1.gaduradio.pl/31','http://open.fm/files/openfm/dance_na_site.png'),
		array("TRANCE",'http://gr-relay-1.gaduradio.pl/7','http://open.fm/files/openfm/trance_ftb_1.png'),
		array("HOUSE",'http://gr-relay-1.gaduradio.pl/5','http://open.fm/files/openfm/house150x150.png'),
		array("KLUB 90",'http://gr-relay-1.gaduradio.pl/8','http://open.fm/files/openfm/klub90_0.png'),
		array("ITALO DISCO",'http://gr-relay-1.gaduradio.pl/27','http://open.fm/files/openfm/italodisco.png')
		);
        break;
		
    case "pop":
        $kanaly = Array(
		array("500 POP HITS",'http://gr-relay-1.gaduradio.pl/83','http://open.fm/files/openfm/pop_500x500_0.png'),
		array("FRESZZZ",'http://gr-relay-1.gaduradio.pl/39','http://open.fm/files/openfm/fresz.png'),
		array("PO POLSKU",'http://gr-relay-1.gaduradio.pl/1','http://open.fm/files/openfm/po_polsku_150x1502.png'),
		array("PO POLSKU CLASSIC",'http://gr-relay-1.gaduradio.pl/79','http://open.fm/files/openfm/po_polsku_150x1502_classic_1_2.png'),
		array("PO POLSKU CLASSIC 2",'http://gr-relay-1.gaduradio.pl/17','http://open.fm/files/openfm/po_polsku_150x150_classic_2_2.png'),
		array("LEJDIS CAFÉ",'http://gr-relay-1.gaduradio.pl/48','http://open.fm/files/openfm/lejdis_500x500_biale.png'),
		array("CREMA CAFÉ",'http://gr-relay-1.gaduradio.pl/76','http://open.fm/files/openfm/crema_square.png'),
		array("WE DWOJE",'http://gr-relay-1.gaduradio.pl/4','http://open.fm/files/openfm/wedwoje_0.png'),
		array("BALLADY WSZECH CZASÓW",'http://gr-relay-1.gaduradio.pl/20','http://open.fm/files/openfm/ballady.png'),
		array("100% MICHAEL JACKSON",'http://gr-relay-1.gaduradio.pl/10','http://open.fm/files/openfm/mj_115x83.png'),
		array("LATINO",'http://gr-relay-1.gaduradio.pl/19','http://open.fm/files/openfm/latino_0.png'),
		array("TEENS",'http://gr-relay-1.gaduradio.pl/69','http://open.fm/files/openfm/teens_www_0.png'),
		array("100% JUSTIN BIEBER",'http://gr-relay-1.gaduradio.pl/63','http://open.fm/files/openfm/100justin_www_0.png'),
		array("00s HITS",'http://gr-relay-1.gaduradio.pl/72','http://open.fm/files/openfm/00_150x150_white.png'),
		array("90s HITS",'http://gr-relay-1.gaduradio.pl/14','http://open.fm/files/openfm/90_150x150_white.png'),
		array("80s HITS",'http://gr-relay-1.gaduradio.pl/3','http://open.fm/files/openfm/80_150x150_white.png'),
		array("60s & 70s HITS",'http://gr-relay-1.gaduradio.pl/56','http://open.fm/files/openfm/60i70_150x150_white.png'),
		array("CLASSIC HITS",'http://gr-relay-1.gaduradio.pl/46','http://open.fm/files/openfm/classic_150x150_white.png')
		);
        break;
		
    case "RM":
        $kanaly = Array(
		array("500 ROCK HITS",'http://gr-relay-1.gaduradio.pl/82','http://open.fm/files/openfm/rock_500x500_bialewww_0.png'),
		array("POLSKI ROCK",'http://gr-relay-1.gaduradio.pl/29','http://open.fm/files/openfm/polskirock_0.png'),
		array("POLSKI ROCK CLASSIC",'http://gr-relay-1.gaduradio.pl/45','http://open.fm/files/openfm/polski_rock_classic_150x150.png'),
		array("POP-ROCK ZONE",'http://gr-relay-1.gaduradio.pl/53','http://open.fm/files/openfm/rock_pop_www.png'),
		array("ROCK BALLADY",'http://gr-relay-1.gaduradio.pl/61','http://open.fm/files/openfm/rock_ballady_www.png'),
		array("CLASSIC ROCK",'http://gr-relay-1.gaduradio.pl/32','http://open.fm/files/openfm/classicrock_0.png'),
		array("SOLÓWKI WSZECH CZASÓW",'http://gr-relay-1.gaduradio.pl/47','http://open.fm/files/openfm/solowki_czarne_150x150.png'),
		array("AMERICAN ROCK",'http://gr-relay-1.gaduradio.pl/40','http://open.fm/files/openfm/americanrock_0.png'),
		array("PUNK ROCK",'http://gr-relay-1.gaduradio.pl/78','http://open.fm/files/openfm/punkrock_www.png'),
		array("500 HEAVY HITS",'http://gr-relay-1.gaduradio.pl/54','http://open.fm/files/openfm/heavyhits_czarne_150x150.png'),
		array("CIĘŻKIE BRZMIENIA",'http://gr-relay-1.gaduradio.pl/13','http://open.fm/files/openfm/ciezkiebrzmienia_0.png'),
		array("CASTLE PARTY",'http://gr-relay-1.gaduradio.pl/70','http://open.fm/files/openfm/LogoCP_www.png'),
		array("BLUES'N'ROCK",'http://gr-relay-1.gaduradio.pl/43','http://open.fm/files/openfm/bluesnrock_0.png'),
		array("100% DŻEM",'http://gr-relay-1.gaduradio.pl/15','http://open.fm/files/openfm/dzem.png'),
		array("100% KAZIK",'http://gr-relay-1.gaduradio.pl/35','http://open.fm/files/openfm/100_Kazik_www.png'),
		array("100% METALLICA",'http://gr-relay-1.gaduradio.pl/62','http://open.fm/files/openfm/Metallica_www.png'),
		array("100% LINKIN PARK",'http://gr-relay-1.gaduradio.pl/42','http://open.fm/files/openfm/logo_czarne_100_linkinpark_150x150.png'),			
		array("100% DEPECHE MODE",'http://gr-relay-1.gaduradio.pl/74','http://open.fm/files/openfm/dm_www_czarne.png')
		);
        break;
		
    case "alt":
        $kanaly = Array(
		array("500 ALTERNATIVE HITS",'http://gr-relay-1.gaduradio.pl/55','http://open.fm/files/openfm/alternative_czarne_150x150.png'),
		array("ALT FRESZZZ",'http://gr-relay-1.gaduradio.pl/6','http://open.fm/files/openfm/alt_fresh_150x150.png'),
		array("ALT CLUB",'http://gr-relay-1.gaduradio.pl/9','http://open.fm/files/openfm/alt_club_150x150.png'),
		array("ALT CAFÉ",'http://gr-relay-1.gaduradio.pl/34','http://open.fm/files/openfm/alt_cafe_150x150.png'),
		array("ALT PL",'http://gr-relay-1.gaduradio.pl/36','http://open.fm/files/openfm/alt_pl_150x150.png')
		);
        break;
	
    case "reG":
        $kanaly = Array(
		array("REGGAENERACJA",'http://gr-relay-1.gaduradio.pl/30','http://open.fm/files/openfm/reggaeneracja.png'),
		array("POLISH REGGAE STYLEE",'http://gr-relay-1.gaduradio.pl/22','http://open.fm/files/openfm/polishreggae.png'),
		array("SKA ROOTS REGGAE",'http://gr-relay-1.gaduradio.pl/44','http://open.fm/files/openfm/skarootsreggae.png')
		);
        break;

    case "elek":
        $kanaly = Array(
		array("MINIMAL TECHNO",'http://gr-relay-1.gaduradio.pl/50','http://open.fm/files/openfm/minimalTechno150x150.png'),
		array("DRUM'N'BASS",'http://gr-relay-1.gaduradio.pl/41','http://open.fm/files/openfm/drumnbass.png'),
		array("DUBSTEP",'http://gr-relay-1.gaduradio.pl/68','http://open.fm/files/openfm/dubstep_www.png'),
		array("TRIP HOP",'http://gr-relay-1.gaduradio.pl/71','http://open.fm/files/openfm/triphop_www.png'),
		array("CHILLOUT",'http://gr-relay-1.gaduradio.pl/33','http://open.fm/files/openfm/chill_out150x150.png')
		);
        break;

    case "hhrnb":
        $kanaly = Array(
		array("500 HIP-HOP HITS",'http://gr-relay-1.gaduradio.pl/84','http://open.fm/files/openfm/hh_500x500_bialewww.png'),
		array("HIP-HOP PL",'http://gr-relay-1.gaduradio.pl/24','http://open.fm/files/openfm/hiphop_pl150x150.png'),
		array("HIP-HOP STACJA",'http://gr-relay-1.gaduradio.pl/23','http://open.fm/files/openfm/hhstacja_0.png'),
		array("SOUL & R'N'B",'http://gr-relay-1.gaduradio.pl/26','http://open.fm/files/openfm/rnb_www.png')
		);
        break;	
		
    case "jazz":
        $kanaly = Array(
		array("JAZZ",'http://gr-relay-1.gaduradio.pl/25','http://open.fm/files/openfm/jazz_0.png'),
		array("SMOOTH JAZZ",'http://gr-relay-1.gaduradio.pl/60','http://open.fm/files/openfm/smooth_jazz_www.png')
		);
        break;	

    case "inne":
        $kanaly = Array(
		array("MUZYKA KLASYCZNA",'http://gr-relay-1.gaduradio.pl/67','http://open.fm/files/openfm/na_sajt.png'),
		array("WIELKIE HITY FILMOWE",'http://gr-relay-1.gaduradio.pl/38','http://open.fm/files/openfm/wielkiehityfilmowe_0.png'),
		array("KRAINA ŁAGODNOŚCI",'http://gr-relay-1.gaduradio.pl/37','http://open.fm/files/openfm/krainalagodnosci.png'),
		array("SZANTY",'http://gr-relay-1.gaduradio.pl/28','http://open.fm/files/openfm/szanty_0.png'),
		array("BIESIADA",'http://gr-relay-1.gaduradio.pl/59','http://open.fm/files/openfm/biesiada_www.png'),
		array("BIESIADA ŚLĄSKA",'http://gr-relay-1.gaduradio.pl/66','http://open.fm/files/openfm/bsWWW.png'),
		array("KIDS",'http://gr-relay-1.gaduradio.pl/16','http://open.fm/files/openfm/kids_0.png'),
		array("ODGŁOSY NATURY",'http://gr-relay-1.gaduradio.pl/52','http://open.fm/files/openfm/odglosynatury.png')
		);
        break;	
	}
	
	foreach ($kanaly as $kan)	{
		echo '
<item>
<title>' . $kan[0] . '</title>
<media>' . $kan[2] . '</media>
<stream>' . $kan[1] . '</stream>
</item>
';
	};
}

function generateFooter()	{
echo <<<FOO
</channel>
</rss>
FOO;
}

if (isset($_GET['category'])) {
	generateSeriesHeader($_GET['category']);
	generateFooter();
}
else	{
	generateIndexHeader();
	generateFooter();
}
?>