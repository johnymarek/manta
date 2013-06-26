#!/bin/sh
# Version 4.9,
#
# Copyright (c) 2012, 2013 kmarty, killerman
# This file is a part of xLiveCZ, this project doesnt have
# any support from Xtreamer company and just be design for 
# realtek based players

CUR_DIR=$(dirname $0)
RTMPDUMP=$CUR_DIR/rtmpdump

# Tohle resi pripadnou neexistenci promenny v QUERY_STRING
# a zaroven zajistuje, ze pred vsemi promennymi se vyskytuje ampersand. 
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
#
#
if [ "$TIP" == "ct" ]; then
	# CT to ma opravdu jinak :-(
	echo -e "Content-type: video/mp4\n"
	exec $RTMPDUMP -q -o - -b 300 -r "$ACT" -v
	exit 0
fi

if [ "$TIP" == "ctlive" ]; then
	# CT to ma opravdu jinak :-(
	echo -e "Content-type: video/mp4\n"
	exec $RTMPDUMP -q -o - -b 300 -k 5 -v -r "$ACT" -p "$P" -W "$W"
	exit 0
fi

case "$TYPE" in
	mp4nova)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -b 300 -k 5 -r "$URL" -y "$Y" -T "h0M*t:pa$kA" -v
		;;
		
	dolce)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 60000 -v -r "$URL" -W "$W" -v
		;;
		
	flvocko)
		echo -e "Content-type: video/flv\n"
		exec $RTMPDUMP -q -b 3000 -r "$URL" -v -W "$W" -p "$P" -s "$S"
		;;
		
	hustelive)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 300 -k 5 -r "$URL" -v -p "$P" -y "$Y" -W "$W"
		;;
	
	prima)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 300 -k 5 -r "$URL" -y "$Y" -v
		;;

	flv)
		echo -e "Content-type: video/x-flv\n"
		exec $RTMPDUMP -q -b 3000 -r "$URL"
		;;

	mp4jh)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 300 -k 5 -n "$N" -t "$T" -p "$P" -W "$S" -y "$Y" -c "$C"
		;;
		
	markiza)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 300 -k 5 -r "$URL" -v -p "$P"
		;;

	mp4stv)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 300 -r "$URL" -w "$W" -y "$Y" -p "$P" -v
		;;
	
	germany)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 300 -r "$URL" -y "$gr" -W "$W" -p "$ger" -v
		;;

	onehd)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 300 -r "$URL" -y "$Y" -W "$W" -p "$P" -T "$T" -v
		;;
		
	justin)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 300 -r "$URL" -W "$W" -p "$P" --jtv "$GER" -v
		;;
	
	musicnext)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 300 -r "$URL" -a "$A" -y "$Y" -W "$W" -p "$P" -T "#ed%h0#w@1" -v
		;;
	
	simple)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 300 -r "$URL" -y "$Y" -W "$W" -p "$P" -T "Rd#n@k72JDh" -v
		;;

	disney)
		echo -e "Content-type: video/mpeg\n"
		exec $RTMPDUMP -q -o - -b 300 -r "$URL" -y "$Y" -W "$W" -p "$P" -v
		;;
		
	mediaplanet)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -r "$URL" -y "$Y" -W "$W" -p "$P" -v
		;;
		
	barrandov)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -b 300 -k 5 -l "2" -r "rtmpe://93.185.103.10:1935/vodpass" -a "vodpass" -f "WIN 10,3,181,14" -W "http://www.barrandov.tv/flash/unigramPlayer_v1.swf?itemid=65240" -p "$P" -y "$Y" -T "#ed%h0#w@1" -v
		;;
		
	animacek)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -b 300 -k 5 -l "2" -r "rtmpe://93.185.103.106/vods" -a "vods" -f "WIN 10,3,181,14" -W "http://animacek.tv/Content/flash/uniplayer.swf?itemid=54" -p "$P" -y "$Y" -T "#ed%h0#w@1" -v
		;;
		
	weeb)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -o - -r "$URL" -W "$W" -p "$P" -y "$Y" --weeb "$J" -v
		;;
		
	wlacz)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 300 -r "$URL" -y "$Y" -v
		;;
		
	obecne)
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -o - -b 300 -k 5 -r "$URL" -v -p "$P" -y "$Y" -W "$W" -a "$A"
		;;
		
	*)
		# Aneb co se jinam neveslo. Vcetne prazdneho $TYPE
		echo -e "Content-type: video/mp4\n"
		exec $RTMPDUMP -q -b 3000 -k 5 -r "$URL" -v
		;;
esac