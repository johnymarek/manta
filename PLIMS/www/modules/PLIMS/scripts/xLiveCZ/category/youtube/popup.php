<?php
############################################################################
# Copyright: ©2011, ©2012, ©2013 wencaS <wenca.S@seznam.cz>
# Version: 0.0.01
# Date: 10.02.2013
# Web: www.wencas.cz
#
# This file is part of xLiveCZ.
#
# xLiveCZ is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# xLiveCZ is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#############################################################################

$DIR_SCRIPT_ROOT  = current(explode('xLiveCZ/', dirname(__FILE__).'/')).'xLiveCZ/';

if (isset($_GET['msg'])) {
	$PoUpBg        = $DIR_SCRIPT_ROOT.'image/popup_bg.png';
	$itemOffsetXPC = 33;
	$OkFontSize    = 20;
	switch ($_GET['msg']) {
		case 'ytfail':
			$link = 'http://www.youtube.com/get_video_info?&video_id='.$_GET['reason'].'&el=vevo&ps=default';
			$html = file_get_contents($link);
			$html = urldecode($html);
			parse_str($html, $out);

			$PopUpMsg        = htmlspecialchars(stripslashes($out['reason']), ENT_QUOTES);
			$length          = strlen($PopUpMsg); // pri velikosti fontu 14 cca 50 znaku vychazi na radek
			$lines           = ceil($length/50);
			$BorderColor     = "255:70:70";
			$backgroundColor = "25:25:25";
			$foregroundColor = "255:70:70";
			$MsgWidthPC      = 46;
			$MsgHeightPC     = $lines * 2 + 10; //22
			$MsgOffsetXPC    = 27;
			$MsgOffsetYPC    = (100 - $MsgHeightPC - 10) / 2; //33
			$MsgFontSize     = 14;
			$MsgLines        = $lines;
		break;

	}
}

$BorderOffsetX     = $MsgOffsetXPC - 3;
$BorderOffsetY     = $MsgOffsetYPC - 3;
$BorderWidth       = $MsgWidthPC + 6;
$BorderHeight      = $MsgHeightPC + 16;
$BackgroundOffsetX = $MsgOffsetXPC - 2.5;
$BackgroundOffsetY = $MsgOffsetYPC - 2.5;
$BackgroundWidth   = $MsgWidthPC + 5;
$BackgroundHeight  = $MsgHeightPC + 15;
$itemOffsetYPC     = $MsgHeightPC + $MsgOffsetYPC + 2;


echo '<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/">
<!--
############################################################################
# Copyright: ©2011, ©2012, ©2013 wencaS <wenca.S@seznam.cz>
# Version: 0.0.01
# Date: 10.02.2013
# Web: www.wencas.cz
#
# This file is part of xLiveCZ.
#
# xLiveCZ is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# xLiveCZ is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#############################################################################
-->
	<script>
		CancelIdle();
		setFocusItemIndex(0);
		redrawDisplay();
	</script>
	<mediaDisplay name="photoView"
		viewAreaXPC="0"
		viewAreaYPC="0"
		viewAreaWidthPC="100"
		viewAreaHeightPC="100"
		showHeader="no"
		showDefaultInfo="no"
		drawItemBorder="no"
		backgroundColor="-1:-1:-1"
		rowCount="1"
		columnCount="1"

		itemGapXPC="10"
		itemOffsetXPC="'.$itemOffsetXPC.'"
		itemOffsetYPC="'.$itemOffsetYPC.'"
		itemHeightPC="6"
		itemWidthPC="14"
		itemBackgroundColor="-1:-1:-1"

		imageFocus=""

		sideTopHeightPC="0"
		idleImageWidthPC="0"
		idleImageHeightPC="0"
		idleImageXPC="0"
		idleImageYPC="0"
		bottomYPC="100">
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy1.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy2.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy3.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy4.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy5.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy6.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy7.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy8.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'image/busy9.png</idleImage>

		<backgroundDisplay>
			<image offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100">'.$PoUpBg.'</image>
			<text offsetXPC="'.$BorderOffsetX.'" offsetYPC="'.$BorderOffsetY.'" widthPC="'.$BorderWidth.'" heightPC="'.$BorderHeight.'" backgroundColor="'.$BorderColor.'" cornerRounding="20" />
			<text offsetXPC="'.$BackgroundOffsetX.'" offsetYPC="'.$BackgroundOffsetY.'" widthPC="'.$BackgroundWidth.'" heightPC="'.$BackgroundHeight.'" backgroundColor="'.$backgroundColor.'" cornerRounding="15" />
		</backgroundDisplay>

			<!-- POPUP MSG -->
		<text redraw="yes" tailDots="yes"
					backgroundColor="-1:-1:-1" foregroundColor="'.$foregroundColor.'"
					offsetXPC="'.$MsgOffsetXPC.'" offsetYPC="'.$MsgOffsetYPC.'" widthPC="'.$MsgWidthPC.'" heightPC="'.$MsgHeightPC.'" fontSize="'.$MsgFontSize.'" lines="'.$MsgLines.'">
			'.$PopUpMsg.'
		</text>

		<itemDisplay>
			<text offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100" fontSize="'.$OkFontSize.'" align="center" cornerRounding="17">
				<backgroundColor>
					<script>
						if (getFocusItemIndex()==getQueryItemIndex()) "245:161:112"; else "173:183:192";
					</script>
				</backgroundColor>
				<foregroundColor>
					<script>
						if (getFocusItemIndex()==getQueryItemIndex()) "55:55:55"; else "77:77:77";
					</script>
				</foregroundColor>
				<script>
					getItemInfo("title");
				</script>
			</text>
		</itemDisplay>
	</mediaDisplay>

	<channel>
		<title>PopUp Dialog</title>
		<link>http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'</link>
		<item>
			<title><![CDATA[OK ]]></title>
			<onClick>
				<script>
					redrawDisplay("no");
					postMessage("RET");
					postMessage("Return");
					null;
				</script>
			</onClick>
		</item>
	</channel>

</rss>';

?>