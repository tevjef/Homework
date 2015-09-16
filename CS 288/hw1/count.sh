#! /bin/bash
alpha=( a b c d e f g h i j k l m n o p q r s t u v w x y z )
for i in ${alpha[*]};
do
	echo -n ${i}' ' && ls -1 /bin | grep -c ^${i}
done
