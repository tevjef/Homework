#ifndef SYNTAX_PROJECT3_PARSER_H
#define SYNTAX_PROJECT3_PARSER_H

#include <iostream>
#include <string>
#include "p2lex.h"

using namespace std;

enum Type { T_STRING, T_SEARCHRESULT, T_NONE };

class PTree {
protected:
    int line;
    int count;
    PTree *left;
    PTree *right;

public:
    PTree(int line, PTree *left = 0, PTree *right = 0) {
        this->line = line;
        this->left = left;
        this->right = right;
    }

    int countNodes() {
        traverseAndCount(this);
        return count;
    }
    virtual void findEmptyStrings() {}
    virtual void findInvalidOps() {}

    PTree *traverseAndCount(PTree *root) {
        if (root->left)      {
            traverseAndCount(root->left);
        }
        if(root->right) {
            traverseAndCount(root->right);
        }
        count++;
    }

    PTree *traverseFindEmptyStrings(PTree *root) {
        if (root->left)      {
            traverseFindEmptyStrings(root->left);
        }
        if(root->right) {
            traverseFindEmptyStrings(root->right);
        }
        root->findEmptyStrings();
    }
    PTree *traverseInvalidOps(PTree *root) {
        if (root->left)      {
            traverseInvalidOps(root->left);
        }
        if(root->right) {
            traverseInvalidOps(root->right);
        }
        root->findInvalidOps();
    }

    virtual std::ostream &to_string(std::ostream &strm) const { return strm << "A root"; }
    virtual Type getType() { return T_NONE; }

};

class PTreeStmtList : public PTree {
public:
    PTreeStmtList(int line, PTree *s1, PTree *s2 = 0) : PTree(line, s1, s2) {}
    ostream &to_string(ostream &strm) const { return strm << "PTreeStmtList"; };
};

class PTreeStmt : public PTree {
public:
    PTreeStmt(int line, PTree *s1, PTree *s2 = 0) : PTree(line, s1, s2) {}
    ostream &to_string(ostream &strm) const { return strm << "PTreeStmt"; };

};

class PTreeExpr : public PTree {
public:
    Type type;
    PTreeExpr(int line, Type type, PTree *s1, PTree *s2 = 0) : PTree(line, s1, s2) {
        this->type = type;
    }
    virtual void findInvalidOps() {
        if (this->left && this->right) {
            if ((this->left->getType() == T_STRING && this->right->getType() == T_SEARCHRESULT)
                    || (this->left->getType() == T_SEARCHRESULT && this->right->getType() == T_STRING)) {
                return;
            }
            cerr << "Invalid union operator for given types at line " << line <<endl;
        }
    }

    virtual Type getType() { return type; }
};

class PTreeTerm : public PTree {
public:
    Type type;
    PTreeTerm(int line, Type type, PTree *s1, PTree *s2 = 0) : PTree(line, s1, s2) {
        this->type = type;
    }
    virtual void findInvalidOps() {
        if (this->left && this->right) {
            if ((this->left->getType() == T_STRING && this->right->getType() == T_SEARCHRESULT)
                || (this->left->getType() == T_SEARCHRESULT && this->right->getType() == T_STRING)) {
                return;
            }
            cerr << "Invalid intersect operator for given types at line " << line <<endl;
        }
    }
    ostream &to_string(ostream &strm) const { return strm << "PTreeTerm"; };
    virtual Type getType() { return type; }
};

class PTreePrimary : public PTree {
public:
    PTreePrimary(int line, PTree *s1, PTree *s2 = 0) : PTree(line, s1, s2) {}
    ostream &to_string(ostream &strm) const { return strm << "PTreePrimary"; };

};

class PTreeSearch_expr : public PTree {

public:
    string str1;
    string str2;

    PTreeSearch_expr(int line, string string1, string string2) : PTree(line) {
        this->str1 = string1;
        this->str2 = string2;
    }
    ostream &to_string(ostream &strm) const { return strm << "PTreeSearch_Expr"; };
    void findEmptyStrings() {
        if (str1 == "\"\"" || str2 == "\"\""){
            cerr << "Empty string at line " << line << endl;
        }
    }
    virtual Type getType() { return T_SEARCHRESULT; }
};

class PTreeID : public PTree {
public:
    string lexeme;
    PTreeID(int line, string lexeme) : PTree(line) {
        this->lexeme = lexeme;
    }
    ostream &to_string(ostream &strm) const { return strm << "PTreeId"; };

};

class PTreeString : public PTree {
public:
    string lexeme;
    PTreeString(int line, string lexeme) : PTree(line) {
        this->lexeme = lexeme;
    }
    ostream &to_string(ostream &strm) const { return strm << "PTreeString"; };
    void findEmptyStrings() {
        if (lexeme == "\"\""){
            cerr << "Empty string at line " << line << endl;
        }
    }
    virtual Type getType() { return T_STRING; }
};

inline ostream &operator<<(ostream &strm, const PTree &node) {
    return node.to_string(strm);
}

extern PTree *Program(istream *br);
extern PTree *StmtList(istream *br) ;
extern PTree *Stmt(istream *br) ;
extern PTree *Expr(istream *br) ;
extern PTree *Term(istream *br) ;
extern PTree *Primary(istream *br) ;
extern PTree *SearchExpr(istream *br) ;

#endif //SYNTAX_PROJECT3_PARSER_H
