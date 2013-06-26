<?php
define('SCRIPTS_DIR',current(explode('scripts/', __FILE__)).'scripts/');
$DIR_SCRIPT_ROOT  = current(explode('xLiveCZ/', dirname(__FILE__).'/')).'xLiveCZ/';
$HTTP_SCRIPT_ROOT = current(explode('scripts/', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/')).'scripts/';
$query = $_GET["query"];
if($query) {
   $queryArr = explode(',', $query);
   $file = $DIR_SCRIPT_ROOT.$queryArr[0];
   $action = $queryArr[1];
   $text = $queryArr[2];
}

// ###############################################################
// ##                                                           ##
// ##   http://sites.google.com/site/pavelbaco/                 ##
// ##   Copyright (C) 2012  Pavel Bačo   (killerman)            ##
// ##                                                           ##
// ## This file is a part of xLiveCZ, this project doesnt have  ##
// ## any support from Xtreamer company and just be design for  ##  
// ## realtek based players									    ##
// ###############################################################
switch ($action) {
	case 'username':
	$fp = fopen($file, "r+");
	$ci=1;
	$line="";
	while ($ci>0) {
		$data = fgets($fp,128);
		If (!$data) {
			Break;
		}
		$line.=$data;
		$ci++;
	}
	$S     = 0;
	$E     = 0;
	$find  = "<username>";
	$S     = strpos($line, $find, $S) + strlen($find);
	$partA = substr($line, 0, $S);
	$find  = "</username>";
	$S     = strpos($line, $find, $S);
	$partB = substr($line, $S);
	$line = $partA.$text.$partB;
	fwrite(fopen($file, 'w'), $line);
	require_once(SCRIPTS_DIR.'xLiveCZ/category/tv/showlogin.php');
    die();
	
	
	case 'passwd':
	$fp = fopen($file, "r+");
	$ci=1;
	$line="";
	while ($ci>0) {
		$data = fgets($fp,128);
		If (!$data) {
			Break;
		}
		$line.=$data;
		$ci++;
	}
	$S     = 0;
	$E     = 0;
	$find  = "<password>";
	$S     = strpos($line, $find, $S) + strlen($find);
	$partA = substr($line, 0, $S);
	$find  = "</password>";
	$S     = strpos($line, $find, $S);
	$partB = substr($line, $S);
	$line = $partA.$text.$partB;
	fwrite(fopen($file, 'w'), $line);
	require_once(SCRIPTS_DIR.'xLiveCZ/category/tv/showlogin.php');
	die();
	
	}
?>