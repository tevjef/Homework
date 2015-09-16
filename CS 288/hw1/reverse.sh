#! /bin/bash
function main {
	array=( `ls $1` ) 
	count=${#array[*]}
	while [ $count -gt 0 ];
	do
		echo -n ${array[$count - 1]}' '
		((count--))

	done
	echo
exit	
}
main $1
