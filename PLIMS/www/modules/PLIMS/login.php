<?php
$dirpath = dirname($_SERVER["SCRIPT_FILENAME"]) . '/';
$webpath = 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/';
$query = $_GET["query"];
if($query) {
   $queryArr = explode(',', $query);
   $file = $dirpath.$queryArr[0];
   $action = $queryArr[1];
   $text = $queryArr[2];
}

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
	$find  = "<weeb_login>";
	$S     = strpos($line, $find, $S) + strlen($find);
	$partA = substr($line, 0, $S);
	$find  = "</weeb_login>";
	$S     = strpos($line, $find, $S);
	$partB = substr($line, $S);
	$line = $partA.$text.$partB;
	fwrite(fopen($file, 'w'), $line);
	require_once('showlogin.php');
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
	$find  = "<weeb_pass>";
	$S     = strpos($line, $find, $S) + strlen($find);
	$partA = substr($line, 0, $S);
	$find  = "</weeb_pass>";
	$S     = strpos($line, $find, $S);
	$partB = substr($line, $S);
	$line = $partA.$text.$partB;
	fwrite(fopen($file, 'w'), $line);
	require_once('showlogin.php');
	die();

	case 'quality':
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
	$find  = "<weeb_hd>";
	$S     = strpos($line, $find, $S) + strlen($find);
	$partA = substr($line, 0, $S);
	$find  = "</weeb_hd>";
	$S     = strpos($line, $find, $S);
	$partB = substr($line, $S);
	$line = $partA.$text.$partB;
	if ($text == "1" or $text == "0")  {
	fwrite(fopen($file, 'w'), $line);
	}
	require_once('showlogin.php');
	die();
	
	}
?>
