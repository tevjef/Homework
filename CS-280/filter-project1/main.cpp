#include <iostream>
#include <fstream>
#include <queue>
#include <set>
#include <algorithm>
#include <list>
#include "token.h"

using namespace std;

void usage(char *progname, string msg, string detailedMsg) {
    cerr << "Error: " << msg << endl;
    cerr << "Usage is: " << progname << " [filename] [args...]" << endl;
    cerr << detailedMsg << endl;
}
const bool debug = false;

const string UPPER = "upper";
const string LOWER = "lower";
const string LETTER = "letter";
const string VOWEL = "vowel";
const string CONSONANT = "consonant";
const string WORD = "word";
const string NUMBER = "number";
const string SPACE = "space";
const string PUNCT = "punct";
const string POSSIBLE_PARAMETERS[] = {LETTER, VOWEL, CONSONANT, WORD, NUMBER, SPACE, PUNCT};

vector<Token> tokenList;

bool is_vowel(char ascii) {
    ascii = (char) tolower(ascii);
    char vowels[] = {'a', 'e', 'i', 'o', 'u'};
    for (unsigned int i = 0; i < sizeof(vowels); i++) {
        if (ascii == vowels[i]) { return true; }
    }
    return false;
}

bool is_optional(string arg) {
    return arg == UPPER || arg == LOWER;
}

bool is_parameter(string arg) {
    for (unsigned int i = 0; i < (sizeof(POSSIBLE_PARAMETERS) / sizeof(*POSSIBLE_PARAMETERS)); i++) {
        if (arg == POSSIBLE_PARAMETERS[i]) {
            return true;
        }
    }
    return false;
}

bool is_consonant(char ascii) { return !is_vowel(ascii) && isalpha(ascii); }

bool is_word(char ascii) {
    ascii = (char) tolower(ascii);
    return isalpha(ascii) || isdigit(ascii);
}

bool is_word_lower(string line, set<int>& word) {
    bool flag = false;
    bool has_alpha = false;
    for(set<int>::iterator it = word.begin(); it != word.end(); ++it) {
        char c = line[*it];
        if (isalpha(c)) {
            has_alpha = true;
        }
        if (islower(c) || (isdigit(c) && has_alpha)) {
            flag = true;
        }
        if(isupper(c)) {
            return false;
        }
    }
    return flag;
}

bool is_word_upper(string line, set<int>& word) {
    bool flag = false;
    bool has_alpha = false;
    for(set<int>::iterator it = word.begin(); it != word.end(); ++it) {
        char c = line[*it];
        if (isalpha(c)) {
            has_alpha = true;
        }
        if (isupper(c) || (isdigit(c) && has_alpha)) {
            flag = true;
        }
        if (islower(c)) {
            return false;
        }
    }
    return flag;
}

void consumeLine(string line, vector<Token> tokens) {
    set<int> toRemove;
    for(unsigned int t = 0; t < tokens.size();t++) {
        Token token = tokens.at(t);
        string parameter = token.get_parameter();

        if (parameter == WORD) {
            set<int> current_word;
            for (int i = 0; i < line.size(); i++) {
                char current_char = line[i];
                if (is_word(current_char)) {
                    current_word.insert(i);
                }
                if (!is_word(current_char) || i == (line.size() -1)) {
                    //Check if the list is uniformly upper or lowercase
                    bool word_matches_params = true;
                    if (token.has_optional()) {
                        if (token.get_optional() == LOWER) {
                            word_matches_params = is_word_lower(line, current_word);
                        }
                        else if (token.get_optional() == UPPER) {
                            word_matches_params = is_word_upper(line, current_word);
                        }
                    }
                    if (word_matches_params) {
                        toRemove.insert(current_word.begin(), current_word.end());
                    }
                    current_word.clear();
                }
            }
        }

        if (parameter != WORD) {
            for (int i = 0; i < line.size(); i++) {
                char current_char = line[i];
                if ((parameter == LETTER && isalpha(current_char))
                    || (parameter == VOWEL && is_vowel(current_char))
                    || (parameter == CONSONANT && is_consonant(current_char))
                    || (parameter == NUMBER && isdigit(current_char))
                    || (parameter == PUNCT && ispunct(current_char))
                    || (parameter == SPACE && isspace(current_char))) {
                    if (token.has_optional()) {
                        if (token.get_optional() == LOWER && islower(line[i])) {
                            toRemove.insert(i);
                        }
                        else if (token.get_optional() == UPPER && isupper(line[i])) {
                            toRemove.insert(i);
                        }
                    } else {
                        toRemove.insert(i);
                    }
                }
            }


        }
    }
    if(debug) {
        cout << "After: ";
    }
    for (unsigned int i = 0; i < line.size(); i++) {
        bool contains = true;
        for(set<int>::iterator it = toRemove.begin(); it != toRemove.end();++it) {
            if (i == *it) {
                contains = false;
            }
        }
        if(contains) {
            cout << line[i];
        }
    }
}

void printQueue(queue<string> aqueue) {
    long long int size = aqueue.size();
    for (int i = 0; i < size; i++) {
        cout << i << ": " << aqueue.front() << endl;
        aqueue.pop();
    }
}

void printTokenList(vector<Token> list) {
    unsigned long long int size = list.size();
    for (unsigned long long int i = 0; i < size; i++) {
        cout << i << ": " << list.at(i) << endl;
    }
}

int main(int argc, char *argv[]) {
    istream *br;
    ifstream infile;
    queue<string> argsQueue;

    if (argc > 1) {
        infile.open(argv[1]);
        if (infile.is_open())
            br = &infile;
        else {
            usage(argv[0], "Cannot open " + string(argv[1]), "Specifying filename reads from that file");
            return 1;
        }

        for (unsigned int i = 2; i < argc; i++) {
            string current_arg = argv[i];
            std::transform(current_arg.begin(), current_arg.end(), current_arg.begin(), ::tolower);

            if (is_optional(current_arg) || is_parameter(current_arg)) {
                argsQueue.push(current_arg);
            } else {
                usage(argv[0], "Illegal agrument found: " + current_arg, "");
                return 1;
            }
        }
        if (debug) {
            printQueue(argsQueue);
        }
        while (argsQueue.size() > 0) {
            string optional;
            string parameter;

            string arg = argsQueue.front();
            argsQueue.pop();

            if (is_optional(arg)) {
                optional = arg;

                if (argsQueue.size() > 0) {
                    string front =argsQueue.front();
                    if (is_optional(front)) {
                        //Errors when there are consecquetive optional arguments e.g filt input lower lower
                        usage(argv[0], "Consecutive optional parameters.", "");
                        return 1;
                    } else if (!(front == LETTER || front == VOWEL || front == WORD || front == CONSONANT)) {
                        //Errors when there is an unrecognized argument after lower | upper e.g filt input lower asdf
                        usage(argv[0], "Illegal agrument found after " + arg, front);
                        return 1;
                    }
                }
            }

            if (argsQueue.size() > 0 && !optional.empty()) {
                arg = argsQueue.front();
                argsQueue.pop();
            }

            if (is_parameter(arg)) {
                parameter = arg;
            }

            if (!is_parameter(arg) && !is_optional(arg)) {
                //Errors when there is an unrecognized argument e.g filt input asdf
                usage(argv[0], "Illegal agrument found: " + arg, "");
                return 1;
            }

            if (!parameter.empty()) {
                tokenList.push_back(Token(optional, parameter));
            } else {
                //Errors when there iis not enough argument to form a valid filter e.g filt input lower, filt input lower letter upper
                usage(argv[0], "Not enough arguments", "");
                return 1;
            }
        }
        //Errors when only the a valid file name is entered. e.g filt input
        if (tokenList.size() == 0) {
            usage(argv[0], "Not enough arguments", "");
            return 1;
        }
        if (debug) {
            printTokenList(tokenList);
        }
        if (br->good()) {
            for (string line; getline(*br, line);) {
                if(debug) {
                    cout << "Before: " + line << endl;
                }
                if(!br->eof()) {
                    line.push_back((char) 10);
                }
                consumeLine(line, tokenList);
            }
        }
        else
            cout << "!!! I COULD NOT READ !!!\n";

    } else {
        usage(argv[0], "No enough arguments", "");
        return 1;
    }
    return 0;
}
