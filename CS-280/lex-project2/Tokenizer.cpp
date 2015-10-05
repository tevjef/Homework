#include "p2lex.h"
#include <vector>

Token getToken(istream *br, string& lexeme) {
    char c;
    string charbuf;
    while (br-> good() && br->get(c)) {
        charbuf+=c;
        if (c == '{')  {
            lexeme = c;
            return LPAREN;
        }
        if (c == '}')  {
            lexeme = c;
            return RPAREN;
        }
        if (c == ';')  {
            lexeme = c;
            return SC;
        }
        if (c == '+')  {
            lexeme = c;
            return UNION;
        }
        if (c == '^')  {
            lexeme = c;
            return INTERSECT;
        }
        if (c == '\n')  {
            linenum++;
        }
        if (isspace(c)) {

        }
    }
}
