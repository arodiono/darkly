#!/bin/sh

if [ -f $1 ]; then
	echo "Enter the IP of your VM"
	echo "./`basename $0` <ip>"
else
    curl -s -A "ft_bornToSec" --referer "https://www.nsa.gov/" "http://$1/index.php?page=e43ad1fdc54babe674da7c7b8f0127bde61de3fbe01def7d00f151c2fcca6d1c" | grep 'flag' | sed -E 's|</?[^<>]*>| |g'
fi