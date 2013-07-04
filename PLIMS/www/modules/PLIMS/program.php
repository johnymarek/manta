<?php

define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

define("tel1", 'http://www.telemagazyn.pl/rss/');
define("tel2", ',stacja,st,krss.xml');

function geturl($url)	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)");
		$html = curl_exec($ch);
		curl_close($ch);
		return $html;
}

function get_string_between($string, $start, $end){
	$string = " ".$string;
	$ini = strpos($string,$start);
	if ($ini == 0) return "";
	$ini += strlen($start);
	$len = strpos($string,$end,$ini) - $ini;
	return substr($string,$ini,$len);
}

function generateIndexHeader()	{
echo <<<HEA
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="onePartView" itemImageXPC="42" itemImageYPC="15" itemImageHeightPC="7" itemImageWidthPC="7" itemXPC="50" itemYPC="14" itemHeightPC="9" itemWidthPC="42" itemPerPage="8" backgroundColor="0:0:0" showHeader="no" idleImageXPC="82" idleImageYPC="80" idleImageWidthPC="4.65" idleImageHeightPC="8.25" sideColorBottom="0:0:0" sideColorTop="0:0:0" sideColorLeft="0:0:0" sideColorRight="0:0:0" mainPartColor="0:0:0" showDefaultInfo="no">
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

<text redraw="yes" offsetXPC="50" offsetYPC="85" widthPC="40" heightPC="5" fontSize="14" backgroundColor="0:0:0">
<script>
Add(1, getFocusItemIndex()) + "/58";
</script>
</text>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . 'programtv_1.jpg</image>
</backgroundDisplay>
</mediaDisplay>		
				
<channel>

<item>
<title>Hity Dnia</title>
<link>' . webpath . 'program.php?category=' . tel1 . 'hit,krss.xml</link>
<media:thumbnail url="http://s.telemagazyn.pl/g/logo.gif" width="120" height="90" />
</item>
';

echo '
<item>
<title>TVP1</title>
<link>' . webpath . 'program.php?category=' . tel1 . '14' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/36e944e5f23789fff848b52f88cbd642,0,1.png" width="120" height="90" />
</item>
	
<item>
<title>TVP2</title>
<link>' . webpath . 'program.php?category=' . tel1 . '22' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/fd72e929ec0412526f820d75161de0c2,0,1.png" width="120" height="90" />
</item>
		
<item>
<title>Polsat</title>
<link>' . webpath . 'program.php?category=' . tel1 . '23' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/a4d38ef58dda254e3f80e4bc32131132,0,1.png" width="120" height="90" />
</item>

<item>
<title>Polsat 2</title>
<link>' . webpath . 'program.php?category=' . tel1 . '55' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/a95d13a4f297e21d777d1601d3b8dd5e,0,1.png" width="120" height="90" />
</item>
		
<item>
<title>TVN</title>
<link>' . webpath . 'program.php?category=' . tel1 . '24' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/0db995776e99d25002892fb762dc3bc9,0,1.png" width="120" height="90" />
</item>

<item>
<title>TVN 7</title>
<link>' . webpath . 'program.php?category=' . tel1 . '26' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/d4957755055549213cf5da078d8099d1,0,1.png" width="120" height="90" />
</item>
		
<item>
<title>TV4</title>
<link>' . webpath . 'program.php?category=' . tel1 . '25' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/b680ba94318224f08bd25a542b02a846,0,1.png" width="120" height="90" />
</item>

<item>
<title>TV Puls</title>
<link>' . webpath . 'program.php?category=' . tel1 . '29' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/b765822f9a9ab6fc9bec727ffa5dca6c,0,1.jpg" width="120" height="90" />
</item>

<item>
<title>TV Puls 2</title>
<link>' . webpath . 'program.php?category=' . tel1 . '591' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/0e3c066953297d5cc277aa4085380150,0,1.jpg" width="120" height="90" />
</item>

<item>
<title>TTV</title>
<link>' . webpath . 'program.php?category=' . tel1 . '293' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/6ec98212b4c4496367a5175cb44f1af7,0,1.png" width="120" height="90" />
</item>

<item>
<title>TELE5</title>
<link>' . webpath . 'program.php?category=' . tel1 . '3' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/c8ef69f9522bcb4b126b898d1fa466eb,0,1.jpg" width="120" height="90" />
</item>

<item>
<title>TVP Polonia</title>
<link>' . webpath . 'program.php?category=' . tel1 . '28' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/1b50afb24a1adf791f1ea789a26a75c1,0,1.png" width="120" height="90" />
</item>

<item>
<title>TVN Turbo HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '46' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/2bf190ce8f71967c45c9f67b6b6b0b13,0,1.png" width="120" height="90" />
</item>

<item>
<title>TVN Style HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '237' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/d76ad4c9810407d505df1b1c157edd9f,0,1.png" width="120" height="90" />
</item>

<item>
<title>TVP HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '233' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/1ba17ec5052944384e99d5024d985c1a,0,1.png" width="120" height="90" />
</item>

<item>
<title>Ale Kino</title>
<link>' . webpath . 'program.php?category=' . tel1 . '34' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/bcebe21ad75c4c6d2ee359ebe03b0529,0,1.png" width="120" height="90" />
</item>

<item>
<title>AXN HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '274' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/370411b1baefddb09ba6d87a62a892f3,0,1.png" width="120" height="90" />
</item>

<item>
<title>AXN Crime</title>
<link>' . webpath . 'program.php?category=' . tel1 . '180' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/47c67de66f64fe74083e5463c45c263c,0,1.png" width="120" height="90" />
</item>
	
<item>
<title>AXN Sci-Fi</title>
<link>' . webpath . 'program.php?category=' . tel1 . '181' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/85b1e68978ed11519518bd3fd767b076,0,1.png" width="120" height="90" />
</item>

<item>
<title>Canal + HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '38' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/91e07a71945110e3270a9130a194a551,0,1.png" width="120" height="90" />
</item>

<item>
<title>Canal + Family HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '599' . tel2 . '</link>
<media:thumbnail url="http://d.webgenerator24.pl/k/r/60/45/kokwhzgocscso04ww00skcwogss/c-family.d6fq36u4.png" width="120" height="90" />
</item>

<item>
<title>Canal + Family 2 HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '601' . tel2 . '</link>
<media:thumbnail url="http://d.webgenerator24.pl/k/r/cf/n0/nvxy3rwwkowss4wwowwcsg0koo0/c-family-2.7iefbrc1.png" width="120" height="90" />
</item>

<item>
<title>Canal + Film HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '190' . tel2 . '</link>
<media:thumbnail url="http://www.pay-tv.pl/DATA/pliki/logo/logo_canal+_film.png" width="120" height="90" />
</item>

<item>
<title>Canal + Film 2 HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '605' . tel2 . '</link>
<media:thumbnail url="http://d.webgenerator24.pl/k/r/j6/0r/fwv903wo8gc844c0k4c8s8cs84k/c-film-2.a04pgodr.png" width="120" height="90" />
</item>

<item>
<title>Cinemax</title>
<link>' . webpath . 'program.php?category=' . tel1 . '187' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/48a88a47685d511d5892ea9fdeb0a61a,0,1.png" width="120" height="90" />
</item>

<item>
<title>Comedy Central</title>
<link>' . webpath . 'program.php?category=' . tel1 . '189' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/64a3ac6071a456da0fbfda0fd8333b47,0,1.png" width="120" height="90" />
</item>

<item>
<title>Comedy Central Family</title>
<link>' . webpath . 'program.php?category=' . tel1 . '15' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/0122b46c75384180ca681f52e751d6eb,0,1.jpg" width="120" height="90" />
</item>

<item>
<title>Filmbox HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '202' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/29ba990465e8eddce4154586665ea906,0,1.jpg" width="120" height="90" />
</item>

<item>
<title>FOX HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '278' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/340e41e8fa01af9574f66d1fd7ab73fb,0,1.png" width="120" height="90" />
</item>

<item>
<title>FOXlife HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '279' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/83d0368e1024effad8d6a491e45ca1c9,0,1.png" width="120" height="90" />
</item>

<item>
<title>HBO HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '205' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/ee090aca2ef0532b809ec5b292932ce8,0,1.png" width="120" height="90" />
</item>

<item>
<title>HBO 2 HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '41' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/ff02d2eb0bf42a0c61ee9c081c61a77b,0,1.png" width="120" height="90" />
</item>

<item>
<title>HBO Comedy HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '206' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/bdbc1f5dbf584bcbdc07249050f37f83,0,1.png" width="120" height="90" />
</item>
	
<item>
<title>MGM HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '213' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/d3f58ff5e21d14110fdf394430b56598,0,1.png" width="120" height="90" />
</item>

<item>
<title>Polsat Film</title>
<link>' . webpath . 'program.php?category=' . tel1 . '282' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/b25d1558463677bbc10a589c6579f7e7,0,1.png" width="120" height="90" />
</item>

<item>
<title>13th Street Universal</title>
<link>' . webpath . 'program.php?category=' . tel1 . '248' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/9e150cd94f44f62a647cbe27650fa684,0,1.png" width="120" height="90" />
</item>

<item>
<title>Scifi Universal</title>
<link>' . webpath . 'program.php?category=' . tel1 . '226' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/796ec8401c6deea5943567bbc065190b,0,1.png" width="120" height="90" />
</item>

<item>
<title>Universal Channel</title>
<link>' . webpath . 'program.php?category=' . tel1 . '242' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/d23e55971a12a2997b5950997f53afc1,0,1.png" width="120" height="90" />
</item>

<item>
<title>Kino Polska</title>
<link>' . webpath . 'program.php?category=' . tel1 . '47' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/7bf77302decd6c5874c540ec4ac76aaf,0,1.png" width="120" height="90" />
</item>

<item>
<title>TVP Seriale</title>
<link>' . webpath . 'program.php?category=' . tel1 . '291' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/0ba80e2487df96d9f771518f0fa86e9d,0,1.png" width="120" height="90" />
</item>

<item>
<title>History HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '207' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/fb8f87495e4b3e5452df278949e8aee3,0,1.png" width="120" height="90" />
</item>

<item>
<title>Discovery Channel HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '17' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/46e6b7cde4d1db07f01196b15079eae1,0,1.png" width="120" height="90" />
</item>

<item>
<title>Discovery Science</title>
<link>' . webpath . 'program.php?category=' . tel1 . '19' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/ddd4bb85b291b4d2d7ffa95e34e029c9,0,1.jpg" width="120" height="90" />
</item>

<item>
<title>Discovery World</title>
<link>' . webpath . 'program.php?category=' . tel1 . '36' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/2329f591679c6e2556db8c68595b4a4c,0,1.png" width="120" height="90" />
</item>

<item>
<title>National Geographic HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '168' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/c705db1a001f0f893c99a639ff0e2316,0,1.png" width="120" height="90" />
</item>

<item>
<title>Nat Geo Wild HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '280' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/acb56fbfdfbafca12748c554664aebe8,0,1.png" width="120" height="90" />
</item>

<item>
<title>Planete + HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '52' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/258e56e5775eeef95fe686f8a65ec046,0,1.png" width="120" height="90" />
</item>

<item>
<title>BBC Knowledge HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '184' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/8f34658e9f945c86cf38e518251fc7bb,0,1.png" width="120" height="90" />
</item>

<item>
<title>Crime Investigation Polsat</title>
<link>' . webpath . 'program.php?category=' . tel1 . '579' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/34b7b6220df4f3003639d4ea396b0f79,0,1.png" width="120" height="90" />
</item>

<item>
<title>Mini Mini</title>
<link>' . webpath . 'program.php?category=' . tel1 . '177' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/c59797f3ac70a7d948cea746ae56632d,0,1.png" width="120" height="90" />
</item>

<item>
<title>Boomerang</title>
<link>' . webpath . 'program.php?category=' . tel1 . '186' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/918fb5fc03861c0a53607ceb7e57cd68,0,1.png" width="120" height="90" />
</item>

<item>
<title>Polsat Jim Jam</title>
<link>' . webpath . 'program.php?category=' . tel1 . '210' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/eab1453ccd267ad59011093137c886d1,0,1.png" width="120" height="90" />
</item>

<item>
<title>Disney Channel</title>
<link>' . webpath . 'program.php?category=' . tel1 . '194' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/352d770b7ed8c6c185c66c3fe0416200,0,1.png" width="120" height="90" />
</item>

<item>
<title>Disney XD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '44' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/88540478bd99c4000ae954a3f1e870cc,0,1.png" width="120" height="90" />
</item>

<item>
<title>Cartoon Network</title>
<link>' . webpath . 'program.php?category=' . tel1 . '42' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/9cf3ef0a70facb37c6a56fc1453f094b,0,1.png" width="120" height="90" />
</item>

<item>
<title>Canal + Sport HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '33' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/40abec5fb98df3a3de4bf21be98b4908,0,1.png" width="120" height="90" />
</item>

<item>
<title>Canal + GOL HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '191' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/e3cb37d9def772741ce401e96bc8586b,0,1.png" width="120" height="90" />
</item>

<item>
<title>Polsat Sport HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '224' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/b03660b9d77e5e829f4cbe6f974146cb,0,1.png" width="120" height="90" />
</item>

<item>
<title>Eurosport HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '201' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/db727cf0f2c6f966653429eeaf8e16da,0,1.png" width="120" height="90" />
</item>

<item>
<title>Eurosport 2 HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '276' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/a108c81f5c87f0d060f19fb9babff344,0,1.png" width="120" height="90" />
</item>

<item>
<title>nSport HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '218' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/769800e347ba6a01a0545a071e22ee65,0,1.png" width="120" height="90" />
</item>

<item>
<title>Orange Sport</title>
<link>' . webpath . 'program.php?category=' . tel1 . '292' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/5f49da5ea844a2facea1653cce49afd1,0,1.png" width="120" height="90" />
</item>

<item>
<title>TVP Sport</title>
<link>' . webpath . 'program.php?category=' . tel1 . '240' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/f5d6b310ecc5102d79c9857bd23a4eb0,0,1.png" width="120" height="90" />
</item>

<item>
<title>Extreme Sport</title>
<link>' . webpath . 'program.php?category=' . tel1 . '66' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/88a4ed0c18f9c7895e95040a9f259e1b,0,1.png" width="120" height="90" />
</item>

<item>
<title>Kuchnia + HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '1' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/98e00e36b1e4922fe9ea433f78279555,0,1.png" width="120" height="90" />
</item>

<item>
<title>TLC</title>
<link>' . webpath . 'program.php?category=' . tel1 . '249' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/2df804061cec434ff04ac113401da5d5,0,1.png" width="120" height="90" />
</item>

<item>
<title>TVN 24 HD</title>
<link>' . webpath . 'program.php?category=' . tel1 . '65' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/ab98d75a51f626c18d24b7ae7baaf698,0,1.png" width="120" height="90" />
</item>

<item>
<title>Superstacja</title>
<link>' . webpath . 'program.php?category=' . tel1 . '229' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/40b84aad829008f380e63a7ec2fce43d,0,1.jpg" width="120" height="90" />
</item>

<item>
<title>TVP Info</title>
<link>' . webpath . 'program.php?category=' . tel1 . '58' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/64f2ff33bfef9fdd51738cbaca36ab2a,0,1.png" width="120" height="90" />
</item>

<item>
<title>Polsat News</title>
<link>' . webpath . 'program.php?category=' . tel1 . '283' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/5e48d91e301490a78de1d678193e24c0,0,1.png" width="120" height="90" />
</item>

<item>
<title>VIVA</title>
<link>' . webpath . 'program.php?category=' . tel1 . '21' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/36c472758866c0f99a52ea8f886790b5,0,1.png" width="120" height="90" />
</item>

<item>
<title>MTV</title>
<link>' . webpath . 'program.php?category=' . tel1 . '57' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/9a53a06610a27b3bc4a25fcb3704a4a4,0,1.png" width="120" height="90" />
</item>

<item>
<title>4fun tv</title>
<link>' . webpath . 'program.php?category=' . tel1 . '179' . tel2 . '</link>
<media:thumbnail url="http://m.ocdn.eu/_m/ae168b8f0de51862442d66cc1a3b2cda,0,1.png" width="120" height="90" />
</item>
';
}

function generateSeriesHeader($cat, $weeb)	{
$program_bg = 'programtv_2';

if ($weeb == TRUE)	{
$program_bg = 'programtv_weeb';
switch ($cat) {
	case "kanal-polsat":
		$cat = tel1 . '23' . tel2;
		break;
	case "wiadomosci24":
		$cat = tel1 . '65' . tel2;
		break;
	case "t-v-n-h-d":
		$cat = tel1 . '24' . tel2;
		break;
	case "discoverychannel":
		$cat = tel1 . '17' . tel2;
		break;
	case "polsat_news":
		$cat = tel1 . '283' . tel2;
		break;
	case "polsatsport":
		$cat = tel1 . '224' . tel2;
		break;
	case "minimini":
		$cat = tel1 . '177' . tel2;
		break;
	case "tvp-2":
		$cat = tel1 . '22' . tel2;
		break;
	case "tlc":
		$cat = tel1 . '249' . tel2;
		break;
	case "history":
		$cat = tel1 . '207' . tel2;
		break;
	case "tvp-1":
		$cat = tel1 . '14' . tel2;
		break;
	case "comedycentral":
		$cat = tel1 . '189' . tel2;
		break;
	case "styletvn":
		$cat = tel1 . '237' . tel2;
		break;
	case "hbo":
		$cat = tel1 . '205' . tel2;
		break;
	case "men2":
		$cat = tel1 . '179' . tel2;
		break;
	case "disneychannel":
		$cat = tel1 . '194' . tel2;
		break;
	case "discoveryscenice":
		$cat = tel1 . '19' . tel2;
		break;
	case "vivapl":
		$cat = tel1 . '21' . tel2;
		break;
	case "axn":
		$cat = tel1 . '274' . tel2;
		break;
	case "polsat_2":
		$cat = tel1 . '55' . tel2;
		break;
	case "cn":
		$cat = tel1 . '42' . tel2;
		break;
	case "cpfilm2":
		$cat = tel1 . '605' . tel2;
		break;
	case "tvphd":
		$cat = tel1 . '14' . tel2;
		break;
	case "turbotvn":
		$cat = tel1 . '46' . tel2;
		break;
	case "animalplanet":
		$cat = tel1 . '273' . tel2;
		break;
	case "tvpseriale":
		$cat = tel1 . '291' . tel2;
		break;
	case "natgeochannel":
		$cat = tel1 . '168' . tel2;
		break;
	case "hbocomedy":
		$cat = tel1 . '206' . tel2;
		break;
	case "kinopolska":
		$cat = tel1 . '47' . tel2;
		break;
	case "comedycentralfamily":
		$cat = tel1 . '15' . tel2;
		break;
	case "kuchnia":
		$cat = tel1 . '1' . tel2;
		break;
	case "foxlife":
		$cat = tel1 . '279' . tel2;
		break;
	case "eurosport1hd":
		$cat = tel1 . '201' . tel2;
		break;
	case "nick":
		$cat = tel1 . '216' . tel2;
		break;
	case "cpfilm":
		$cat = tel1 . '190' . tel2;
		break;
	case "cbeebies":
		$cat = tel1 . '182' . tel2;
		break;
	case "filmbox":
		$cat = tel1 . '202' . tel2;
		break;
	case "jimjam":
		$cat = tel1 . '210' . tel2;
		break;
	case "boomerang":
		$cat = tel1 . '186' . tel2;
		break;
	case "natgeowild":
		$cat = tel1 . '280' . tel2;
		break;
	case "mtv":
		$cat = tel1 . '57' . tel2;
		break;
	case "hbo2":
		$cat = tel1 . '41' . tel2;
		break;
	case "discoveryworld":
		$cat = tel1 . '36' . tel2;
		break;
	case "crime_and_investigation":
		$cat = tel1 . '579' . tel2;
		break;
	case "bbcknowledge":
		$cat = tel1 . '184' . tel2;
		break;
	case "tvp-polonia":
		$cat = tel1 . '28' . tel2;
		break;
	case "cp":
		$cat = tel1 . '38' . tel2;
		break;
	case "puls":
		$cat = tel1 . '29' . tel2;
		break;
	case "kanal7":
		$cat = tel1 . '26' . tel2;
		break;
	case "nsport":
		$cat = tel1 . '218' . tel2;
		break;
	case "tvp-info":
		$cat = tel1 . '58' . tel2;
		break;
	case "disneyxd":
		$cat = tel1 . '44' . tel2;
		break;
	case "eurosport2hd":
		$cat = tel1 . '276' . tel2;
		break;
	case "cinemax":
		$cat = tel1 . '187' . tel2;
		break;
	case "tvp-sport":
		$cat = tel1 . '240' . tel2;
		break;
	case "axncrime":
		$cat = tel1 . '180' . tel2;
		break;
	case "cpsport":
		$cat = tel1 . '33' . tel2;
		break;
	case "tefaupehistoria":
		$cat = tel1 . '190' . tel2;
		break;
	case "ttv":
		$cat = tel1 . '293' . tel2;
		break;
	case "mgm":
		$cat = tel1 . '213' . tel2;
		break;
	case "orange":
		$cat = tel1 . '292' . tel2;
		break;
	case "planete":
		$cat = tel1 . '52' . tel2;
		break;
	case "discoveryhistoria":
		$cat = tel1 . '196' . tel2;
		break;
	case "tvp-kultura":
		$cat = tel1 . '27' . tel2;
		break;
	case "scifi":
		$cat = tel1 . '181' . tel2;
		break;
	case "family1":
		$cat = tel1 . '599' . tel2;
		break;
	case "alekinokino":
		$cat = tel1 . '34' . tel2;
		break;
	case "polsatnews":
		$cat = tel1 . '601' . tel2;
		break;
	case "national":
		$cat = tel1 . '599' . tel2;
		break;
	case "family2":
		$cat = tel1 . '601' . tel2;
		break;
	case "bbc":
		$cat = tel1 . '603' . tel2;
		break;
	case "polsatfilm":
		$cat = tel1 . '282' . tel2;
		break;
	case "domo":
		$cat = tel1 . '195' . tel2;
		break;
	case "tv_4":
		$cat = tel1 . '25' . tel2;
		break;
	case "universalchannel":
		$cat = tel1 . '242' . tel2;
		break;
	case "super-stacja":
		$cat = tel1 . '229' . tel2;
		break;
}
}

$plik = geturl($cat);
preg_match_all("/item(.*?)\/item/", $plik, $dane);
$idx = 0;
$videos = '';

foreach ($dane[1] as $item) {
	$idx++;
	$tytul = get_string_between($item, '<title>', '</title>');
	$opistemp = get_string_between($item, '<description>', '</description>');
	$opis = get_string_between($opistemp, '<p>', '</p>');
	$kategoria = get_string_between($item, '<category>', '</category>');
	
	$videos .= '
<item>
<title>' . iconv('ISO-8859-2', 'UTF-8', $tytul) . '</title>
<link>' . webpath . 'program.php</link>
<idx>' . $idx . '</idx>
<opis>' . iconv('ISO-8859-2', 'UTF-8', $opis) . '</opis>
<kategoria>' . iconv('ISO-8859-2', 'UTF-8', $kategoria) . '</kategoria>
<canEnterItem>false</canEnterItem>
</item>
';
	}

echo <<<SER
<?xml version='1.0' ?><rss version="2.0" encoding="UTF-8" xmlns:dc="http://purl.org/dc/elements/1.1/">

<mediaDisplay name="onePartView" showHeader="no" drawItemText="yes" showDefaultInfo="no" itemXPC="8" itemYPC="14" sliding="yes" itemPerPage="11" itemBorderColor="255:255:255" itemImageHeightPC="0" itemImageWidthPC="0" itemHeightPC="6.6" itemWidthPC="50" itemBackgroundColor="0:0:0" idleImageXPC="86" idleImageYPC="64" idleImageWidthPC="5" idleImageHeightPC="5" backgroundColor="0:0:0" sideColorBottom="0:0:0" sideColorTop="0:0:0" sideColorLeft="0:0:0" sideColorRight="0:0:0" mainPartColor="0:0:0">
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

<text redraw="yes" offsetXPC="8" offsetYPC="85" widthPC="50" heightPC="5" fontSize="14" backgroundColor="0:0:0" align="center">
<script>
	getItemInfo(-1, "idx") + "/' . $idx . '";
</script>
</text>

<text redraw="yes" offsetXPC="67" offsetYPC="14" widthPC="25" heightPC="4" fontSize="13" backgroundColor="0:0:0">
<script>
	"Kategoria: " + getItemInfo(-1, "kategoria");
</script>
</text>

<text redraw="yes" offsetXPC="67" offsetYPC="22" widthPC="25" heightPC="45" fontSize="13" lines="9" backgroundColor="0:0:0" align="justify">
<script>
	getItemInfo(-1, "opis");
</script>
</text>

<backgroundDisplay>
<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">' . imgpath . $program_bg . '.jpg</image>
</backgroundDisplay>
</mediaDisplay>

<channel>
' .
$videos
;
}

function generateFooter()	{
echo <<<FOO
</channel>
</rss>
FOO;
}

if (isset($_GET['category'])) {
	generateSeriesHeader($_GET['category'], FALSE);
	generateFooter();
}
elseif (isset($_GET['weeb'])) {
	generateSeriesHeader($_GET['weeb'], TRUE);
	generateFooter();
}
else	{
	generateIndexHeader();
	generateFooter();
}
?>