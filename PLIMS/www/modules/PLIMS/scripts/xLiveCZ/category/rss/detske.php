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
	rowCount=3
	columnCount=5
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
		<text align="center" offsetXPC="0" offsetYPC="-2" widthPC="100" heightPC="20" fontSize="30" backgroundColor=-1:-1:-1 foregroundColor=250:250:250>
Bajki</text>

	</mediaDisplay>

<channel>
	<title>in</title>
	<link>/channel/in/rss</link>

<item>
<title>My Little Pony</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,my+little+pony+dubbing</link>
<media:thumbnail url="http://anime.wuxiaedge.com/wp-content/uploads/MyLittlePony_FIM_Fanart005.jpg" />
</item>

<item>
<title>Marta mówi</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,1C6518CD744AAE72</link>
<media:thumbnail url="http://toonbarn.com/wordpress/wp-content/uploads/2009/04/new-episodes-of-martha-speaks.jpg" />
</item>	

<item>
<title>Raa Raa Mały Hałaśliwy Lew</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,raa+raa+maly+halasliwy+lew</link>
<media:thumbnail url="http://www.chesterliteraturefestival.co.uk/wp-content/uploads/2012/09/Curtis-Jobling-Sat-27th-RaRa-the-Noisy-Lion-.jpg" />
</item>

<item>
<title>Ciekawski George</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,ciekawski+george</link>
<media:thumbnail url="http://old.miniminiplus.pl/i/site/zabawa/kartki/2010/ciekawski_george.jpg" />
</item>

<item>
<title>Świat Małej Księżniczki</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,swiat+malej+ksiezniczki</link>
<media:thumbnail url="http://ecsmedia.pl/c/swiat-malej-ksiezniczki-b-iext3926390.jpg" />
</item>

<item>
<title>Klub Przyjaciół Myszki Miki</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,klub+przyjaciol+myszki+miki</link>
<media:thumbnail url="http://sharetv.org/images/mickey_mouse_clubhouse-show.jpg" />
</item>

<item>
<title>Moi Przyjaciele Tygrys i Kubuś</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,moi+przyjaciele+tygrys+i+kubus</link>
<media:thumbnail url="http://img109.imageshack.us/img109/6826/kubuspuchatekiprzyjac55.jpg" />
</item>

<item>
<title>Troskliwe Misie</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,troskliwe+misie</link>
<media:thumbnail url="http://www.dzieckowwarszawie.pl/sites/default/files/imagecache/big-article/Troskliwe-Misie-razem_0.jpg" />
</item>

<item>
<title>Maleńcy</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,klumpies+pl</link>
<media:thumbnail url="http://1.standaardcdn.be/Assets/Images_Upload/2010/12/06/D8_G0L33575A.1_FC_KLUMPIE03.jpg.h170.jpg.280.jpg" />
</item>

<item>
<title>Kitka i Pompon</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,kitka+i+pompon</link>
<media:thumbnail url="http://images50.fotosik.pl/280/6e5a87abbb9fa1fd.jpg" />
</item>

<item>
<title>Zgaduj z Jessem</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,zgaduj+z+jessem</link>
<media:thumbnail url="http://www.cyfraplus.pl/ms_galeria/galeria/32352_3.jpg" />
</item>

<item>
<title>Weterynarz Fred</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,weterynarz+fred</link>
<media:thumbnail url="http://s.redefine.pl/dcs/o2/redefine/redb/1d/1db24efbb572f51f2ecad6c6a28f3595.jpg" />
</item>

<item>
<title>Nouky i przyjaciele</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,nouky+i+przyjaciele</link>
<media:thumbnail url="http://www.qlturka.pl/projects/qlturka/resources/cms/galleries/145b3abea1cc18c56fff632c12421447.jpg" />
</item>


<item>
<title>Pixie i Dixie</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,Pixie+Dixie+i+Pan+Jinks</link>
<media:thumbnail url="http://4.bp.blogspot.com/_Y8m29ZLX5ag/SY1IqJaEUSI/AAAAAAAACuQ/7Mt6bOUnhJU/s400/PIXIE+%26+DIXIE+and+MR+JINKS+INKING.jpg" />
</item>

<item>
<title>SamSam</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,samsam+pl</link>
<media:thumbnail url="http://samsam.blox.pl/resource/Sam_Sam_4.jpg" />
</item>

<item>
<title>Dinopociąg</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,dinopociag</link>
<media:thumbnail url="http://www.dinopociag.com.pl/dinopociag2.jpg" />
</item>

<item>
<title>Luluś</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,lulus+narysuj</link>
<media:thumbnail url="http://static.iplex.pl/1791/media/covers/89/6489.player.frame.jpg" />
</item>

<item>
<title>Mały miś Kuba</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,maly+mis+kuba</link>
<media:thumbnail url="http://kontoredakcyjne.strefa.pl/miskuba2.jpg" />
</item>

<item>
<title>Małe ZOO Lucy</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,male+zoo+lusi</link>
<media:thumbnail url="http://s.redefine.pl/dcs/o2/redefine/images/3b/3b2ad0addb6e94c25a8888bbee55332d.jpg" />
</item>

<item>
<title>Truskawkowe Ciastko</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,truskawkowe+ciastko</link>
<media:thumbnail url="http://i4.ytimg.com/vi/Qne3T5oESLE/0.jpg" />
</item>

<item>
<title>Noddy W Krainie Zabawek</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,PL132DC8C77095E544,</link>
<media:thumbnail url="http://www.cyfraplus.pl/ms_galeria/fotobase/31457_c.jpg" />
</item>

<item>
<title>Tabaluga</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,tabaluga</link>
<media:thumbnail url="http://userserve-ak.last.fm/serve/_/39388755/Tabaluga+ab11e51e0a.jpg" />
</item>

<item>
<title>Lulek.tv</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,lulek.tv</link>
<media:thumbnail url="http://interaktywnie.com/public/upload/img/272x200/03/98/39895_ltv_zapraszamy.png" />
</item>

<item>
<title>Piosenki Rybki Mini Mini</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,PL67F5CA1516AD0335,</link>
<media:thumbnail url="http://www.miniminiplus.pl/images/swiatRybki/ksiazki/47/ksiazka47_big.jpg" />
</item>	

<item>
<title>Piosenki Rybki Mini Mini 2</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,PLF3Ba2Db_nZfT0SX7B7x9i4F3d9StusCV,</link>
<media:thumbnail url="http://ecsmedia.pl/c/przeboje-rybki-mini-mini-2-b-iext6964573.jpg" />
</item>	

<item>
<title>UL</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,ul+bajka</link>
<media:thumbnail url="http://d36huahpe37msy.cloudfront.net/public/images/puzzle/071/122/original.jpg" />
</item>

<item>
<title>Mio i Mao</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,mio+and+mao</link>
<media:thumbnail url="http://www.leesvoer.net/wp-content/uploads/miomao.jpg" />
</item>

<item>
<title>Przygody Psa Clifforda</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,clifford+wielki+czerwony+pies</link>
<media:thumbnail url="http://merlin.pl/Clifford-Clifford-wielki-czerwony-pies_Norman-Bridwell,images_product,3,978-83-237-7977-3.jpg" />
</item>


<item>
<title>Kotka Pusia</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,kotka+pusia</link>
<media:thumbnail url="http://www.cyfrowypolsat.pl/img/entries/b_kotka_pusia_9.jpg" />
</item>

<item>
<title>Opowieści Mamy Mirabelle</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,opowiesci+mamy+mirabelle</link>
<media:thumbnail url="http://img705.imageshack.us/img705/8681/mamamirabelleshomemovie.jpg" />
</item>

<item>
<title>Smerfy</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,smerfy+pl</link>
<media:thumbnail url="http://www.watcherswatch.com/pics/smurfs_cartoon_pic.jpg" />
</item>


<item>
<title>Strażak Sam</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,strazak+sam</link>
<media:thumbnail url="http://www.cyfraplus.pl/ms_galeria/fotobase/37205_c.jpg" />
</item>

<item>
<title>Hello Kitty</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,hello+kitty+pl</link>
<media:thumbnail url="http://www.e-color.cz/image/detail/hello_kitty_wallpaper_Hello-Kitty_800x600.jpg" />
</item>


<item>
<title>Bob budowniczy</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,bob+budowniczy</link>
<media:thumbnail url="http://zielonalekcja.pl/zdjecia_duze/2009/07/20090708112320_bob%20budowniczy.jpg" />
</item>



<item>
<title>Stacyjkowo</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,EB933C10A2D09C1E</link>
<media:thumbnail url="http://static.wirtualnemedia.pl/media/images/Stacyjkowo2_01.jpg" />
</item>


<item>
<title>Bolek i Lolek</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/youtube_user.php?query=1,NewCartoonNetwork</link>
<media:thumbnail url="http://zam.opf.slu.cz/baco/boleklolek.jpg" />
</item>

<item>
<title>Bolek i Lolek II</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,C1CE9EB4A8FFFD43</link>
<media:thumbnail url="http://images1.wikia.nocookie.net/__cb20060312210233/nonsensopedia/images/archive/7/7b/20061026191052!Bolek_i_lolek.jpg" />
</item>

<item>
<title>Reksio</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,A5B11F0A872C7CD3</link>
<media:thumbnail url="http://t3.gstatic.com/images?q=tbn:4x-zbIGNJgL2_M:http://www.reksio.za.pl/images/reksio.gif&amp;t=1" />
</item>

<item>
<title>Reksio II</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,4359530526FEA574</link>
<media:thumbnail url="http://t3.gstatic.com/images?q=tbn:4x-zbIGNJgL2_M:http://www.reksio.za.pl/images/reksio.gif&amp;t=1" />
</item>

<item>
<title>Pszczółka Maja</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,pszczolka+maja.</link>
<media:thumbnail url="http://konfraternia.org/blogi_autorskie/wordpress_piotrsobun/wp-content/uploads/2009/03/pszczolka-maja1-300x272.jpg" />
</item>


<item>
<title>Bałwanek Bouli</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,balwanek+bouli</link>
<media:thumbnail url="http://1.fwcdn.pl/po/97/36/229736/7425890.5.jpg" />
</item>

<item>
<title>Gumisie</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/youtube_user.php?query=1,GummiBearsGumisiePL</link>
<media:thumbnail url="http://bajki-dladzieci.eu/wp-content/uploads/2010/03/gumisie.jpeg" />
</item>

<item>
<title>Tomek i przyjaciele</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,394FF3382A79F828</link>
<media:thumbnail url="http://www.funkydiva.pl/wp-content/uploads/2011/02/tomek-i-przyjaciele-tapety-na-pulpit.jpg" />
</item>



<item>
<title>Pingwiny z Madagaskaru</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,pingwiny+z+madagaskaru</link>
<media:thumbnail url="http://iitv.info/gfx/pingwiny-z-madagaskaru.jpg" />
</item>

<item>
<title>Barbie</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,62ABE7A4280E163F</link>
<media:thumbnail url="http://ia.media-imdb.com/images/M/MV5BMTgyODI1NDY0Ml5BMl5BanBnXkFtZTcwOTEwMDk5NA@@._V1._SX640_SY480_.jpg" />
</item>	


<item>
<title>Bajki różne</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,bajka+po+polsku</link>
<media:thumbnail url="http://www.piosenkidzieciom.pl/imagebajki/bajki-stoliczku-nakryj-sie.jpg" />
</item>

<item>
<title>Przygody kota Filemona</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,83BEE53D469B76A6</link>
<media:thumbnail url="http://www.gandalf.com.pl/o/przygody-kota-filemona-ksiazka-audio-mp3,pd,319549.jpg" />
</item>	

<item>
<title>Przygód kilka wróbla Ćwirka</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,D18B0E8A6165169B</link>
<media:thumbnail url="http://www.kinopodbaranami.pl/images_lib/doc_5042_0.jpg" />
</item>	

<item>
<title>Miś Uszatek</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,9B235C2215EE2836</link>
<media:thumbnail url="http://bajki.info/doogladania/mis-uszatek-08.jpg" />
</item>

<item>
<title>Koziołek matołek</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,C1SYa8pX5UJTJMXnxwRFbDReT2TrRyYZ</link>
<media:thumbnail url="http://www.bibliotekawszkole.pl/inne/gazetki/gazetki027_r1.jpg" />
</item>	

<item>
<title>Wilk i zając</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,50C1EEFF65F6F35F</link>
<media:thumbnail url="http://1.fwcdn.pl/ph/38/85/103885/20421.1.jpg" />
</item>

<item>
<title>Był sobie człowiek</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,E07C69BC8E9ECAB5</link>
<media:thumbnail url="http://n-magazyn.n.pl/typo3temp/pics/8_8b8bdc_d8cbef242f.jpeg" />
</item>

<item>
<title>Muminki</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,eAJfieCJhC2ZWNVdHyrn4mPGQIECEaCT</link>
<media:thumbnail url="http://i.pinger.pl/pgr242/adcb6fec001136414b3cae70/muminki_400x400.jpg" />
</item>


<item>
<title>Kubuś puchatek</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,F260DAF43AA0445C</link>
<media:thumbnail url="http://www.kubusiowo.com/obraz/kubus6.jpg" />
</item>


<item>
<title>Rozbujnik Rumcajs</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,96E913B0767CA681</link>
<media:thumbnail url="http://bajki-dladzieci.eu/wp-content/uploads/2010/08/rozbujnik-rumcajs.jpeg" />
</item>

<item>
<title>Krecik</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,krecik</link>
<media:thumbnail url="http://www.mzv.cz/public/fa/41/1/423949_273491_Kamaradi_skupinka_A_1_.jpg" />
</item>

<item>
<title>Pat a Mat: Sąsiedzi</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,1454301B91F9D4F6</link>
<media:thumbnail url="http://zam.opf.slu.cz/baco/patamat.jpg" />
</item>

<item>
<title>Pampalini łowca zwierząt</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,97692D0AA330493E</link>
<media:thumbnail url="http://www.dooffy.com/images/clanky/345/maly_nahled/slavny-lovec-pampalini-nezapomenutelny-vecernicek_0.jpg" />
</item>

<item>
<title>Czerwony traktorek</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,12E2450F5A3A6DC7</link>
<media:thumbnail url="http://www.bajkowo.ugu.pl/images/photoalbum/album_1/b1499128a8479ad5.jpg" />
</item>

<item>
<title>Barney i przyjaciele</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,CBD4A33E4A5E9DCA</link>
<media:thumbnail url="http://media.tumblr.com/tumblr_lvi7y6l9sb1qdoki3.jpg" />
</item>

<item>
<title>Coyote and Road Runner</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/youtube_user.php?query=1,CoyoteAndRoadRunner</link>
<media:thumbnail url="http://moodychick.files.wordpress.com/2011/01/roadrunner.gif?w=584" />
</item>



<item>
<title>Pingu</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/youtube_user.php?query=1,pingu</link>
<media:thumbnail url="http://4.bp.blogspot.com/_yYV5u3OvP40/S40inudqmCI/AAAAAAAAAvI/yydrtafB7R8/s320/pingu.gif" />
</item>

<item>
<title>Brygada RR</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,brygada+rr</link>
<media:thumbnail url="http://i2.ytimg.com/vi/q_vdM5BGJLA/mqdefault.jpg" />
</item>
 
<item>
<title>Kacze opowieści</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,kacze+opowiesci</link>
<media:thumbnail url="http://republika.pl/blog_qf_4489202/6648915/tr/boysnuncle21.jpg" />
</item>

<item>
<title>Scooby Doo</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,scooby+doo+pl</link>
<media:thumbnail url="http://scoobydoo.swiatbajek.net/images/galeria/duze/Scooby-Doo-tv-02.jpg" />
</item>

<item>
<title>Super Baloo</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,super+baloo</link>
<media:thumbnail url="http://www.albatoraxor.com/files/13/47b.jpg" />
</item>



<item>
<title>Flinstonowie</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,flinstonowie</link>
<media:thumbnail url="http://3.bp.blogspot.com/_65wVG6Fngi0/TKUIIt0tM7I/AAAAAAAAECM/Gba3PTUDOAo/s1600/Flintstones.jpg" />
</item>

<item>
<title>Jetsonowie</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,jetsonowie</link>
<media:thumbnail url="http://hplusmagazine.com/wp-content/uploads/jetsons.jpg" />
</item>

<item>
<title>Goryl Magilla</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,goryl+magilla</link>
<media:thumbnail url="http://www.causticsodapodcast.com/wp-content/uploads/2010/08/Magilla-Gorilla_l.jpg" />
</item>

<item>
<title>Kot TIP-TOP</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,kocia+ferajna</link>
<media:thumbnail url="http://kociaferajna.blox.pl/resource/Kocia_Ferajna_bajepl9.jpg" />
</item>

<item>
<title>Miś Yogi</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,mis+yogi</link>
<media:thumbnail url="http://bajki-dladzieci.eu/wp-content/uploads/2010/10/bajki-yogi-dla-dzieci.jpg" />
</item>

<item>
<title>Tom i Jerry</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,tom+i+jerry+pl</link>
<media:thumbnail url="http://tomandjerry.cartoonlair.com/images/tom-jerry_28.jpg" />
</item>

<item>
<title>Struś Pędziwiatr</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,strus+pedziwiatr</link>
<media:thumbnail url="http://lastcast.tv/galeria/obraz/725269791.jpeg" />
</item>



<item>
<title>Żwirek i Muchomorek</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,zwirek+i+muchomorek</link>
<media:thumbnail url="http://www.kreskowka.pl/images2/cat/20783b9c60d1096d80a902da5677aaef.jpg" />
</item>

<item>
<title>Miś Koralgol</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,koralgol</link>
<media:thumbnail url="http://files.students.ch/uploads/2008/11/20/mistw2015.jpg" />
</item>

<item>
<title>Pinki i Mózg</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,pinki+i+mozg</link>
<media:thumbnail url="http://i4.ytimg.com/vi/OLZUkNij6DA/mqdefault.jpg" />
</item>



<item>
<title>Królik Bugs</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,krolik+bugs</link>
<media:thumbnail url="http://www.cizgifilmseyret.com/files/image/a480ae0847bugs-bunny-4.jpg" />
</item>

<item>
<title>Looney Tunes</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,zwariowane+melodie</link>
<media:thumbnail url="http://lastcast.tv/galeria/obraz/389627539.jpg" />
</item>

<item>
<title>Rózowa Pantera</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,rozowa+pantera</link>
<media:thumbnail url="http://www.windowscasino.com/images/editor/image/Game%20Review%20Images/pinkpanther01.jpg" />
</item>

<item>
<title>Wojownicze Żółwie Ninja</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,wojownicze+zolwie+ninja</link>
<media:thumbnail url="http://bi.gazeta.pl/im/9/7494/z7494689Z.jpg" />
</item>

<item>
<title>Tajemnicze Złote Miasta</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,tajemnicze+zlote+miasta</link>
<media:thumbnail url="http://4.bp.blogspot.com/-tIIIlHylMqg/T1tIlhWQdxI/AAAAAAAABSc/Hzqa6OpLmYE/s1600/childrenofsun.jpg" />
</item>

<item>
<title>Akademia Pana Kleksa</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,akademia+pana+kleksa</link>
<media:thumbnail url="http://www.kinopolska.pl/upload/zdjecia/Akademia-pana-Kleksa-8.jpg" />
</item>


<item>
<title>Fraglesy</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,fraglesy</link>
<media:thumbnail url="http://www.fraglesy.nostalgia.pl/fraglesy-01.jpg" />
</item>

<item>
<title>Simpsonowie</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,simpsonowie</link>
<media:thumbnail url="http://static.guim.co.uk/sys-images/Books/Pix/pictures/2011/1/14/1294999112816/The-Simpsons-007.jpg" />
</item>

<item>
<title>The Muppets Show</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,muppety</link>
<media:thumbnail url="http://gfx.dlastudenta.pl/photos/kultura/kino2011/kermit320.jpg" />
</item>

<item>
<title>Plastusiowy Pamiętnik</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,plastusiowy+pamietnik</link>
<media:thumbnail url="http://i.ytimg.com/vi/tTPmo7iwzw0/0.jpg" />
</item>

<item>
<title>Pomysłowy Dobromir</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,pomyslowy+dobromir</link>
<media:thumbnail url="http://www.geekweek.pl/wp-content/files_flutter/jt_th_bed743d08114c54bf92e6fd6ac1cf82e_1291105822pomyslowy-dobromir.jpg" />
</item>

<item>
<title>Zaczarowany ołówek</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,zaczarowany+olowek</link>
<media:thumbnail url="http://sokratesljoekelsoey.blox.pl/resource/zaczarowanyolowek.jpg" />
</item>

<item>
<title>Czarodziejka z ksiezyca</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,czarodziejka+z+ksiezyca</link>
<media:thumbnail url="http://iitv.info/gfx/czarodziejka-z-ksiezyca-sailor-moon.jpg" />
</item>

<item>
<title>Porwanie Baltazara Gąbki</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,porwanie+baltazara+gabki</link>
<media:thumbnail url="http://www.porwaniebaltazaragabki.nostalgia.pl/porwanie-baltazara-gabki-02.jpg" />
</item>



<item>
<title>Siedem życzeń</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,siedem+zyczen+p.</link>
<media:thumbnail url="http://c.wrzuta.pl/wi4344/a5d97ce8001dd2a24e931423/zdjecie_z_serialu_siedem_zyczen" />
</item>

<item>
<title>Janka</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,Janka</link>
<media:thumbnail url="http://bi.gazeta.pl/im/4/8266/z8266994X.jpg" />
</item>

<item>
<title>La Linea</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,PL69CA847A1767B3D5</link>
<media:thumbnail url="http://i.ytimg.com/vi/JfYVcVkwE-M/0.jpg" />
</item>	

<item>
<title>Historie biblijne</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,PLC788E7A0749F5F50</link>
<media:thumbnail url="http://iptak.pl/pliki/screen/8b098568a7b0184230635032bb95213eafe895b2_0.jpg" />
</item>	

<item>
<title>Inspektor Gadżet</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,inspektor+gadzet</link>
<media:thumbnail url="http://sharetv.org/images/inspector_gadget-show.jpg" />
</item>

<item>
<title>Garfield i przyjaciele</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,garfield+i+przyjaciele</link>
<media:thumbnail url="http://fajnegry.12tka.com/wp-content/uploads/garfield-sheep-shot.jpg" />
</item>

<item>
<title>Motomyszy z Marsa</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,motomyszy+z+marsa</link>
<media:thumbnail url="http://bluba.pl/img/2012/11/4124.jpg" />
</item>

<item>
<title>Myszka Miki</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_search.php?query=1,myszka+miki+walt+disney</link>
<media:thumbnail url="http://img.interia.pl/rozrywka/nimg/f/3/roz3784888.jpg" />
</item>

<item>
<title>Monster High</title>
<link><?php echo $HTTP_SCRIPT_ROOT; ?>xLiveCZ/category/youtube/yt_playlist.php?query=1,A8F3F557CD23DBF4</link>
<media:thumbnail url="http://1.bp.blogspot.com/_vj2e1m7Hlgw/TQjElAvyFdI/AAAAAAAAwiw/pksuLEW0XlY/s400/Monster-High-logo-2-monsterhigh-14502973-1280-800.jpg" />
</item>	


</channel>
</rss>
