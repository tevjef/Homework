#! /bin/bash
list=( $* )
function insertSort {
	i=1
	while [ $i -lt $# ]; do
		value=${list[$i]}
		j=$((i-1))
		while [[ $j -ge 0 || ]] && [[ ${list[$j]} -gt $value ]]; do
			list[$j+1]=${list[$j]}
			((j--)) 
		done
		list[$j+1]=$value
		((i++))
	done
}
insertSort $*
echo ${list[*]}