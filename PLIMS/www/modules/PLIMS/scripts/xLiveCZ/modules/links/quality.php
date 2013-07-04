<?php
$DIR_SCRIPT_ROOT  = current(explode('xLiveCZ/', dirname(__FILE__).'/')).'xLiveCZ/';
$HTTP_SCRIPT_ROOT = current(explode('scripts/', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/')).'scripts/';

$action = $_GET["action"];
$ytq = "ytqual.inc";

$aqual = array (
	'1080p' => array(
			'title' => '1080p',
			'thumb' => '1080p.jpg',
			'itags' => "37,22,18"
			),
	'720p' => array(
			'title' => '720p',
			'thumb' => '720p.jpg',
			'itags' => "22,18"
			),
	'large' => array(
			'title' => 'nejnizsi',
			'thumb' => 'lowq.jpg',
			'itags' => "18"
			)
);

if (! array_key_exists($action,$aqual)) {
	exit(1);
}

$fp = fopen($ytq, "w")
	or die("Nepodarilo se nastavit kvalitu Youtube\n"); // TODO: Lepe zobrazit moznou chybu pri pokusu o zapis.
fwrite($fp,"<?php\n/*nastaveni kvality*/\n");
fwrite($fp,"\$a_itags=array(".$aqual[$action]['itags'].");\n");
fwrite($fp,"/*konec*/\n?>\n");
fclose($fp);

echo '<rss version="2.0" xmlns:media="http://purl.org/dc/elements/1.1/" xmlns:dc="http://purl.org/dc/elements/1.1/">
<channel>
 <item>
  <title>Youtube kvalita nastavena na '.$aqual[$action]['title'].'</title>
  <link>'.$HTTP_SCRIPT_ROOT.'xLiveCZ/category/yt.php</link>
  <media:thumbnail url="'.$DIR_SCRIPT_ROOT.'image/'.$aqual[$action]['thumb'].'" />
 </item>                 
</channel>          
</rss>              
';                      
?>
