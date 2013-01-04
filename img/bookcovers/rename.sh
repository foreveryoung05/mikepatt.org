#!/bin/sh

names=$1

exec 3<$names

while IFS= read -r nameline <&3
do
	echo "$nameline -> $nameline.png"
	mv "$nameline" "$nameline.png"
	sleep 1
done