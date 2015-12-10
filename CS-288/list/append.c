#include <stdio.h>
#include <stdlib.h>
#include "list.h"

list *append(list *lp, list *newp){

    while(lp->ptr!=NULL)
    {
        lp=lp->ptr;
    }
    lp->ptr=newp;
}