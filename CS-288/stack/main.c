#include <stdlib.h>
#include <stdio.h>
#include <string.h>

#define SIZE 20

main() {
    int *p, *q, *xp; int i, fill;
    char cmd[10];

    q=p=malloc(SIZE*sizeof(int));
    if(p==NULL){
        fprintf(stderr,"cannot allocate any more memory\n");
        exit(-1);
    }

    char str[] = "push";
    char *token;
    token = strtok(str, " ");


    char inst[2];
    char instbuf[10];

    int j = 0;
    while (token != NULL && j < 3) {
        j++;
        printf ("%s\n",token);

        if (strcmp("pop", token) && strcmp("POP", token) && inst == 0){
            //pop
            //break
        }

        if (j == 0 && strcmp("push", token) || strcmp("PUSH", token)) {
            continue;
        }

        token = strtok (NULL, " ");
    }
}