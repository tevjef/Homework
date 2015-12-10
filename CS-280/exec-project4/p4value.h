//
//  p4value.h
//  parser
//

#ifndef p4value_h
#define p4value_h

// class definition for values in the interpreter

#include <string>
#include "p3parser.h"		// parser definitions
#include "searchResult.h"	// search pieces
using namespace std;

class Value {
public:
    virtual string getStringValue() { return ""; }
    virtual SearchTool::SearchResult *getSearchValue() { return 0; }
    virtual PTree::Type getType() = 0;
    virtual void toString() = 0;
};

class ValueString : public Value {
    string val;
    
public:
    ValueString (string& v) : val(v) {}
    
    string getStringValue() { return val; }
    PTree::Type getType()   { return PTree::T_STRING; }
    
    void toString() {
    	cout << getStringValue() << endl;
    }
};

class ValueSearchResult : public Value {
    SearchTool::SearchResult *val;
    
public:
    ValueSearchResult (SearchTool::SearchResult *v) : val(v) {}
    SearchTool::SearchResult *getSearchValue() { return val; }
    PTree::Type getType() { return PTree::T_SEARCHRESULT; }
    
    void toString() {
    	list<SearchTool::SearchResultEntry *>& sre = this->getSearchValue()->getResults();
    	for (list<SearchTool::SearchResultEntry *>::iterator it = sre.begin(); it != sre.end(); it++) {
    		cout << getSearchValue()->getFile() << ":" << (*it)->getLinenum() << ":" << (*it)->getLine() << endl;
    	}   
    }
};

#endif /* p4value_h */