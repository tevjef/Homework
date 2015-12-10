typedef struct list list;

struct list
{
	list *ptr;
	char word[26];
};

list *insert(list *lp, list *newp);
list *append(list *lp, list *newp);
list *delete(list *lp, list *newp);
