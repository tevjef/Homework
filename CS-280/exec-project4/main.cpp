
#include "p2lex.h"
#include "p3parser.h"
#include <fstream>
#include <map>

void usage (char *progname, string msg) {
    cerr << "Error: " << msg << endl;
    cerr << "Usage is: " << progname << " [filename]" << endl;
    cerr << " specifying filename reads from that file; no filename reads standard input" << endl;
}

int main (int argc, char *argv[]) {
    istream *br;
    ifstream infile;

    if (argc == 1) {
        br = &cin;
    } else if (argc == 2) {
        infile.open(argv[1]);
        if (infile.is_open()) {
            br = &infile;
        } else {
            usage(argv[0], "Cannot open " + string(argv[1]));
            return 1;
        }
    } else {
        usage(argv[0], "More than one file name was given");
        return 1;
    }

    PTree *program;
    program = Program(br);

    if (!program || errcnt) {
    	return 0;
    }

    program->findEmptyStrings();
    program->findInvalidOps();
    program->eval();

    return 0;
}
