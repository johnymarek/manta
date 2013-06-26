<?php
/*
######################################
#                                    #
#          © Hantronix 2013          #
#                                    #
# Special thanx to killerman (video) #
#        and wencas (youtube)        #
#                                    #
######################################
*/

@include_once dirname(__FILE__)."/ytf.php";
$HTTP_SCRIPT_ROOT = current(explode('scripts/', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/')).'scripts/';

$link = $_GET["link"];
$html = file_get_contents($link);

	preg_match('~<p id="prave_hraje_skladba">.*?</p>~', $html, $prave_hraje_skladba);
	$phs = str_replace('<br />', '-', $prave_hraje_skladba[0]);
	$phs = strip_tags($phs);
	preg_match('~<strong class="cervena size_14">.*?</strong>~', $html, $moderator);
  $moder = strip_tags($moderator[0]);
	preg_match('~<span class="bila">.*?</span>~', $html, $porad);
  $por = strip_tags($porad[0]);
	preg_match('~<div id="cas">.*?</div>~', $html, $casoddo);
	$cas = str_replace('<br />', '-', $casoddo[0]);
	$cas = strip_tags($cas);
  $casy = explode('-', $cas);

echo '<?xml version="1.0" encoding="UTF-8" 
?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">
<script>
	setRefreshTime(-1);
	enablenextplay = 0;
	itemCount = getPageInfo("itemCount");
	SwitchViewer(7);
</script>

<onRefresh>
	if ( Integer( 1 + getFocusItemIndex() ) != getPageInfo("itemCount") && enablenextplay == 1 && playvideo == getFocusItemIndex()) {
		ItemFocus = getFocusItemIndex();
		setFocusItemIndex( Integer( 1 + getFocusItemIndex() ) );
		redrawDisplay();
		setRefreshTime(-1);
		"true";
	}

	if ( enablenextplay == 1 ) {
		enablenextplay = 0;
		url=getItemInfo(getFocusItemIndex(),"paurl");
		movie=getUrl(url);
		playItemUrl(movie,10);

		if ( Integer( 1 + getFocusItemIndex() ) == getPageInfo("itemCount") ) {
			enablenextplay = 0;
			setRefreshTime(-1);
		} else {
			playvideo = getFocusItemIndex();
			setRefreshTime(4000);
			enablenextplay = 1;
		}
	} else {
		setRefreshTime(-1);
		redrawDisplay();
		"true";
	}
</onRefresh>

<mediaDisplay name=threePartsView
	suffixXPC=2
	sideColorLeft=0:0:0
	sideLeftWidthPC=0
	sideColorRight=0:0:0
	sideRightWidthPC="0"
	headerImageWidthPC=0
	headerXPC=16
	headerYPC=1
	headerWidthPC=0
	headerCapXPC=90
	headerCapYPC=0
	headerCapWidthPC=0
  itemImageXPC=27
	itemImageYPC=20
  itemImageWidthPC=0
  itemImageHeightPC=0
	itemImageGap=1
	itemXPC=27
	itemYPC=20
  itemHeightPC=14
  itemWidthPC=71
	backgroundColor=0:0:0
	itemBackgroundColor=0:0:0
  itemBorderColor=3:199:255
  itemGap=1
  imageUnFocus=null
  menuXPC=5
  menuYPC=20
  menuWidthPC=20
  menuHeightPC=8
	showHeader=no
  selectMenuOnRight=no
  forceFocusOnItem=yes
  forceFocusOnMenu=no
	showDefaultInfo=no
 	itemPerPage=5
	infoYPC=90
  idleImageXPC="45"
	idleImageYPC="45"
	idleImageWidthPC="12"
	idleImageHeightPC="6"
	autoSelectMenu="no"
	autoSelectItem="no"
	sliding="no"
>

		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar01.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar02.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar03.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar04.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar05.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar06.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar07.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar08.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar09.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar10.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar11.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar12.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar13.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar14.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar15.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar16.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar17.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar18.png</idleImage>
  <image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="18">'.$DIR_SCRIPT_ROOT.'backgrounds/top.png</image>
  <image redraw="no" offsetXPC="3" offsetYPC="3" widthPC="10" heightPC="14">'.$DIR_SCRIPT_ROOT.'category/mojemenu/kisshady.png</image>
	<image redraw="no" offsetXPC="10.5" offsetYPC="74" widthPC="8" heightPC="13">'.$DIR_SCRIPT_ROOT.'category/mojemenu/bvc.png</image>
  <text align="center" offsetXPC="0" offsetYPC="-2" widthPC="100" heightPC="20" fontSize="30" backgroundColor=-1:-1:-1 foregroundColor=250:250:250>KISSPARÁDA</text>
  <text offsetXPC=80 offsetYPC=7 widthPC=30 heightPC=4 fontSize=16 foregroundColor=0:0:0>Ver.1.0 Hx</text>
	<image offsetXPC="5" offsetYPC="92" widthPC="15" heightPC="3.3" redraw="yes">'.$DIR_SCRIPT_ROOT.'category/mojemenu/mmabout.png</image>
  <image offsetXPC="22" offsetYPC="92" widthPC="18" heightPC="3.3" redraw="yes">'.$DIR_SCRIPT_ROOT.'category/mojemenu/mmxtreaming.png</image>
	<image offsetXPC="43" offsetYPC="92" widthPC="15" heightPC="3.3" redraw="yes">'.$DIR_SCRIPT_ROOT.'category/mojemenu/mmxlivecz.png</image>
	<image offsetXPC="61" offsetYPC="92" widthPC="19" heightPC="3.3" redraw="yes">'.$DIR_SCRIPT_ROOT.'category/mojemenu/mmmojemenu.png</image>
	<image offsetXPC="83" offsetYPC="92" widthPC="15" heightPC="3.3" redraw="yes">'.$DIR_SCRIPT_ROOT.'category/mojemenu/mmzpet.png</image>
	<text align="center" offsetXPC="0" offsetYPC="43" widthPC="27" heightPC="4" fontSize="15" backgroundColor=-1:-1:-1 foregroundColor=255:255:255>Práve hraje:</text>
	<text align="center" offsetXPC="0" offsetYPC="47" widthPC="27" heightPC="7" fontSize="15" lines=2 backgroundColor=-1:-1:-1 foregroundColor=3:199:255>'.$phs.'</text>
	<text align="center" offsetXPC="0" offsetYPC="57" widthPC="27" heightPC="4" fontSize="15" backgroundColor=-1:-1:-1 foregroundColor=255:255:255>Práve vysílá:</text>
	<text align="center" offsetXPC="0" offsetYPC="59" widthPC="27" heightPC="7" fontSize="15" backgroundColor=-1:-1:-1 foregroundColor=3:199:255>'.$moder.'</text>
 	<text align="center" offsetXPC="0" offsetYPC="66" widthPC="27" heightPC="4" fontSize="15" backgroundColor=-1:-1:-1 foregroundColor=255:255:255>Porad:</text>
	<text align="center" offsetXPC="0" offsetYPC="68" widthPC="27" heightPC="7" fontSize="15" backgroundColor=-1:-1:-1 foregroundColor=3:199:255>'.$por.'</text>
	<text align="center" offsetXPC="0.3" offsetYPC="75" widthPC="27" heightPC="7" fontSize="15" backgroundColor=-1:-1:-1 foregroundColor=255:255:255>'.$casy[0].'</text>
	<text align="center" offsetXPC="0.3" offsetYPC="79" widthPC="27" heightPC="7" fontSize="15" backgroundColor=-1:-1:-1 foregroundColor=255:255:255>'.$casy[1].'</text>
  <text align="center" offsetXPC="9" offsetYPC="87" widthPC="10" heightPC="4" fontSize="13" redraw="yes" backgroundColor=0:0:0 foregroundColor=3:199:255>
    <script>sprintf("%s / ", focus-(-1))+itemCount;</script>
	</text>
  <text align="center" offsetXPC="5" offsetYPC="18" widthPC="19" heightPC="25" fontSize="25" backgroundColor="120:120:120" foregroundColor="0:0:0">
		  <script>sprintf("YouTube",focus-(-1));</script>
	</text>
		<image  redraw="yes" offsetXPC=5 offsetYPC=18 widthPC=19 heightPC=25>
		<script>print(img); img;</script>
		</image>

		<itemDisplay>
      <image redraw=yes offsetXPC=2 offsetYPC=4 widthPC=15 heightPC=92 backgroundColor=-1:-1:-1 foregroundColor=150:0:0> 
        <script> 
            getItemInfo(-1, "thumbnail");
        </script> 
      </image>
      <text redraw=yes offsetXPC=17 offsetYPC=30 lines=1 widthPC=80 heightPC=70 fontSize=16 backgroundColor=-1:-1:-1 foregroundColor=170:170:170> 
          <script>
            getItemInfo(-1, "description");
          </script> 
      </text>
      <text redraw=yes offsetXPC=17 offsetYPC=30 lines=1 widthPC=80 heightPC=70 fontSize=16 backgroundColor=-1:-1:-1 foregroundColor=170:170:170> 
		      <script>getItemInfo(-1, "annotation");</script>
		  </text>
			<text align="left" lines="1" offsetXPC="17" offsetYPC="-6" widthPC="80" heightPC="70">
				<script>
					idx = getQueryItemIndex();
					focus = getFocusItemIndex();
					if(focus==idx)
					{
						img = getItemInfo(idx,"image");
						durata = getItemInfo(idx, "durata");
						annotation = getItemInfo(idx, "annotation");
						titul = getItemInfo(idx, "title");
					}
					getItemInfo(idx, "title");
				</script>
				<fontSize>
					<script>
						idx = getQueryItemIndex();
						focus = getFocusItemIndex();
						if(focus==idx) "16"; else "16";
					</script>
				</fontSize>
				<foregroundColor>
					<script>
						idx = getQueryItemIndex();
						focus = getFocusItemIndex();
						if(focus==idx) "3:199:255"; else "2:141:176";
					</script>
				</foregroundColor>
			</text>

		</itemDisplay>
<onUserInput>
			<script>
				ret = "false";
				userInput = currentUserInput();
				if (userInput == "PD" || userInput == "PG" || userInput == "pagedown" || userInput == "pageup") {
					idx = Integer(getFocusItemIndex());
					if (userInput == "PD" || userInput == "pagedown") {
						idx -= -5;
						if (idx &gt;= getPageInfo("itemCount"))
							idx = 0;
					} else {
						idx -= 5;
						if (idx &lt; 0)
							idx = getPageInfo("itemCount")-1;
					}
					print("new idx: "+idx);
					setFocusItemIndex(idx);
					setItemFocus(0);
					redrawDisplay();
					ret = "true";
				} else
				if (userInput == "video_play" || userInput == "play") {
					showIdle();
					playvideo = getFocusItemIndex();
					url=getItemInfo(getFocusItemIndex(),"paurl");
					movie=getUrl(url);
					playItemUrl(movie,10);

					if( Integer(1+getFocusItemIndex()) == getPageInfo("itemCount") ) {
						enablenextplay = 0;
						setRefreshTime(-1);
					} else {
						setRefreshTime(4000);
						enablenextplay = 1;
					}
					cancelIdle();
					ret = "true";
				}
				if (userInput == "video_ffwd" || userInput == "ffwd") {
					showIdle();
					enablenextplay = 0;
					setRefreshTime(-1);
					cancelIdle();
					redrawDisplay();
					ret = "true";
				}
				if (userInput == "display" || userInput == "DISPLAY")
				{
					showIdle();
					url="'.$HTTP_SCRIPT_ROOT.'xLiveCZ/category/mojemenu/kabout.php";
					jumpToLink("GotoPage");
					redrawDisplay();
					ret = "true";
				}
				if (userInput == "one" || userInput == "1")
				{
					showIdle();
					url="'.$HTTP_SCRIPT_ROOT.'Xtreamering/index.php";
					jumpToLink("GotoPage");
					redrawDisplay();
					ret = "true";
				}
				if (userInput == "two" || userInput == "2")
				{
					showIdle();
					url="'.$HTTP_SCRIPT_ROOT.'xLiveCZ/category/czech.php";
					jumpToLink("GotoPage");
					redrawDisplay();
					ret = "true";
				}
        		if (userInput == "three" || userInput == "3")
				{
					showIdle();
					url="'.$HTTP_SCRIPT_ROOT.'xLiveCZ/category/mojemenu.php";
					jumpToLink("GotoPage");
					redrawDisplay();
					ret = "true";
				}
				if (userInput == "video_search" || userInput == "five")
				{
					showIdle();
					url="'.$HTTP_SCRIPT_ROOT.'xLiveCZ/category/rss/nezarazene.php";
					jumpToLink("GotoPage");
					redrawDisplay();
					ret = "true";
				}
				ret;
</script>
</onUserInput>

	</mediaDisplay>

	<item_template>
		<mediaDisplay  name="threePartsView" idleImageXPC="5" idleImageYPC="5" idleImageWidthPC="8" idleImageHeightPC="10">
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar01.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar02.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar03.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar04.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar05.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar06.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar07.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar08.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar09.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar10.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar11.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar12.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar13.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar14.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar15.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar16.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar17.png</idleImage>
		<idleImage>'.$DIR_SCRIPT_ROOT.'category/mojemenu/bar18.png</idleImage>
		</mediaDisplay>

	</item_template>

	<GotoPage>
		<link>
			<script>
				url;
			</script>
		</link>
	</GotoPage>

	<Destination>
		<link>
			<script>
				url;
			</script>
		</link>
	</Destination>
';

echo '
	<channel>
		<title>Kissparada</title>'; ?>
<item>
<title>RÁDIO ONLINE</title>
<onClick>
showIdle();
playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=test&amp;url=mms://netshow4.play.cz/kisshady128",5);
cancelIdle();
</onClick>
<media:thumbnail url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/mojemenu/rol.png" />
<description>online vysílání rádia</description>
</item>

<item>
<title>STUDIO ONLINE</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://biztube.cz:443/webcam/webcam-kisshady</link>
<media:thumbnail url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/mojemenu/sol.png" />
<enclosure type="video/h264" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://biztube.cz:443/webcam/webcam-kisshady"/>
<description>webkamera do studia</description>
</item>

<?php		
$videos = explode('<span class="pozice left', $html);
unset($videos[0]);

$videos = array_values($videos);

foreach($videos as $video) {
	$pom = str_between($video,'<a href="','onclick');
	$id = str_between($pom,'v=','&');IF ($id == "") $id = str_between($pom,'v=','"');
	$title = str_between($video,'<strong class="cervena2">','</strong>');
  $title = str_replace('&amp;', '&', $title);
	$name = preg_replace('/[^A-Za-z0-9_]/','_',$title).".mp4";
  preg_match_all ('~<td>.*</td>~', $video, $skladba);
  $annotation = strip_tags($skladba[0][1]);

	$item['title']      = $title;
	$item['id']         = $id;
	$item['name']       = $name;
  $item['annotation'] = $annotation;
	IF ($id != "")
	echo CreateItem($item);
}
echo '</channel>
</rss>';
?>