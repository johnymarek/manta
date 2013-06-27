#!/bin/sh

mos=`cat /tmp/plims_mos`

fix_rights()
{
  chmod 755 $mos/PLIMS/bin/rtmpdump
  chmod 755 $mos/PLIMS/scripts/xLiveCZ/msdl
  chmod 755 $mos/PLIMS/scripts/xLiveCZ/msdl.sh
  chmod 755 $mos/PLIMS/scripts/xLiveCZ/nova.sh
  rm -R $mos/PLIMS/scripts/xLiveCZ/rtmpdump
  cd /usr/local/etc/mos/www/modules/PLIMS/scripts/xLiveCZ/
  ln -s ./../../bin/rtmpdump rtmpdump
}

create_backup()
{
  echo "Backup ustawień przed instalacją"
  cp -R  $mos/PLIMS/ustawienia.xml /tmp/ustawienia.xml   /tmp/
  cp -R $mos/PLIMS/scripts/xLiveCZ/category/tv/WeebTV.xml  /tmp/
  
}
restore()
{
 echo "Przywracanie ustawień"
 cp -R /tmp/ustawienia.xml $mos/PLIMS/
 cp -R /tmp/WeebTV.xml $mos/PLIMS/scripts/xLiveCZ/category/tv/
 
}
download()
{
	echo "Pobieranie paczki.."
	wget -q http://manta.googlecode.com/files/PLIMS.tar.bz2 -O /tmp/PLIMS.tar.bz2
}

check()
{
	if [ ! -e /tmp/PLIMS.tar.bz2 ];
	then
		echo "Błąd pobierania!"
		exit 0
	fi
}

if [ $mos = "/tmp/www/modules" ];
then
	create_backup;  
	download;
	check;
	echo "Aktualizacja pakietu mos..."
	pm update PLIMS now
   fix_rights;
   restore;
else
	create_backup;
	download;
	check;
	echo "Tworzenie tymczasowego katalogu.."
	mkdir $mos/PLIMS_TEMP
	echo "Rozpakowanie.."
	tar xjf /tmp/PLIMS.tar.bz2 -C $mos/PLIMS_TEMP/
	echo "Nadpisywanie plików.."
	cp -R $mos/PLIMS_TEMP/www/modules/PLIMS/* $mos/PLIMS/
	echo "Usuwanie tymczasowego katalogu.."
	rm -R $mos/PLIMS_TEMP
   fix_rights;
   restore;
fi

echo -e "\nInstalacja przebiegła pomyślnie.\nZrestartuj PLIMS (wyjdź i wejdź) aby zobaczyć zmiany."