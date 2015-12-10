#include <stdio.h>
#include <getopt.h>
#include <stdlib.h>
#include <string.h>
#include <stdio.h>

int main(int argc, char **argv) {
    int userid, cpu, ram, disk;
    int option = 0;
    int ok = -1;
    char * line = NULL;
    size_t len = 0;
    while ((option = getopt(argc, argv, "u:a")) != -1) {
        switch(option) {
            case 'u':

                break;
            case 'a':
                ok = 1;
                break;
            default: /* '?' */
                fprintf(stderr, "Usage: %s [-u id] [ -i ]", argv[0]);
                exit(255);
        }
    }

    FILE *fp = fopen("Usage", "r");

    while ((getline(&line, &len, fp)) != -1) {
        while(scanf("%s", line)!=EOF) {
            if (!(strcmp(line, "ADD"))) {
                int id, cpu, ram, disk;
                scanf("%d;%d;%d;%d", &id, &cpu, &ram, &disk);
                printf("%d %d %d %d", id, cpu, ram, disk);
            }
        }
    }
}
