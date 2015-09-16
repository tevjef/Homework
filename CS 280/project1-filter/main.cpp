/*
 * readfile - open and read a file
 */

#include <iostream>
#include <fstream>
#include <string>
#include <string.h>
#include <queue>
#include <set>

#include <algorithm>

using namespace std;

// it's good practice to have a usage function and tell the user how to run the program
// ... especially if they did something wrong!
void usage(char *progname, string msg, string detailedMsg) {
	cerr << "Error: " << msg << endl;
	cerr << "Usage is: " << progname << " [filename] [args...]" << endl;
	cerr << detailedMsg << endl;
}

const string O_UPPER = "upper";
const string O_LOWER = "lower";
const string NO_OPTIONAL = "no_optional";

const string LETTER = "letter";
const string VOWEL = "vowel";
const string CONSONANT = "consonant";
const string WORD = "word";
const string NUMBER = "number";
const string SPACE = "space";
const string PUNCT = "punct";
const string POSSIBLE_PARAMETERS[] = {LETTER,VOWEL,CONSONANT,WORD,NUMBER,SPACE,PUNCT};

class Token{
private:
    string optional;
    string parameter;
public:
    bool has_optional() {
        return !optional.empty();
    };
    string get_optional()const {
        return optional;
    };
    string get_parameter()const {
        return parameter;
    };

    Token(string _optional, string _parameter) {
        optional = _optional;
        parameter = _parameter;
    };
    Token(){};

    virtual ostream & to_string(std::ostream &strm)const {
        return strm << "Token(" << optional << " " <<  parameter <<")";
    }
};

std::ostream& operator<<(std::ostream &strm, const Token &token) {
    return token.to_string(strm);
}

vector<Token> tokenList;

bool is_upper(char ascii) ;
bool is_lower(char ascii) ;
vector<int> index_of_lower(string line) ;
vector<int> index_of_upper(string line) ;
bool is_letter(char ascii) ;
bool is_vowel(char ascii) ;
bool is_consonant(char ascii) ;
bool is_number(char ascii) ;
bool is_punctuation(char ascii) ;
bool is_space(char ascii) ;
void remove_lower(string line, set<int>& toRemove);
void remove_upper(string line, set<int>& toRemove);

bool is_word(char ascii) ;

void consumeLine(string line, vector<Token> tokens) {
    set<int> toRemove;
    for(unsigned int t = 0; t < tokens.size();t++) {
        Token token = tokens.at(t);
        string parameter = token.get_parameter();
        for(int i = 0; i < line.size(); i++) {
            char current_char = line[i];
            if ((parameter == LETTER && is_letter(current_char))
                || (parameter == VOWEL && is_vowel(current_char))
                || (parameter == CONSONANT  && is_consonant(current_char))
                || (parameter == NUMBER && is_number(current_char))
                || (parameter == PUNCT && is_punctuation(current_char))
                || (parameter == SPACE && is_space(current_char))
                || (parameter == WORD && is_word(current_char))) {
                toRemove.insert(i);
            }
        }
        if (token.has_optional()) {
            if (token.get_optional() == O_LOWER) {
                remove_lower(line, toRemove);
            }
            else if (token.get_optional() == O_UPPER) {
                remove_upper(line, toRemove);
            }
        }
    }
    cout << "After: ";
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
    cout << endl;
}

void remove_upper(string line, set<int>& toRemove) {
    for(set<int>::iterator it = toRemove.begin(); it != toRemove.end(); ) {
        if (!is_upper(line[*it]) && is_letter(line[*it])) {
            toRemove.erase(*it++);
        } else {
            ++it;
        }
    }
}

void remove_lower(string line, set<int>& toRemove) {
    for(set<int>::iterator it = toRemove.begin(); it != toRemove.end(); ) {
        if (!is_lower(line[*it]) && is_letter(line[*it])) {
            toRemove.erase(*it++);
        } else {
            ++it;
        }
    }
}


bool is_vowel(char ascii) {
	ascii = (char) tolower(ascii);
	char vowels[] = {'a','e','i','o','u'};
	for (unsigned int i = 0; i < sizeof(vowels); i++) {
		if(ascii == vowels[i]) {
			return true;
		}
	}
	return false;
}

bool is_optional(string arg) {
	return arg == O_UPPER || arg == O_LOWER;
}

bool is_parameter(string arg) {
	for(unsigned int i = 0; i < (sizeof(POSSIBLE_PARAMETERS)/ sizeof(*POSSIBLE_PARAMETERS)); i++) {
		if(arg == POSSIBLE_PARAMETERS[i]) {
			return true;
		}
	}
	return false;
}

bool is_letter(char ascii) {
	ascii = (char) tolower(ascii);
	return ascii >= 'a' && ascii <= 'z';
}

bool is_upper(char ascii) {
	return ascii >= 'A' && ascii <= 'Z';
}

bool is_lower(char ascii) {
	return ascii >= 'a' && ascii <= 'z';
}

bool is_consonant(char ascii) {
	ascii = (char) tolower(ascii);
	return !is_vowel(ascii) && is_letter(ascii);
}

bool is_punctuation(char ascii) {
	ascii = (char) tolower(ascii);
	return (ascii >= '!' && ascii <= '/')
		   || (ascii >= ':' && ascii <= '@')
		   || (ascii >= '[' && ascii <= '`')
		   || (ascii >= '{' && ascii <= '~');
}

bool is_number(char ascii) {
	ascii = (char) tolower(ascii);
	return (ascii >= '0' && ascii <= '9');
}

bool is_word(char ascii) {
    ascii = (char) tolower(ascii);
    return is_letter(ascii) || is_number(ascii);
}

bool is_space(char ascii) {
	ascii = (char) tolower(ascii);
	return ascii == ' ';
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


int main( int argc, char *argv[] ) {
	istream *br;
	ifstream infile;
	queue<string> argsQueue;

	if(argc > 1) {
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
                usage(argv[0], "Illegal agrument found: "  + current_arg, "");
                return 1;
            }
		}
        printQueue(argsQueue);
		while (argsQueue.size() > 0) {
			string optional;
			string parameter;

			string arg = argsQueue.front();
			argsQueue.pop();

			if (is_optional(arg)) {
				optional = arg;
				arg = argsQueue.front();
				argsQueue.pop();
				if (is_optional(arg)) {
					usage(argv[0], "Consecutive optional parameters.", "");
                    return 1;
				}
			}
			if (is_parameter(arg)) {
				parameter = arg;
			}

            if (!is_parameter(arg) && !is_optional(arg)) {
                usage(argv[0], "Illegal agrument found: "  + arg, "");
                return 1;
            }

			if (!parameter.empty()) {
				tokenList.push_back(Token(optional, parameter));
			}
		}
        printTokenList(tokenList);
		if (br->good()) {
			for (string line; getline(*br, line);) {
                cout << "Before: " + line << endl;
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
