#include "p2lex.h"
#include <vector>
#include <string.h>
int linenum = 1;
int currentPosition = 0;
string currentLine = "";

void printError(string error);

Token getToken(istream *br, string &lexeme) {
    string charbuf;
    bool inString = false;
    bool inID = false;
    bool inComment = false;
    while (br->good()) {
        char c;
        br->get(c);
        currentPosition++;
        charbuf += c;
        if (c != '\n') currentLine += c;
        if (c == '\n') {
            linenum++; //Increment line number
            inComment = false; //Set flag to indicate that we're no longer in a comment.
            if (inString) { //If we're in a string and hit a new line, exit.
                printError(
                        "Missing semicolon on " + to_string(linenum) + ":" + to_string(currentPosition) + "\n" + "\t" +
                        currentLine);
                return ERR;
            }
            currentLine = ""; //For logging, reset the current line
            currentPosition = 0;  //For logging, reset the current position in line
        }
        if (inComment) {
            charbuf = "";
            continue;
        }
        if (inString && isalpha(c)) {
            continue;
        }
        if (c == '/') {
            if (br->good() && br->peek() == '/') {
                inComment = true;
                continue;
            }
        }

        if (isspace(c)) { // Space chars delimit identifiers, if we're in an ID return the ID. inString?
            if (inID) {   // continue to the next letter since strings can have space
                lexeme = charbuf;
                return ID;
            }
            if (inString) {
                continue;
            }
            charbuf = "";
            continue;
        }

        if (c == '"' && !inString) {
            inString = true;
            continue;
        }
        if (c == '"' && inString) {
            lexeme = charbuf;
            return STRING;
        }

        lexeme = c;
        if (c == '(') return LPAREN;
        if (c == ')') return RPAREN;
        if (c == ';') return SC;
        if (c == '+') return UNION;
        if (c == '^') return INTERSECT;

        if (isalpha(c) || ispunct(c)) { // At this point, it's safe to say that the current char in the line is either a keyword or an
            inID = true;  // identifier
            lexeme = charbuf;
            if (charbuf == "for") return FOR;
            if (charbuf == "search")return SEARCH;
            if (charbuf == "print") return PRINT;
            if (charbuf == "set") return SET;
            if (br->good() && !isalpha((char) br->peek())) return ID;
            continue;
        }
        printError(
                "Invalid identifier found on " + to_string(linenum) + ":" + to_string(currentPosition) + "\n" + "\t" +
                currentLine);
        return ERR;
    }
    if (br->eof()) {
        return DONE;
    }
}

void printError(string error) {
    cerr << error << endl << "\t";
    for (int i = 0; i < currentPosition - 1; i++) cerr << " ";
    cerr << "^" << endl;
}