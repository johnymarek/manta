#!/bin/sh
# Version 3.1,
# Copyright (c) 2012, 2013 kmarty, killerman
# This file is a part of xLiveCZ, this project doesnt have
# any support from Xtreamer company and just be design for 
# realtek based players

CUR_DIR=$(dirname $0)
msdl=$CUR_DIR/msdl
ffmpeg=$CUR_DIR/ffmpeg

QUERY_STRING="NONE&${QUERY_STRING}"
QUERY_STRING=`echo ${QUERY_STRING} | sed -e 's/%5c//g;s/%/\\\x/g'`
QUERY_STRING=`printf "${QUERY_STRING}"`
#
TYPE="${QUERY_STRING##*&type=}" ; TYPE="${TYPE%%&*}"
URL="${QUERY_STRING##*&url=}" ; URL="${URL%%&*}"
TIP="${QUERY_STRING##*&tip=}" ; TIP="${TIP%%&*}"
ACT="${QUERY_STRING##*&act='}" ; ACT="${ACT%%'*}"
GER="${QUERY_STRING##*&ger='}" ; GER="${GER%%'*}"
GR="${QUERY_STRING##*&gr='}" ; GR="${GR%%'*}"
A="${QUERY_STRING##*&a=}" ; A="${A%%&*}"
C="${QUERY_STRING##*&c=}" ; C="${C%%&*}"
L="${QUERY_STRING##*&l=}" ; L="${L%%&*}"
N="${QUERY_STRING##*&n=}" ; N="${N%%&*}"
P="${QUERY_STRING##*&p=}" ; P="${P%%&*}"
S="${QUERY_STRING##*&s=}" ; S="${S%%&*}"
T="${QUERY_STRING##*&t=}" ; T="${T%%&*}"
W="${QUERY_STRING##*&w=}" ; W="${W%%&*}"
Y="${QUERY_STRING##*&y=}" ; Y="${Y%%&*}"
J="${QUERY_STRING##*&j=}" ; J="${J%%&*}"
K="${QUERY_STRING##*&k=}" ; K="${K%%&*}"

if [ "$TYPE" == "m3u8" ]; then
   echo -e "Content-type: video/mp4\n"
   exec $ffmpeg -i "$URL" -c copy -f matroska -
fi

if [ "$TYPE" == "ytlive" ]; then
   echo -e "Content-type: video/mp4\n"
   exec $ffmpeg -i "$ACT" -c copy -f matroska -
fi

if [ "$TYPE" == "czskm3u8" ]; then
   echo -e "Content-type: video/mp4\n"
   exec $ffmpeg -i "$URL" -c copy -acodec aac -strict -2 -ar 48000 -f matroska -
fi

if [ "$TYPE" == "test" ]; then
   echo -e "Content-type: video/wmv\n"
   exec $msdl -q -o - "$URL"
fi

if [ "$TYPE" == "live" ]; then
   echo -e "Content-type: video/wmv\n"
   exec $msdl -q --useragent "VLC/2.0" "$URL" -o -
fi

if [ "$TYPE" == "mixtv" ]; then
   echo -e "Content-type: video/wmv\n"
   exec $msdl -q --useragent "VLC/2.0" "$URL" --username "vsadmin" --password "yxcvbnm123!" -o -
fi

if [ "$TYPE" == "mix" ]; then
   echo -e "Content-type: video/wmv\n"
   exec $msdl -q --useragent "VLC/2.0" "$URL" --username "vsadmin" --password "neuespasswort" -o -
fi

if [ "$TYPE" == "ruske" ]; then
   echo -e "Content-type: video/wmv\n"
   exec $msdl "$URL" -o -
fi