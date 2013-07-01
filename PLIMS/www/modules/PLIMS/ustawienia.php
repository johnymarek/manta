<?php

error_reporting(0);
define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define("imgpath", dirpath . 'image/');

if (!empty($_POST))	{
	$xmlcontent = '<Ustawienia>
	<quality>' . $_POST["quality"] . '</quality>
	<nritems>' . $_POST["nritems"] . '</nritems>
	<weeb_login>' . $_POST["weeb_login"] . '</weeb_login>
	<weeb_pass>' . $_POST["weeb_pass"] . '</weeb_pass>
	<weeb_hd>' . $_POST["weeb_hd"] . '</weeb_hd>
</Ustawienia>
';
	$plims_file = fopen(dirpath . 'ustawienia.xml', 'w');
	fwrite($plims_file, $xmlcontent);
	fclose($plims_file);
}

$set = simplexml_load_file(dirpath . 'ustawienia.xml');
switch ($set->quality) {
    case 0:
        $qual = "Najgorsza";
        break;
    case 1:
        $qual = "Średnia";
        break;
    case 2:
        $qual = "Najlepsza";
        break;
}
switch ($set->weeb_hd) {
    case 0:
        $weebqual = "Nie";
        break;
    case 1:
        $weebqual = "Tak";
        break;
}


echo '<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Konfiguracja PLIMS</title>
<style type="text/css">
* {margin:0; padding:0}
body {margin:auto; width:800px; font-size="100%"; font:11px/1.5 Verdana, Arial, Helvetica, sans-serif; color: #FFF; background: url("image/list.jpg"); background-repeat: no-repeat; background-size: 100% 720px;}
td,th {font-size:0.875em; padding-left: 3em;}
.hotspot {color:#900; padding-bottom:1px; border-bottom:1px dotted #900; cursor:pointer}

#tt {position:absolute; display:block; background:url(image/tt_left.gif) top left no-repeat}
#tttop {display:block; height:5px; margin-left:5px; background:url(image/tt_top.gif) top right no-repeat; overflow:hidden}
#ttcont {display:block; padding:2px 12px 3px 7px; margin-left:5px; background:#666; color:#FFF}
#ttbot {display:block; height:5px; margin-left:5px; background:url(image/tt_bottom.gif) top right no-repeat; overflow:hidden}
</style>
</head>
<body>

<table align="center" width="80%" border="0" cellpadding="0" cellspacing="0"><tbody>
<tr><td><br><br><br><h1>Konfiguracja PLIMS</h1><br><br></td></tr>';

if (!empty($_POST))
	echo '<tr><td>Nowe ustawienia zostały zapisane<br><br></td></tr>';

echo '</tbody></table>

<table align="center" width="80%" border="0" cellpadding="0" cellspacing="0"><tbody>
<tr><th align="left" width="50%"><b>Opcja</b></th>
	<th align="left" width="25%"><b>Aktualne</b></th>
	<th align="left" width="25%"><b>Nowe</b></th></tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr>

<form action="ustawienia.php" method="post">
<tr><td>Jakość strumieni (<span class="hotspot" onmouseover="tooltip.show(\'Ustawienia jakości dla HDtrailers, Ipla oraz Onet\');" onmouseout="tooltip.hide();">?</span>):</td><td>' . $qual . '</td><td><select name="quality">
<option value="0">Najgorsza</option>
<option value="1">Średnia</option>
<option value="2">Najlepsza</option>
</select></td></tr>

<tr><td>Liczba wyników strumieni (<span class="hotspot" onmouseover="tooltip.show(\'Liczba wyświetlanych wyników na jednej stronie w Onet oraz wyszukiwarce Ipla\');" onmouseout="tooltip.hide();">?</span>):</td><td>' . $set->nritems . '</td><td><select name="nritems">
<option value="15">15</option>
<option value="30">30</option>
<option value="50">50</option>
</select></td></tr>

<tr><td>Weeb.tv login (<span class="hotspot" onmouseover="tooltip.show(\'Nazwa użytkownika w weeb.tv\');" onmouseout="tooltip.hide();">?</span>):</td><td>' . $set->weeb_login . '</td><td><input type="text" name="weeb_login">
</td></tr>

<tr><td>Weeb.tv hasło (<span class="hotspot" onmouseover="tooltip.show(\'Hasło użytkownika w weeb.tv\');" onmouseout="tooltip.hide();">?</span>):</td><td>' . $set->weeb_pass . '</td><td><input type="text" name="weeb_pass">
</td></tr>

<tr><td>Weeb.tv HD (<span class="hotspot" onmouseover="tooltip.show(\'Korzystaj z jakości HD w weeb.tv (o ile jest dostępna)\');" onmouseout="tooltip.hide();">?</span>):</td><td>' . $weebqual . '</td><td><select name="weeb_hd">
<option value="0">Nie</option>
<option value="1">Tak</option>
</select></td></tr>

<tr><td><br><input type="submit" value="Zapisz"/><br><br></td></tr>
</form></tbody></table></div>
<script type="text/javascript" language="javascript" src="ustawienia.js"></script>
</body>
</html>
';

?>