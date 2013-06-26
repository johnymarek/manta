<?php
// ###############################################################
// ##                                                           ##
// ##   http://sites.google.com/site/pavelbaco/                 ##
// ##   Copyright (C) 2012  Pavel Bačo   (killerman)            ##
// ##                                                           ##
// ###############################################################
define('SCRIPTS_DIR',current(explode('scripts/', __FILE__)).'scripts/');
exec('wget -O '.SCRIPTS_DIR.'xListPlay.zip http://dl.dropbox.com/u/44973024/xListPlay_start.zip');
exec('unzip -o '.SCRIPTS_DIR.'xListPlay.zip -d '.SCRIPTS_DIR);
exec('rm '.SCRIPTS_DIR.'xListPlay.zip');
require_once(SCRIPTS_DIR.'xListPlay/install/update.php');
die();
?>
