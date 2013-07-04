<?php
//header("Content-Type: text/xml; charset=utf-8");
ini_set("user_agent","Mozilla/5.0 (SmartHub; SMART-TV; U; Linux/SmartTV; Maple2012) AppleWebKit/534.7 (KHTML, like Gecko) SmartTV Safari/534.7");

define("dirpath", dirname($_SERVER["SCRIPT_FILENAME"]) . '/');
define("webpath", 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']));
$tvn_bg_path = 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/';

date_default_timezone_set("Europe/Warsaw");
echo '<?xml version="1.0" encoding="UTF-8" ?>'."\n";
echo '<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://purl.org/dc/elements/1.1/">'."\n"; 
?>

<onEnter>
  startitem = "middle";
  setRefreshTime(1);
</onEnter>

<onRefresh>
  setRefreshTime(-1);
  itemCount = getPageInfo("itemCount");
</onRefresh>

<mediaDisplay name="threePartsView"
	sideLeftWidthPC="0"
	sideRightWidthPC="0"
	
	headerImageWidthPC="0"
	selectMenuOnRight="no"
	autoSelectMenu="no"
	autoSelectItem="no"
	itemImageHeightPC="0"
	itemImageWidthPC="0"
	itemXPC="8"
	itemYPC="25"
	itemWidthPC="45"
	itemHeightPC="8"
	capXPC="8"
	capYPC="25"
	capWidthPC="45"
	capHeightPC="64"
	itemBackgroundColor="0:0:0"
	itemPerPage="8"
  itemGap="0"
	bottomYPC="90"
	backgroundColor="0:0:0"
	showHeader="no"
	showDefaultInfo="no"
	imageFocus=""
	sliding="no" idleImageXPC="5" idleImageYPC="5" idleImageWidthPC="8" idleImageHeightPC="10">
		
  	<text align="center" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="20" fontSize="30" backgroundColor="10:105:150" foregroundColor="100:200:255">
		  <script>getPageInfo("pageTitle");</script>
	</text>
	
  	<text align="left" offsetXPC="6" offsetYPC="15" widthPC="100" heightPC="4" fontSize="16" backgroundColor="10:105:150" foregroundColor="100:200:255">
		<?php if (isset($_GET['name'])) echo $_GET['name']; ?>
	</text>
	
  	<text redraw="yes" offsetXPC="85" offsetYPC="12" widthPC="10" heightPC="6" fontSize="20" backgroundColor="10:105:150" foregroundColor="60:160:205">
		  <script>sprintf("%s / ", focus-(-1))+itemCount;</script>
	</text>
	<text align="justify" redraw="yes"
          lines="9" fontSize=13
		      offsetXPC=58 offsetYPC=58 widthPC=40 heightPC=32
		      backgroundColor=0:0:0 foregroundColor=200:200:200>
			<script>print(description); description;</script>
	</text>

  	<text  redraw="yes" align="left" offsetXPC="58" offsetYPC="53" widthPC="18" heightPC="5" fontSize="17" backgroundColor="0:0:0" foregroundColor="100:200:255">
		 <script>print(time); time;</script>
		</text>
	
		
  	<text  redraw="yes" align="center" offsetXPC="0" offsetYPC="90" widthPC="100" heightPC="8" fontSize="17" backgroundColor="10:105:150" foregroundColor="100:200:255">
		  <script>print(annotation); annotation;</script>
	</text>
	
		<!--
		<image redraw="yes" offsetXPC="2.5" offsetYPC="4" widthPC="8" heightPC="11"><?php //echo $DIR_SCRIPT_ROOT; ?>image/1u.jpg</image>
		-->
		<!--<image  redraw="yes" offsetXPC=63 offsetYPC=20 widthPC=25 heightPC=30>-->
		<image  redraw="yes" offsetXPC=58 offsetYPC=21 widthPC=38 heightPC=30>
		<script>print(img); img;</script>
		</image>
		<!--
		<image  redraw="yes" offsetXPC=61 offsetYPC=30 widthPC=30 heightPC=25>
			<script>print(img); img;</script>
		</image>
		-->
		<idleImage><?php echo webpath; ?>/img/busy0.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy1.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy2.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy3.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy4.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy5.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy6.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy7.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy8.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy9.png</idleImage>

		<itemDisplay>
			<text align="left" lines="1" offsetXPC=0 offsetYPC=0 widthPC=100 heightPC=100>
				<script>
					idx = getQueryItemIndex();
					focus = getFocusItemIndex();
					if(focus==idx) 
					{
					  annotation = getItemInfo(idx, "annotation");
					  description = getItemInfo(idx, "description");
					  time = getItemInfo(idx, "time");
					  
					  location = getItemInfo(idx, "location");
					  img = getItemInfo(idx,"image");
					}
					getItemInfo(idx, "title");
				</script>
				<fontSize>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "16"; else "14";
  				</script>
				</fontSize>
			  <backgroundColor>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "10:80:120"; else "-1:-1:-1";
  				</script>
			  </backgroundColor>
			  <foregroundColor>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "255:255:255"; else "140:140:140";
  				</script>
			  </foregroundColor>
			</text>

		</itemDisplay>
		
		<onUserInput>
		<script>
		ret = "false";
		userInput = currentUserInput();
		annotation = "";
		if (userInput == "pagedown" || userInput == "pageup")
		{
		  idx = Integer(getFocusItemIndex());
		  if (userInput == "pagedown")
		  {
			idx -= -8;
			if(idx &gt;= itemCount)
			  idx = itemCount-1;
		  }
		  else
		  {
			idx -= 8;
			if(idx &lt; 0)
			  idx = 0;
		  }

		  print("new idx: "+idx);
		  setFocusItemIndex(idx);
			setItemFocus(0);
		  redrawDisplay();
		  "true";
		}
		ret;
		</script>
		</onUserInput>
		
	</mediaDisplay>
	
	<item_template>
		<mediaDisplay  name="threePartsView" idleImageXPC="5" idleImageYPC="5" idleImageWidthPC="8" idleImageHeightPC="10">
        <idleImage><?php echo webpath; ?>/img/busy0.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy1.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy2.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy3.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy4.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy5.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy6.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy7.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy8.png</idleImage>
		<idleImage><?php echo webpath; ?>/img/busy9.png</idleImage>
		</mediaDisplay>

	</item_template>
<channel>
	<title>tvn player</title>
	<menu>main menu</menu>

<?	



define("PAGE_LIMIT", 450);
define("platform", "Samsung TV");
define("quality",'Wysoka');
define("quality_manual", false);
define('FPDF_VERSION','1.6');

	

class tvn
{
	const mode = 0;
	const contentHost = 'http://tvnplayer.pl';
    const mediaHost = 'http://redir.atmcdn.pl';	
    const startUrl = '/api/?platform=ConnectedTV&terminal=Samsung&format=xml&v=2.0&authKey=ba786b315508f0920eca1c34d65534cd';
    const mediaMainUrl = '/scale/o2/tvn/web-content/m/';
    const contentUserAgent = 'Apache-HttpClient/UNAVAILABLE (java 1.4)';
    const contentUser='atm';
    const contentPass='atm_json';
	
	public $tvn_quality_temp = 'Wysoka';
	public $qualities = array(
			'Maksymalna',
            'HD',			
            'Bardzo wysoka',
            'Wysoka',
            'Standard',
            'Średnia',
            'Niska',
            'Bardzo niska'
            );

    public function listsCategories($category='', $id='', $page='', $name='', $season=0)
	{
        //if quality_manual == 'true':
       //     ptv.setSetting('tvn_quality_temp', '')
      //  elif quality_manual == 'false':
	  
		$this->tvn_quality_temp = quality;
		
        if ($category != '' and $id != '')
		{
            $method = 'getItems';
            $groupName = 'items';
			$groupCategories = 'categories';
            $page = 1+$page;
            $urlQuery = '&type='.$category.'&id='.$id.'&limit='.PAGE_LIMIT.'&page='.$page.'&sort=newest&m='.$method;
            if ($season > 0)
                $urlQuery = $urlQuery . "&season=" . $season;
        }    
        else
		{
            $method = 'mainInfo';
            $groupName = 'categories';
            $urlQuery = '&m=' . $method;
		}
        $url = self::contentHost . self::startUrl . $urlQuery;     			
        $response = simplexml_load_file($url, 'SimpleXMLElement', LIBXML_NOCDATA);
		if ($category != '' and $id != '')
		$categories = $response->xpath($method."/".$groupCategories."/row");
	
		if (count($categories)<=0)
			$categories = $response->xpath($method."/".$groupName."/row");
	
        $countItemNode = $response->xpath($method."/count_items");
        $countItemNode = $response->xpath($method."/count_items");
			
        $showNextPage = False;
		
        if ($countItemNode)
		{
            $countItem = $countItemNode[0];
            if ($countItem > PAGE_LIMIT*(1+$page))			
                $showNextPage = True;
        }
		
         $listsize = count($categories);
		 
		
		$seasons = $response->xpath($method . "/seasons");
		$seasons = $seasons[0];
		$showSeasons = False;
		
		if ($seasons && $season == 0)
		{
			
            $showSeasons = True;
            $listsize = $listsize + count($seasons);
            $numSeasons = count($seasons);
		}
        else
		{
            $numSeasons = 0;
		}

        $hasVideo = False;
		
		if ($season<>0 || $season== $numSeasons) 
		{
            foreach($categories as $category)
			{
		
                $titleNode = $category->name;
                if (!$titleNode)
				{
                    $titleNode = $category->title;
				}
	
                if ($titleNode)
                    $name = $titleNode;
                else
                    $name = 'brak';
				
                $episodeNode = $category->episode;
				
                if ($episodeNode)
				{
                    $episodeNo = $episodeNode[0];
                    if ($episodeNo)
					{
                        if ($episodeNode != "0")
                            $name = $name . ", odcinek " . $episodeNode;
					}
				}
				
                $seasonNode = $category->season;
				
                if ($seasonNode)
				{
                    $seasonNo = $seasonNode[0];
                    if ($seasonNo)
					{
                        if ($seasonNo != "0")
						{
                            $name = $name . ", sezon " .$seasonNo;
						}
					}
				}
				
                $airDateNode = $category->start_date;
                if ($airDateNode)
				{
                    $airDateStr = $airDateNode;
                    if ($airDateStr)                        
						$airDate = strtotime($airDateStr);
						$now = time();
                        if ($airDate > $now)
						{
                            $name = $name . " (planowany)";
						}
				}
                $type = $category->type;
                $id = $category->id;
                $videoUrl = '';
                if ($type == 'episode')
				{
				
                    $videoProp = self::getVideoUrl($type,$id);
                    $videoUrl = $videoProp[0];
				}
                $iconUrl = self::getIconUrl($category);
            
                if ($videoUrl == "")
				{				
                    self::addDir($name,$id,self::mode,$type,$iconUrl,$videoUrl,$listsize);
				}
                else
				{
					
                    $prop = array(
                        'title'=> $name,
                        'TVShowTitle' => $name,
                        'aired' => (string)$airDateStr,
                        'episode' => 0,
                        'description' => (string)$videoProp[2],
                        'time' => (string)$videoProp[1]
                        );
						
                   // if  (watched($videoUrl))
					//{
                  //      $prop['overlay'] = 7;
					//}
                    self::addVideoLink($prop,$videoUrl,$iconUrl,$listsize);
				}
			}
		}
		
		if ($showSeasons)
		{
		
            foreach($seasons as $season)
			{
                $iconUrl = self::getIconUrl($season);				
                self::addDir($season->name,$id,$mode,$category,$iconUrl,"",$listsize,$season->id);
			}
		}
	/*
        
        if showNextPage:
            self.addNextPage()
			
        xbmcplugin.addSortMethod( handle=int( sys.argv[ 1 ] ), sortMethod=xbmcplugin.SORT_METHOD_UNSORTED )
        xbmcplugin.addSortMethod( handle=int( sys.argv[ 1 ] ), sortMethod=xbmcplugin.SORT_METHOD_LABEL )
		
        if hasVideo:
            xbmcplugin.setContent(int( sys.argv[ 1 ] ), 'episodes')
			
        xbmcplugin.endOfDirectory(int(sys.argv[1]))	
		*/
	}
	
	 public static function getIconUrl($node)
 {
        $thumbnails = $node->xpath('thumbnail/row');
        $iconUrl = '';
        if (count($thumbnails) > 0)
		{
            $icon = $thumbnails[0]->url;
            $iconUrl = self::mediaHost . self::mediaMainUrl . $icon . '?quality=70&amp;dstw=290&amp;dsth=187&amp;type=1';
		}
        return $iconUrl;
 }
 
  public function getVideoUrl($category='', $id='')
  {
        $method = 'getItem';
        $groupName = 'item';
        $urlQuery = '&type='.$category.'&id='.$id.'&limit='.PAGE_LIMIT.'&page=1&sort=newest&m='.$method;
		
        $urlQuery = $urlQuery . '&deviceScreenHeight=1080&deviceScreenWidth=1920';		
		
        $xmlDoc = simplexml_load_file(self::contentHost.self::startUrl . $urlQuery,'SimpleXMLElement', LIBXML_NOCDATA);
        $runtime = $xmlDoc->xpath($method . "/" . $groupName . "/run_time");
		
		
        $videoTime = 0;
        if ($runtime)
		{
            $videoTimeStr = $runtime[0];
            if  ($videoTimeStr)
			{				
                //$videoTimeElems = explode(':',$videoTimeStr);
                //echo $videoTime = (int)$videoTimeElems[0]*60*60+(int)$videoTimeElems[1]*60+(int)$videoTimeElems[2];
				$videoTime = $videoTimeStr;
			}
		}
        $plot = $xmlDoc->xpath($method . "/" . $groupName . "/lead");
		
        $videoPlot = "";
        if ($plot)
		{
            $videoPlot = $plot[0];
            if  ($videoPlot)
			{
                $videoPlot = $plot[0];
			}
		}
        $videos = $xmlDoc->xpath($method . "/" . $groupName . "/videos/main/video_content/row");
		
        $videoUrls = array();
        $strTab = array();
        foreach($videos as $video)
		{
            $qualityName = $video->profile_name;
            $url = $video->url;
            $strTab[] = (string)$qualityName;
            $strTab[] = (string)$url;
            $videoUrls[] = $strTab;
            $strTab = array();
		}
        ////$rankSorted = sort($videoUrls);
		$rankSorted = $videoUrls;
		
        $videoUrl = '';
        if (count($rankSorted) > 0)
		{
            $quality_temp = $this->tvn_quality_temp;            
			if (platform == 'Mobile')		
			{
			
				$videoUrl = self::generateToken($this->getUrlFromTab($rankSorted, $quality_temp));
			}
            elseif (platform == 'Samsung TV')
			{
				$videoUrl = $this->getUrlFromTab($rankSorted, $quality_temp);			  
			}
		}
        return array($videoUrl, $videoTime, $videoPlot);
  }
  
   public static function addVideoLink($prop,$videoUrl,$iconUrl,$listsize)
   {
		
		echo '<item>
			<title>'.$prop['title'].'</title>
			
			<image>'.$iconUrl.'</image>
			<media:thumbnail url="'.$iconUrl.'" />
			<mediaDisplay name="threePartsView"/>
			<annotation>'.$prop['title'].'</annotation>
			<aired>'.$prop['aired'].'</aired>
			<description>'.$prop['description'].'</description>
			<time>'.$prop['time'].'</time>
			<onClick>				
				url="'.$videoUrl.'";								
				playItemUrl(getURL(url),10);
			</onClick>
			</item>';
   }
   public static function addDir($name,$id,$mode,$category,$iconimage,$videoUrl='',$listsize=0,$season=0)
   {
		if ($category == 'category')
			$category = 'catalog';
			
        $u = "?mode=".$mode."&amp;name=".urlencode ($name)."&amp;category=".urlencode($category)."&amp;id=".urlencode ($id);
        if ($season > 0)
		{
            $u = $u . "&amp;season=" . $season;
		}
        $ok=True;      
        if ($category == 'episode')
		{
			echo '<item>
			<title>'.$name.'</title>			
			<image>'.$iconimage.'</image>
			<media:thumbnail url="'.$iconimage.'" />
			<mediaDisplay name="threePartsView"/>
			<annotation>'.$name.'</annotation>
			</item>';
			
		}
        else
		{
			 echo '<item>
			<title>'.$name.'</title>			
			<link>'.webpath.'/tvn.php'.$u.'</link>
			<onClick>				
				showIdle();
			</onClick>
			<image>'.$iconimage.'</image>
			<media:thumbnail url="'.$iconimage.'" />
			<mediaDisplay name="threePartsView"/>			
			</item>';
		}
        return $ok;	
   }
   
   public function getUrlFromTab($tab, $key)
   {
        $out = '';
            foreach ($tab as $i => $ii)
			{
                $k = $tab[$i][0];
                $v = $tab[$i][1];
                if ($key == $k)
				{
                    $out = $v;
                    break;
				}
			}			

		if ($out == '')
		{
            foreach($tab as $i => $ii)
			{
                $k = $tab[$i][0];
                $v = $tab[$i][1];
				if ($v != '')
				{
                    $out = $v;
                    break;
				}
			}
                
		}		
        return $out;
	}
	
public static function generateToken($url)
{
	$url = str_replace('http://redir.atmcdn.pl/http/','', $url);
	$SecretKey = 'AB9843DSAIUDHW87Y3874Q903409QEWA';
	$iv = 'ab5ef983454a21bd';
	$KeyStr = '0f12f35aa0c542e45926c43a39ee2a7b38ec2f26975c00a30e1292f7e137e120e5ae9d1cfe10dd682834e3754efc1733'; 
	$salt = '';
	for($i = 0; $i<16; $i++){
		$salt.= chr(mt_rand(ord('a'), ord('z')));
	}
	$salt = hexlify($salt);
	$expire = 3600000+  time()*1000 - 946684800000;
	$td = mcrypt_module_open('rijndael-128', '', 'cbc', $iv);
	mcrypt_generic_init($td, $SecretKey, $iv);
	$decrypted = mdecrypt_generic($td, unhexlify($KeyStr));

	mcrypt_generic_deinit($td);
	mcrypt_module_close($td);
	$key = utf8_encode(trim($decrypted));
	 
	$unencryptedToken = "name=".$url."&expire=".$expire."\0";
					  
	$pad ='';
	$xx = (16 - strlen($unencryptedToken) % 16);
	for ($a=1;$a<=$xx;$a++)
	{
		$pad .= chr(16 - strlen($unencryptedToken) % 16);
	}
	$unencryptedToken = $unencryptedToken.$pad;
	$td = mcrypt_module_open('rijndael-128', '', 'cbc', unhexlify($salt));

	mcrypt_generic_init($td, unhexlify($key), unhexlify($salt));
	$encrypted = mcrypt_generic($td, $unencryptedToken);

	mcrypt_generic_deinit($td);
	mcrypt_module_close($td);
	$token= strtoupper(hexlify($encrypted));
	return "http://redir.atmcdn.pl/http/$url?salt=$salt&token=$token";
}
}


$tvn = new tvn();
if (isset($_GET))
	$tvn->listsCategories($_GET['category'],$_GET['id'],$_GET['page'],$_GET['name'], $_GET['season']);
else
	$tvn->listsCategories();






function hexlify($data) {
	$hval = "";
	foreach( str_split($data) as $ch ) {
		$c = dechex(ord($ch));
		if (strlen($c) == 1)
			$c = '0'.$c;
		$hval .= $c;
	}
	
	return $hval;
}

function unhexlify($hex) {

	$str = "";
	for($i = 0; $i < strlen($hex); $i += 2) {
	
		$ch = chr(hexdec($hex{$i} . $hex{$i + 1}));
		$str.= $ch;
	}	
	return $str;
}


?>
</channel>
</rss>