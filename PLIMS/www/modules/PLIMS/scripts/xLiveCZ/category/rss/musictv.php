<?php
// ###############################################################
// ##                                                           ##
// ##   http://sites.google.com/site/pavelbaco/                 ##
// ##   Copyright (C) 2012  Pavel Bačo   (killerman)            ##
// ##                                                           ##
// ## This file is a part of xLiveCZ, this project doesnt have  ##
// ## any support from Xtreamer company and just be design for  ##  
// ## realtek based players									    ##
// ###############################################################
echo "<?xml version='1.0' encoding='UTF8' ?>";
$DIR_SCRIPT_ROOT  = current(explode('xLiveCZ/', dirname(__FILE__).'/')).'xLiveCZ/';
$HTTP_SCRIPT_ROOT = current(explode('scripts/', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/')).'scripts/';
?>
<!--Realtek chip players - killerman - without any support Xtreamer-->
<rss version="2.0" xmlns:media="http://purl.org/dc/elements/1.1/" xmlns:dc="http://purl.org/dc/elements/1.1/">
<mediaDisplay name=photoView
	rowCount=5
	columnCount=6
	drawItemText="no"
	showHeader="no" 
	menuBorderColor="0:0:0"
	sideColorBottom="0:0:0"
	sideColorTop="0:0:0"
	itemImageXPC="10"
	itemOffsetXPC="7"
	backgroundColor="0:0:0"
	sliding="no"
	idleImageXPC="45"
	idleImageYPC="45"
	idleImageWidthPC="8.6"
	idleImageHeightPC="6"
	itemGapYPC="2"
	itemGapXPC="1.5"
	>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy0.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy1.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy2.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy3.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy4.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy5.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy6.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy7.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy8.png</idleImage>
		<idleImage><?php echo $DIR_SCRIPT_ROOT; ?>image/busy9.png</idleImage>
		<image redraw="no" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="18"><?php echo $DIR_SCRIPT_ROOT; ?>backgrounds/top.png</image>
		<image redraw="no" offsetXPC="3" offsetYPC="3" widthPC="14" heightPC="14"><?php echo $DIR_SCRIPT_ROOT; ?>image/hudebni.png</image>
		<text align="center" offsetXPC="0" offsetYPC="-2" widthPC="100" heightPC="20" fontSize="30" backgroundColor=-1:-1:-1 foregroundColor=250:250:250>
Muzyczne TV</text>
		</mediaDisplay>

<channel>
	<title>Muzyczne TV</title>
	<link>/channel/musictv/rss</link>

<item>
<title>OneHD</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/tv/onehd.php</link>
<media:thumbnail url="http://live.1hd.ro/images/logo.png" />
</item>

<item>
<title>Óčko Live!</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=flvocko&amp;url=rtmp://194.79.52.77/ockoi/ockoHQ1&amp;w=ocko.tv/shared/player/embed/playerLive.swf&amp;p=http://ocko.tv/ocko-tv-zive/&amp;s=ocko.tv/shared/player/embed/playerLive.swf</link>
<media:thumbnail url="http://i.idnes.cz/09/032/gal/JMA29b0dd_ocko_tv_splash_screen.gif" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=flvocko&amp;url=rtmp://194.79.52.77/ockoi/ockoHQ1&amp;w=ocko.tv/shared/player/embed/playerLive.swf&amp;p=http://ocko.tv/ocko-tv-zive/&amp;s=ocko.tv/shared/player/embed/playerLive.swf"/>
</item>



<item>
<title>Mooz HD</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=dolce&amp;w=http://static.mediadirect.ro/player-preload/swf/preloader/preloader.swf&amp;url=rtmpe://fms15.mediadirect.ro:80/live3?id=41340808&publisher=2/moozhd</link>
<media:thumbnail url="http://static.dolcetv.ro/img/tv_sigle/sigle_black/113.png" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=dolce&amp;w=http://static.mediadirect.ro/player-preload/swf/preloader/preloader.swf&amp;url=rtmpe://fms15.mediadirect.ro:80/live3?id=41340808&publisher=2/moozhd"/>
</item>

<item>
<title>Mooz Hits</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=dolce&amp;w=http://static.mediadirect.ro/player-preload/swf/preloader/preloader.swf&amp;url=rtmpe://fms15.mediadirect.ro:80/live3?id=41340808&publisher=2/moozhits</link>
<media:thumbnail url="http://static.dolcetv.ro/img/tv_sigle/sigle_black/114.png" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=dolce&amp;w=http://static.mediadirect.ro/player-preload/swf/preloader/preloader.swf&amp;url=rtmpe://fms15.mediadirect.ro:80/live3?id=41340808&publisher=2/moozhits"/>
</item>

<item>
<title>Mooz Ro</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=dolce&amp;w=http://static.mediadirect.ro/player-preload/swf/preloader/preloader.swf&amp;url=rtmpe://fms15.mediadirect.ro:80/live3?id=41340808&publisher=2/moozro</link>
<media:thumbnail url="http://static.dolcetv.ro/img/tv_sigle/sigle_black/115.png" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=dolce&amp;w=http://static.mediadirect.ro/player-preload/swf/preloader/preloader.swf&amp;url=rtmpe://fms15.mediadirect.ro:80/live3?id=41340808&publisher=2/moozro"/>
</item>

<item>
<title>Kiss TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=dolce&amp;w=http://static.mediadirect.ro/player-preload/swf/preloader/preloader.swf&amp;url=rtmpe://fms15.mediadirect.ro:80/live3?id=41340808&publisher=2/kiss</link>
<media:thumbnail url="http://static.dolcetv.ro/img/tv_sigle/sigle_black/46.png" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=dolce&amp;w=http://static.mediadirect.ro/player-preload/swf/preloader/preloader.swf&amp;url=rtmpe://fms15.mediadirect.ro:80/live3?id=41340808&publisher=2/kiss"/>
</item>

<item>
<title>Party TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=dolce&amp;w=http://static.mediadirect.ro/player-preload/swf/preloader/preloader.swf&amp;url=rtmpe://fms15.mediadirect.ro:80/live3?id=41340808&publisher=2/party</link>
<media:thumbnail url="http://static.dolcetv.ro/img/tv_sigle/sigle_black/60.png" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=dolce&amp;w=http://static.mediadirect.ro/player-preload/swf/preloader/preloader.swf&amp;url=rtmpe://fms15.mediadirect.ro:80/live3?id=41340808&publisher=2/party"/>
</item>

<item>
<title>MusicBox</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://80.94.52.144/live/mpegts.stream", 10);</onClick>
<media:thumbnail url="http://static.etrend.sk/uploads/tx_media/2007/8/musicbox_logo.gif" />
</item>
<item>
<title>TV FUN1</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=test&amp;url=mms://portal.satplus.cz/TV_FUN1</link>
<media:thumbnail url="http://i.iinfo.cz/urs/logo_fun1-120663941974758.jpg" />
<enclosure type="video/x-ms-asf" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=test&amp;url=mms://portal.satplus.cz/TV_FUN1"/>
</item><item>
<title>Eska TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://46.105.112.212:1935/live/mpegts.stream</link>
<media:thumbnail url="http://www.lyngsat-logo.com/hires/ee/eska_tv.png" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://46.105.112.212:1935/live/mpegts.stream"/>
</item>

<item>
<title>Retro Music Television - nefunguje na Prodigy/SW3</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://91.103.163.202/live&amp;w=http://www.retromusic.cz/thirdparty/jwplayer/player.swf&amp;p=http://www.retromusic.cz/index.php?language=cs&amp;y=retrotv</link>
<media:thumbnail url="http://imgs.idnes.cz/hudba/A100330_OB_RETRO_TV_LOGO.JPG" />
<enclosure type="video/x-ms-asf" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://91.103.163.202/live&amp;w=http://www.retromusic.cz/thirdparty/jwplayer/player.swf&amp;p=http://www.retromusic.cz/index.php?language=cs&amp;y=retrotv"/>
</item>

<item>
<title>Radio Montecarlo TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://fms.105.net:1935/live/&amp;w=http://video.radiomontecarlo.net/com/universalmind/swf/videoPlayerAdsWizz01.swf&amp;y=rmc1</link>
<media:thumbnail url="http://www.radiomontecarlo.net/images/intro/logo.png" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://fms.105.net:1935/live/&amp;w=http://video.radiomontecarlo.net/com/universalmind/swf/videoPlayerAdsWizz01.swf&amp;y=rmc1"/>
</item>

<item>
<title>Radio 105 Network TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://fms.105.net:1935/live/&amp;w=http://video.105.net/com/universalmind/swf/videoPlayerAdsWizz01.swf&amp;y=105Test1</link>
<media:thumbnail url="http://www.lyngsat-logo.com/hires/rr/radio_105.png" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://fms.105.net:1935/live/&amp;w=http://video.105.net/com/universalmind/swf/videoPlayerAdsWizz01.swf&amp;y=105Test1"/>
</item>

<item>
<title>RTL102.5 TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=flvocko&amp;url=rtmp://rtl-livestream4me.weebo.it:80/live/radiovisione_03</link>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/rr/rtl_1025_hit_channel.jpg" />
<enclosure type="video/flv" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=flvocko&amp;url=rtmp://rtl-livestream4me.weebo.it:80/live/radiovisione_03"/>
</item>

<item>
<title>CMC TV(CALIFORNIA MUSIC CHANNEL)</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=flvocko&amp;url=rtmp://cmctv.flash.internapcdn.net:1935/cmctv_vitalstream_com/live_adaptive_1/CMC-TV_adaptive3</link>
<media:thumbnail url="http://www.cmc-tv.com/images/camuslogo.gif" />
<enclosure type="video/flv" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=flvocko&amp;url=rtmp://cmctv.flash.internapcdn.net:1935/cmctv_vitalstream_com/live_adaptive_1/CMC-TV_adaptive3"/>
</item>

<item>
<title>CZWÓRKA</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://stream85.polskieradio.pl/video/czworka.sdp</link>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/radio/pp/polskie_radio4.jpg" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://stream85.polskieradio.pl/video/czworka.sdp"/>
</item>

<item>
<title>Rouge TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://rtmp.infomaniak.ch/livecast/&amp;w=http://www.rougetv.ch/JWPlayer/mediaplayer/live.swf&amp;p=http://www.rougetv.ch/index.php&amp;y=rougetv</link>
<media:thumbnail url="http://static.infomaniak.ch/livetv/gfx_preload_rougetv.png" />
<enclosure type="video/flv" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://rtmp.infomaniak.ch/livecast/&amp;w=http://www.rougetv.ch/JWPlayer/mediaplayer/live.swf&amp;p=http://www.rougetv.ch/index.php&amp;y=rougetv"/>
</item>

<item>
<title>UTV</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmpe://82.76.249.77:80/utvedge/utvlive&amp;w=http://www.digi24.ro/balancer/player.swf&amp;p=http://www.utv.ro/live/&amp;y=utvlive", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/uu/u_tv.jpg" />
</item>

<item>
<title>DELUXE MUSIC</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://flash.cdn.deluxemusic.tv/deluxemusic.tv-live/&amp;w=http://static.staging.deluxemusic.tv.dl1.ipercast.net/theme/deluxemusic.tv/flash/deluxemusic.swf&amp;p=http://deluxemusic.tv.staging.ipercast.net&amp;y=web_850.stream</link>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/dd/deluxe_music.jpg" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://flash.cdn.deluxemusic.tv/deluxemusic.tv-live/&amp;w=http://static.staging.deluxemusic.tv.dl1.ipercast.net/theme/deluxemusic.tv/flash/deluxemusic.swf&amp;p=http://deluxemusic.tv.staging.ipercast.net&amp;y=web_850.stream"/>
</item>

<item>
<title>MUSICBOX TV RU</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://musicbox.cdnvideo.ru/musicbox-live/&amp;w=http://www.musicboxtv.ru/flowplayer/flowplayer-3.2.7.swf&amp;p=http://www.musicboxtv.ru/online.html&amp;y=musicbox.sdp</link>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/mm/musicbox_ru.jpg" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://musicbox.cdnvideo.ru/musicbox-live/&amp;w=http://www.musicboxtv.ru/flowplayer/flowplayer-3.2.7.swf&amp;p=http://www.musicboxtv.ru/online.html&amp;y=musicbox.sdp"/>
</item>

<item>
<title>A-One TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://a1tv.cdnvideo.ru/a1tv-live/&amp;w=http://www.a1tv.ru/player/swf/player.swf&amp;p=http://www.a1tv.ru/online/flash/&amp;y=22</link>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/aa/a_one_tv.jpg" />
<enclosure type="video/flv" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://a1tv.cdnvideo.ru/a1tv-live/&amp;w=http://www.a1tv.ru/player/swf/player.swf&amp;p=http://www.a1tv.ru/online/flash/&amp;y=22"/>
</item>

<item>
<title>Perviy Muzikalnyi Telekanal</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://80.232.172.37/rtplive&amp;w=http://www.1music.tv/plugins/flowplayer/flowplayer.controls-3.2.3.swf&amp;p=http://www.1music.tv/rus/main/live/&amp;y=vlc.sdp</link>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/pp/perviy_muzykalnyi_telekanal.jpg" />
<enclosure type="video/flv" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://80.232.172.37/rtplive&amp;w=http://www.1music.tv/plugins/flowplayer/flowplayer.controls-3.2.3.swf&amp;p=http://www.1music.tv/rus/main/live/&amp;y=vlc.sdp"/>
</item>

<item>
<title>Virgin TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://fms.105.net:1935/live/virgin1</link>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/radio/vv/virgin_radio.jpg" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://fms.105.net:1935/live/virgin1"/>
</item>

<item>
<title>Fresh TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://www.planeta-online.tv:1936/live/channel_4</link>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/ff/fresh_nz.jpg" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://www.planeta-online.tv:1936/live/channel_4"/>
</item>

<item>
<title>Play.me TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://cp107974.live.edgefcs.net/live/beep-flash-live@34654</link>
<media:thumbnail url="http://b.vimeocdn.com/ps/617/61753_300.jpg" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://cp107974.live.edgefcs.net/live/beep-flash-live@34654"/>
</item>

<item>
<title>Teleritmo TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://173.193.48.164/multimedios/1025_teleritmo</link>
<media:thumbnail url="http://www.pctv.mx/Portals/0/Logos/Se%C3%B1ales/Representadas/TELERITMO_72.jpg" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://173.193.48.164/multimedios/1025_teleritmo"/>
</item>

<item>
<title>4fun TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://creyden.popler.tv:80/publishlive?play=123452/4funtv&amp;w=http://images.popler.tv/player/flowplayer.rtmp.swf&amp;y=4funtv</link>
<media:thumbnail url="http://bi.gazeta.pl/im/4/6479/z6479334X,4fun-tv.jpg" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://creyden.popler.tv:80/publishlive?play=123452/4funtv&amp;w=http://images.popler.tv/player/flowplayer.rtmp.swf&amp;y=4funtv"/>
</item>

<item>
<title>Music next HD TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://vod.wowza.astrosa.pl/rtplive&amp;y=:music_540p.stream&amp;w=http://static.oognet.pl/oognet/swf/PLAYERDMINITV.swf?_=1327940285&amp;p=http://oognet.pl/content/details/115</link>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/mm/music_mix.jpg" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://vod.wowza.astrosa.pl/rtplive&amp;y=:music_540p.stream&amp;w=http://static.oognet.pl/oognet/swf/PLAYERDMINITV.swf?_=1327940285&amp;p=http://oognet.pl/content/details/115"/>
</item>

<item>
<title>Polo TV</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://stream1.polotv.com.pl/polotv/stream1</link>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/pp/polo_tv.jpg" />
<enclosure type="video/mp4" url="<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://stream1.polotv.com.pl/polotv/stream1"/>
</item>

<item>
<title>Music Plus</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://91.82.85.71:1935/live/_definst_/&amp;y=musicplus&amp;p=http://livetvstreaming.ucoz.com", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/hires/mm/music_plus_hu.png" />
</item>

<item>
<title>Dance TV</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=test&amp;url=mmsh://91.82.85.42/dancetv", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/dd/dance_tv.jpg" />
</item>

<item>
<title>Europa Plus</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://europaplus.cdnvideo.ru:1935/europaplus-live&amp;y=mp4:eptv_main.sdp&amp;w=http://www.europaplustv.com/javascript/videoplayernew.swf&amp;p=http://www.europaplustv.com/online", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/radio/ee/europa_plus.jpg" />
</item>

<item>
<title>SLAM FM</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://82.201.53.52:80/livestream&amp;y=slamtv&amp;w=http://superusvox.com/modules/mod_playerjr/player-licensed5.swf&amp;p=http://superusvox.com/index.php/more-channels/music/slam-tv", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/ss/slam_tv.jpg" />
</item>

<item>
<title>NR1</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=onehd&amp;url=rtmp://wowza1.radyoyayini.com/live&amp;w=http://wwwnumberone.com.tr/nr1/tv/live.swf&amp;p=http://myfreetv.ucoz.net/index/number_one_tv_turkey/0-893&amp;y=nr2.sdp", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/hires/nn/number_one_fm_tr.png" />
</item>

<item>
<title>Magic</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=obecne&amp;url=rtmp://212.7.194.21/live2/1234&amp;w=http://player.longtailvideo.com/player.swf&amp;p=http://www.rtvbox.com/magic.php", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/mm/magic_tv_uk.jpg" />
</item>

<item>
<title>Iper Tv</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=test&amp;url=mmsh://mediatv2.topix.it/24Ipertv66", 10);</onClick>
<media:thumbnail url="http://www.iper.tv/images/logo_completo.gif" />
</item>

<item>
<title>For Music Italy</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://wowza1.top-ix.org/quartaretetv1/formusicweb", 10);</onClick>
<media:thumbnail url="http://www.lvia.it/sites/default/files/giovani_intercultura/forMusic.jpg" />
</item>

<item>
<title>Šlágr TV</title>
<onClick>playItemURL("http://92.62.224.106:10000", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/ss/slagr_tv_cz.jpg" />
</item>

<item>
<title>Capital TV UK</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://cdn-sov-2.musicradio.com:80/LiveVideo/Capital", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/hires/cc/capital_tv_uk.png" />
</item>

<item>
<title>Heart TV UK</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/nova.sh?type=&amp;url=rtmp://cdn-sov-2.musicradio.com:80/LiveVideo/Heart", 10);</onClick>
<media:thumbnail url="http://www.lyngsat-logo.com/logo/tv/hh/heart_tv_uk.jpg" />
</item>

<item>
<title>4Music TV</title>
<onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=test&amp;url=http://posle.at.ua/dir/0-0-1-215-20", 10);</onClick>
<media:thumbnail url="http://www.blowfishdigital.com/wp-content/uploads/2012/06/4music.png" />
</item>


		 <item>
         <title>hitmusictv - nehraje na prodigy/sw3</title>
         <onClick>playItemURL("http://88.191.126.62:18002", 10);</onClick>
		 <media:thumbnail url="http://televizeonline.jecool.net//loga/130.jpg" />
		 </item>

		<item>
         <title>gotv</title>
         <onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=mix&amp;url=http://92.60.12.13:9218", 10);</onClick>
		 <media:thumbnail url="http://televizeonline.jecool.net//loga/56.png" />
		 </item>
		 
		 <item>
         <title>viva</title>
         <onClick>playItemURL("<?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/msdl.sh?type=mix&amp;url=http://92.60.12.13:9207", 10);</onClick>
		 <media:thumbnail url="http://televizeonline.jecool.net//loga/52.gif" />
		 </item>
		 
         <item>
         <title>vh1classic</title>
         <onClick>playItemURL("http://moetv.tv/kernel/testplayer/mtvTestPlayerGate.php?un=test2&ux=f12f37e58418035ba3e9cb2a5ca2b78f&ch=81", 10);</onClick>
		 <media:thumbnail url="http://televizeonline.jecool.net//loga/97.gif" />
		 </item>

         <item>
         <title>mezzo</title>
         <onClick>playItemURL("http://web1.io.siol.net/get.str?oid=mezzo&k=tvin_39393465623436336361393430373432633038353363636531356634653531620035373639316462393961346662366163626262346130393230383465656665390073736d616a69633100736c6f31", 10);</onClick>
		 <media:thumbnail url="http://televizeonline.jecool.net//loga/311.png" />
		 </item>
		 
         <item>
         <title>o2tv</title>
         <onClick>playItemURL("http://178.49.208.29:1234/udp/239.1.8.3:1234", 10);</onClick>
		 <media:thumbnail url="http://televizeonline.jecool.net//loga/135.jpg" />
		 </item>

</channel>
</rss>