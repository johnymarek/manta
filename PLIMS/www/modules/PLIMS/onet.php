<?php

error_reporting(0);
define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');	

$konfig = simplexml_load_file(dirpath . 'ustawienia.xml');
switch ($konfig->quality) {
	case 0:
		define("jakosc", '256');
		break;
	case 1:
		define("jakosc", '400');
		break;
	case 2:
		define("jakosc", '800');
		break;
	default:
		define("jakosc", '256');
}

if (!empty($konfig->nritems))	{
	define("ONET_NRITEMS", $konfig->nritems);
}
else	{
	define("ONET_NRITEMS", 15);
}

function generateIndex()	{
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
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'onetvod-index.jpg</image>
</backgroundDisplay>
</mediaDisplay>
				
<channel>
';
}


function generateIndexHeader()	{
$kanaly = array('Wiadomości', 'Religia', 'Rozrywka', 'Film', 'Gry', 'Biznes', 'Sport', 'Styl życia', 'Muzyka', 'Podróże', 'Edukacja', 'Moto', 'Facet', 'Wnętrza', 'Zdrowie', 'Nowe Technologie');
$skroty = array('wiado', 'rel', 'rozr', 'film', 'gry', 'biz', 'sport', 'styl', 'muz', 'pod', 'edu', 'moto', 'facet', 'wnet', 'zdro', 'nowtech');
 
for($x = 0; $x < 16; $x++) {
	echo '
<item>
<title>' . $kanaly[$x] . '</title>
<link>' . webpath . 'onet.php?category=' . $skroty[$x] . '</link>
</item>
';
	}
}

function generateSeriesHeader($cat)	{
//wiado', 'rel', 'rozr', 'film', 'gry', 'biz', 'sport', 'styl', 'muz', 'pod', 'edu', 'moto', 'facet', 'wnet', 'zdro', 'nowtech

	switch ($cat) {
    case "wiado":
        $channel = 1;
		$kanaly = Array(
		array("Kraj",'Kraj'),
		array("Świat",'%C5%9Awiat'),
		array("Polska Regionalna",'Polska_regionalna'),
		array("CNN",'CNN'),
		array("Pogoda",'Pogoda'),
		array("Ciekawostki",'Ciekawostki'),
		array("Wszystkie",'')
		);
        break;
        
    case "rel":
        $channel = 3;
    $kanaly = Array(
    array("Rozmawiamy",'Rozmawiamy'),
    array("Gotujemy",'Gotujemy'),
    array("Śpiewamy",'%C5%9Apiewamy'),
    array("6 miliardów innych",'6_miliard%C3%B3w_innych'),
    array("Wszystkie",'')
    );
        break;
        
    case "rozr":
        $channel = 5;
    $kanaly = Array(
    array("Rozrywka",'Rozrywka'),
    array("Kultura",'Kultura'),
    array("Sensacje",'Sensacje'),
    array("Muzyczne",'_Muzyczne'),
    array("Ludzie ONETU",'Ludzie_Onetu'),
    array("Wszystkie",'')
    );
        break;
   
    case "film":
         $channel = 7;
    $kanaly = Array(
    array("Komedia",'Komedia'),
    array("Dramat",'Dramat'),
    array("S-F",'S-F'),
    array("Thriller",'Thriller'),
    array("Akcja",'Akcja'),
    array("Animowany",'Animowany'),
    array("Horror",'Horror'),
    array("Wywiady",'Wywiady'),
    array("Reportaże",'Reporta%C5%BCe'),
    array("Wszystkie",'')
    );
        break;

    case "gry":
         $channel = 9;
    $kanaly = Array(
    array("Trailery",'Trailery'),
    array("Gameplay",'Gameplay'),
    array("Kulisy Produkcji",'Kulisy_produkcji'),
    array("Recenzje Wideo",'Recenzja_wideo'),
    array("Wywiady",'Wywiady'),
    array("Imprezy",'Imprezy'),
    array("Wszystkie",'')
    );
        break;
                 
    case "biz":
         $channel = 11;
    $kanaly = Array(
    array("TVN",'TVN'),
    array("TVN24",'TVN24'),
    array("TVN CNBC",'TVN_CNBC'),
    array("CNN",'CNN'),
    array("Reuters",'Reuters'),
    array("OnetBiznes",'OnetBiznes'),
    array("Deutsche Welle",'Deutsche_Welle'),
    array("TVBiznes",'TV_Biznes'),
    array("Wszystkie",'')
    );
        break;
               
    case "sport":
         $channel = 2;
    $kanaly = Array(
    array("Piłka Nożna",'Pi%C5%82ka_no%C5%BCna'),
    array("Sporty Zimowe",'Sporty_zimowe'),
    array("Formuła 1",'Formu%C5%82a_1'),
    array("Tenis",'Tenis'),
    array("Koszykówka",'Koszyk%C3%B3wka'),
    array("Boks",'Boks'),
    array("eMeReS",'eMeReS'),
    array("TVP Sport",'TVP_Sport'),
    array("Wszystkie",'')
    );
        break;

    case "styl":
         $channel = 4;
    $kanaly = Array(
    array("Moda",'Moda'),
    array("Gwiazdy",'Gwiazdy'),
    array("Uroda",'Uroda'),
    array("Fitness",'Fitness'),
    array("Gotowanie",'Gotowanie'),
    array("Dziecko",'Dziecko'),
    array("Magia",'Magia'),
    array("Inne",'Inne'),
    array("Wszystkie",'')
    );
        break;
    
    case "muz":
         $channel = 6;
    $kanaly = Array(
    array("Pop",'Pop'),
    array("Alternatywa",'Alternatywa'),
    array("Rock",'Rock'),
    array("Metal",'Metal'),
    array("Hip-Hop",'Hip-Hop'),
    array("RnB",'RnB'),
    array("Klubowa",'Klubowa'),
    array("Wszystkie",'')
    );
        break;

    case "pod":
         $channel = 8;
    $kanaly = Array(
    array("Kraje i Regiony",'Kraje_i_regiony'),
    array("Aktywnie",'Aktywnie'),
    array("TV",'TV'),
    array("Ekstremalnie",'Ekstremalnie'),
    array("Wasze Filmy",'Wasze_filmy'),
    array("Goście",'Go%C5%9Bcie'),
    array("Wszystkie",'')
    );
        break;

    case "edu":
         $channel = 10;
    $kanaly = Array(
    array("Nauka Języków",'Nauka_j%C4%99zyk%C3%B3w'),
    array("Niesławne miejsca",'Niesławne_miejsca'),
    array("Czy wiesz?",'Czy_wiesz'),
    array("da Vinci Learning",'Da_Vinci_Learning'),
    array("Mały Einstein",'Mały_Einstein'),
    array("BBC",'BBC'),
    array("Know It",'Know_it'),
    array("Wszystkie",'')
    );
        break;

    case "moto":
         $channel = 12;
    $kanaly = Array(
    array("MOTO TV",'Moto_TV'),
    array("PRZEJEZDNA24",'Przejezdna24'),
    array("Testy",'Testy'),
    array("Modele",'Modele'),
    array("Porady",'Porady'),
    array("Inne",'Inne'),
    array("Wszystkie",'')
    );
        break;
   
    case "facet":
         $channel = 32;
    $kanaly = Array(
    array("Erotyka",'Erotyka'),
    array("Modelki",'Modelki'),
    array("Adrenalina",'Adrenalina'),
    array("Moda",'Moda'),
    array("Mężczyźni",'M%C4%99%C5%BCczy%C5%BAni'),
    array("Kulinaria",'Kulinaria'),
    array("Porady",'Porady'),
    array("Wszystkie",'')
    );
        break;    
         
    case "wnet":
         $channel = 33;
    $kanaly = Array(
    array("Design",'Design'),
    array("Architektura",'Architektura'),
    array("Porady",'Porady'),
    array("Metamorfozy",'Metamorfozy'),
    array("Wnętrzarskie inspiracje",'Wn%C4%99trzarskie_inspiracje'),
    array("Gwiazdy",'Gwiazdy'),
    array("Wszystkie",'')
    );
        break;    
             
    case "zdro":
         $channel = 34;
    $kanaly = Array(
    array("Zdrowie dla każdego",'Zdrowie_dla_ka%C5%BCdego'),
    array("Kobiece choroby",'Kobiece_choroby'),
    array("Choroby dziecięce",'Choroby_dzieci%C4%99ce'),
    array("Problemy seniorów",'Problemy_senior%C3%B3w'),
    array("Wszystkie",'')
    );
        break;    
                                                                             
    case "nowtech":
         $channel = 31;
    $kanaly = Array(
    array("Komórki",'Kom%C3%B3rki'),
    array("Laptopy",'Laptopy'),
    array("Foto",'Foto'),
    array("RTV",'RTV'),
    array("Internet i programy",'Internet_i_programy'),
    array("GPS",'GPS'),
    array("Wszystkie",'')
    );
         break;
	}
	
	foreach ($kanaly as $kan)	{
		echo '
<item>
<title>' . $kan[0] . '</title>
<link>' . webpath . 'onet.php?channel=' . $channel . '&amp;topic=' . $kan[1] . '</link>
</item>
';
	};
}


function showItems($cha, $top)	{
echo <<<SER
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="photoView" rowCount="3" columnCount="4" drawItemText="no" showDefaultInfo="no" showHeader="no" itemOffsetXPC="10" itemOffsetYPC="11" sliding="yes" itemBorderColor="255:255:255" itemHeightPC="15" itemWidthPC="18" itemBackgroundColor="0:0:0" idleImageXPC="92" idleImageYPC="93" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" sideColorBottom="0:0:0" sideColorTop="-1:-1:-1" bottomYPC="90">
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

<text align="left" redraw="yes" offsetXPC="5" offsetYPC="68" widthPC="92"
heightPC="5" fontSize="16" backgroundColor="0:0:0">
<script>
       getItemInfo(-1, "title");
</script>
</text>

<text align="left" redraw="yes" offsetXPC="5" offsetYPC="74" widthPC="92" heightPC="5" fontSize="12" backgroundColor="0:0:0">
<script>
	"Czas trwania: " + getItemInfo(-1, "long");
</script>
</text>

<text align="left" redraw="yes" offsetXPC="5" offsetYPC="79" widthPC="92" heightPC="5" fontSize="12" backgroundColor="0:0:0">
<script>
	"Dzień publikacji materiału: " + getItemInfo(-1, "date");
</script>
</text>

<text align="left" redraw="yes" offsetXPC="5" offsetYPC="84" widthPC="92" heightPC="5" fontSize="12" backgroundColor="0:0:0">
<script>
	"Godzina publikacji materiału: " + getItemInfo(-1, "time");
</script>
</text>

<itemDisplay>
<image redraw="no" offsetXPC="1" offsetYPC="1" widthPC="98" heightPC="98">
<script>
	getItemInfo(-1, "media");
</script>
</image>
</itemDisplay>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'openfm.jpg</image>
<image redraw="no" offsetXPC="4" offsetYPC="2" widthPC="92" heightPC="65">' . imgpath . 'frame.png</image>
</backgroundDisplay>

</mediaDisplay>

<channel>
';
	
	if (!empty($top))	{
		$xml_link = 'http://www.onet.tv/feed/getMoviesCategoryOrTagsDate,' . ONET_NRITEMS . ',1,desc,movies.xml?category=' . $cha . '&tags=%28' . urlencode($top) . '%29&rss=1';
	}
	else	{
		$xml_link = 'http://www.onet.tv/feed/getMoviesCategoryOrTagsDate,' . ONET_NRITEMS . ',1,desc,movies.xml?category=' . $cha . '&rss=1';
	}
	
	$xm = simplexml_load_file($xml_link);
	if ($xm === FALSE) die('Wrong XML');

	foreach ($xm->entry as $item) {
		$datetemp = str_replace("+01:00", "", $item->published);
		$date = explode("T", $datetemp);
		
		$onettv = $item->children('onettv', true);
		foreach ($onettv->streams->stream as $streams)	{
			if ($streams->bitrate == jakosc)	{
				$stream = 'http://www.onet.tv' . $streams->url;
			}
			else	{
				$stream = 'http://www.onet.tv' . $onettv->streams->stream[0]->url;
			}
		}
		
		echo '
<item>
<title>' . $item->title . '</title>
<link>' . $stream . '</link>
<enclosure type="video/x-flv" url="' . $stream . '"/>
<media>' . $item->link[2]['href'] . '</media>
<long>' . $onettv->duration . '</long>
<date>' . $date[0] . '</date>
<time>' . $date[1] . '</time>
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
	generateIndex();
	generateSeriesHeader($_GET['category']);
	generateFooter();
}
elseif (isset($_GET['channel'])) {
	showItems($_GET['channel'],$_GET['topic']);
	generateFooter();
}
else	{
	generateIndex();
	generateIndexHeader();
	generateFooter();
}
?>