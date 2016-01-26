#include <iostream>
#include "parser.h"

int linenum = 1;
bool debug = false;

// Program ::= StmtList
PTree *Program(istream *br) {
    if (debug) cout << "Program()" << endl;
    return StmtList(br);
}

// StmtList ::= Stmt | Stmt StmtList
PTree *StmtList(istream *br) {
    if (debug) cout << "StmtList()" << endl;
    PTree *stmt;
    stmt = Stmt(br);
    if( stmt )
        return new PTreeStmtList(linenum, stmt, StmtList(br) );
    return 0;
}

//Stmt ::= PRINT Expr SC | SET ID Expr SC
PTree *Stmt(istream *br) {
    if (debug) cout << "Stmt()" << endl;

    string lexeme;
    Token token;

    PTree *expr;
    if ((token = getToken(br, lexeme)) == PRINT) {
        if (debug) cout << "-->PRINT" << endl;
        expr = Expr(br);

        if (expr) {
            if ((token = getToken(br, lexeme)) != SC) {
                cerr << linenum << ": " << "Expected a semicolon" << endl;
                exit(255);
            }
            if (token == SC) {
                if (debug) cout << "-->SC" << endl;
            }
            return new PTreeStmt(linenum, expr);
        } else {
            cerr << linenum << ": " << "Expected an expression" << endl;
            exit(255);
        }
    } else {
        pushbackToken(token, lexeme);
    }
    if ((token = getToken(br, lexeme)) == SET) {
        if (debug) cout << "-->SET" << endl;
        if ((token = getToken(br, lexeme)) == ID) {
            if (debug) cout << "-->ID::" << lexeme << endl;
            expr = Expr(br);
            if (expr) {
                if ((token = getToken(br, lexeme)) != SC) {
                    cerr << linenum << ": " << "Expected a semicolon" << endl;
                    exit(255);
                }
                if (token == SC) {
                    if (debug) cout << "-->SC" << endl;
                }
                return new PTreeStmt(linenum, expr);
            } else {
                cerr << linenum << ": " << "Expected an expression" << endl;
                exit(255);
            }
        } else {
            pushbackToken(token, lexeme);
        }
    } else {
        pushbackToken(token, lexeme);
    }
    return 0;
}

//Expr ::= Term UNION Expr | Term
PTree *Expr(istream *br) {
    if (debug) cout << "Expr()" << endl;

    PTree *term;
    term = Term(br);
    if (term) {
        string lexeme;
        Token token;
        if ((token = getToken(br, lexeme)) == UNION) {
            if (debug) cout << "-->UNION" << endl;

            PTree *expression;
            expression = Expr(br);
            if (expression) {
                return new PTreeExpr(linenum, T_SEARCHRESULT, term, expression);
            } else {
                cerr << linenum << ": " << "Expected an expression" << endl;
                exit(255);
            }
        } else {
            pushbackToken(token, lexeme);
        }
        return term;
    }

    return 0;
}

//Term ::= Primary INTERSECT Term | Primary
PTree *Term(istream *br) {
    if (debug) cout << "Term()" << endl;

    PTree *primary;
    primary = Primary(br);
    if (primary) {
        string lexeme;
        Token token;
        if ((token = getToken(br, lexeme)) == INTERSECT) {
            if (debug) cout << "-->INTERSECT" << endl;

            PTree *term;
            term =  Term(br);
            if (term) {
                return new PTreeTerm(linenum, T_SEARCHRESULT, primary, term);
            } else {
                cerr << linenum << ": " << "Expected term" << endl;
                exit(255);
            }
        } else {
            pushbackToken(token, lexeme);
        }
        return primary;
    }
    return 0;
}

//Primary ::= Search_expr | ID | STRING | LPAREN Expr RPAREN
PTree *Primary(istream *br) {
    if (debug) cout << "Primary()" << endl;

    string lexeme;
    Token token;
    if ((token = getToken(br, lexeme)) == ID) {
        if (debug) cout << "-->ID::" << lexeme << endl;
        return new PTreeID(linenum, lexeme);
    } else {
        pushbackToken(token, lexeme);
    }
    if ((token = getToken(br, lexeme)) == STRING) {
        if (debug) cout << "-->STRING::" << lexeme << endl;
        return new PTreeString(linenum, lexeme);
    } else {
        pushbackToken(token, lexeme);
    }

    if ((token = getToken(br, lexeme)) == LPAREN) {
        if (debug) cout << "-->LPAREN" << endl;
        PTree *expr;
        expr = Expr(br);

        string lexeme2;
        Token token1 = getToken(br, lexeme2);

        if (token != RPAREN) {
            if (debug) cout << "-->RPAREN" << endl;
            if (debug) cout << linenum << ": " << "Expected a )";
            return 0;
        }

        if (expr) {
            return new PTreeExpr(linenum, T_NONE, expr);
        }
        return new PTreeString(linenum, lexeme);
    } else {
        pushbackToken(token, lexeme);
    }

    PTree *search_expr;
    search_expr = SearchExpr(br);
    if (search_expr) {
        return search_expr;
    }

    cerr << linenum << ": " << "Missing primary" << endl;
    return 0;
}

//Search_expr ::= SEARCH STRING FOR STRING
PTree *SearchExpr(istream *br) {
    if (debug) cout << "SearchExpr()" << endl;

    string string1;
    string string2;
    Token token;
    string lexeme;
    if ((token = getToken(br, lexeme)) == SEARCH) {
        if (debug) cout << "-->SEARCH";
        if ((token = getToken(br, lexeme)) == STRING) {
            if (debug) cout << "-->STRING::" << lexeme << " ";
            string1 = lexeme;
        } else {
            cerr << linenum << ": " << "Missing STRING after SEARCH" << endl;
            exit(255);
        }

        if ((token = getToken(br, lexeme)) == FOR) {
            if (debug) cout << "-->FOR";
            if ((token = getToken(br, lexeme)) == STRING) {
                if (debug) cout << "-->STRING::" << lexeme << endl;

                string2 = lexeme;
                return new PTreeSearch_expr(linenum, string1, string2);
            } else {
                cerr << linenum << ": " << "Missing STRING after FOR on line: " << endl;
                exit(255);
            }
        } else {
            cerr << linenum << ": " << "expecting FOR" << endl;
        }
    } else {
        pushbackToken(token, lexeme);
    }
    return 0;
}