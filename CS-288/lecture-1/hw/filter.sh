#! /bin/bash
avg_size=0
function average {
	dir=( `ls $1` )
	count=${#dir[*]}
	size=( `ls -l -S $1 | awk '{ print $5 }'` )
	for i in ${size[*]}; do
		total=$((total + $i))
	done
	avg_size=$((total / count))
	return
}

function filter {
	dir=( `ls $1` )
	count=${#dir[*]}
	while [ $count -gt 0 ]; do
		size=( `ls -l $1 | awk '{ print $5 }'` )
		if [ ${size[$count -1]} -gt $avg_size ]; then
			echo ${dir[$count - 1]}
		fi
		((count--))
	done
	return
}

function main {
	average $1
	filter $1
	exit
}
main $1

