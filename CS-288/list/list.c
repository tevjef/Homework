#include <stdio.h>
#include <stdlib.h>
#include "list.h"

int main() {
    list head, *nextp, *lp, *lastp;

    head.ptr=NULL;
    lastp=&head;
    nextp=malloc(sizeof(list));
    nextp->ptr=NULL;
    while((scanf("%s",nextp->word))>0)
    {
        append(&head,nextp);
te        nextp=malloc(sizeof(list));
        nextp->ptr=NULL;
    }

    lp=&head;
    while(lp->ptr!=NULL){
        lp=lp->ptr;
        printf("word %s\n",lp->word);
    }
}