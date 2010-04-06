#!/bin/sh
LOC="."
REMOT=""
if [ $1 ]; then
    LOC=$1
    REMOT=$1
#    echo $1
fi
scp -r wp/$LOC rod@rod.42n.pl:~/public_html/other/42n_rod/$REMOT
