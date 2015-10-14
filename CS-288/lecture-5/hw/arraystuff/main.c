#include <stdio.h>
main() {
    int array[4][3] = {{2, 3, 4, 5}, {11, 13, 17 , 19}, {23, 29, 31, 37}};
    for (int i = 0; i < 3; i++)
        printf("%d %d %d %d\n", array[i][0], array[i][1], array[i][2], array[i][3]);
}