#include <iostream>
#include <fstream>
#include <set>
#include <map>
#include <vector>
#include "p2lex.h"

using namespace std;

void usage(char *progname, string msg) {
    cerr << "Error: " << msg << endl;
    cerr << "Usage is: " << progname << " [filename]" << endl;
    cerr << " specifying filename reads from that file; no filename reads standard input" << endl;
}

int main(int argc, char *argv[]) {
    istream *br;
    ifstream infile;

    if (argc == 1)
        br = &cin;
    else if (argc == 2) {
        infile.open(argv[1]);
        if (infile.is_open())
            br = &infile;
        else {
            usage(argv[0], "Cannot open " + string(argv[1]));
            return 1;
        }
    }
    else {
        usage(argv[0], "More than one file name was given");
        return 1;
    }

    string lexeme = "";
    Token token;
    map<string, int> identifiers;
    map<Token, int> tokens;
    multimap<int, Token> tokensByCount;

    while (token = getToken(br, lexeme), token != DONE && token != ERR) {
        tokens[token]++;
        if (token == ID) identifiers[lexeme]++;
    }

    if (token == ERR) return 1;

    for (map<Token, int>::iterator it = tokens.begin(); it != tokens.end(); it++) {
        tokensByCount.insert(pair<int, Token>(it->second, it->first));
    }

    int lastValue = -1;
    int uniqueValues = 0;
    for (multimap<int, Token>::reverse_iterator it = tokensByCount.rbegin(); it != tokensByCount.rend(); it++) {
        if (lastValue != it->first && lastValue != -1)
            uniqueValues++;

        if (uniqueValues < 3) {
            if (it->second == ID)
                cout << "Identifier: " << it->first << endl;
            if (it->second == STRING)
                cout << "String constant: " << it->first << endl;
            if (it->second == UNION)
                cout << "Union operator: " << it->first << endl;
            if (it->second == INTERSECT)
                cout << "Intersect operator: " << it->first << endl;
            if (it->second == SET)
                cout << "SET keyword: " << it->first << endl;
            if (it->second == PRINT)
                cout << "PRINT keyword: " << it->first << endl;
            if (it->second == SEARCH)
                cout << "SEARCH keyword: " << it->first << endl;
            if (it->second == FOR)
                cout << "FOR keyword: " << it->first << endl;
            if (it->second == LPAREN)
                cout << "Left paren: " << it->first << endl;
            if (it->second == RPAREN)
                cout << "Right paren: " << it->first << endl;
            if (it->second == SC)
                cout << "Semicolon: " << it->first << endl;
        }
        lastValue = it->first;
    }
    if (identifiers.size() > 0)
        cout << "List of identifiers: ";

    for (map<string, int>::iterator it = identifiers.begin(); it != identifiers.end();) {
        cout << it->first;
        it++;
        if (it != identifiers.end())
            cout << ", ";
    }
    return 0;
}