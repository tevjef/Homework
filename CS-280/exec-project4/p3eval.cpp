//
//  p3eval
//
#include "p3eval.h"

map<string, Value *> symbolTable;

Value *PTreeStmtList::eval() {
    if (this->left)  { this->left->eval();  }
    if (this->right) { this->right->eval(); }
    return 0;
}

Value *PTreeSet::eval() {
    if ((symbolTable[this->id] = this->left->eval()))
	return symbolTable[this->id];
}

Value *PTreePrint::eval() {
	Value *stmt;
	if (!(stmt = this->left->eval())) {
        return 0;
    } else {
        stmt->toString();
        return stmt;
    }
}

Value *PTreeUnion::eval() {
	Value *leftLeaf = this->left->eval();
	Value *rightLeaf = this->right->eval();
	
	if (!leftLeaf || !rightLeaf || leftLeaf->getType() == rightLeaf->getType()) {
		cerr << "Type error performing UNION operator at line " << linenum << endl;
		return 0;
	}
	if (leftLeaf->getType() == PTree::T_SEARCHRESULT) {
		return new ValueSearchResult(binaryUnion(leftLeaf->getSearchValue(), rightLeaf->getStringValue()));
	} else {
        return new ValueSearchResult(binaryUnion(rightLeaf->getSearchValue(), leftLeaf->getStringValue()));
    }
}

Value *PTreeIntersect::eval() {
	Value *leftLeaf = this->left->eval();
	Value *rightLeaf = this->right->eval();
	
	if (!leftLeaf || !rightLeaf || leftLeaf->getType() == rightLeaf->getType()) {
		cerr << "Type error performing INTERSECTION operator at line " << linenum << endl;
		return 0;
	}
	if (leftLeaf->getType() == PTree::T_SEARCHRESULT) {
		return new ValueSearchResult(binaryIntersect(leftLeaf->getSearchValue(), rightLeaf->getStringValue()));
	} else {
        return new ValueSearchResult(binaryIntersect(rightLeaf->getSearchValue(), leftLeaf->getStringValue()));
    }
}

SearchTool::SearchResult *binaryIntersect(SearchTool::SearchResult *searchResult, string pattern) {
	list<SearchTool::SearchResultEntry *>& searchResultEntries = searchResult->getResults();
	SearchTool::SearchResult *searchResult2 = new SearchTool::SearchResult(searchResult->getFile());
   	for (list<SearchTool::SearchResultEntry *>::iterator it = searchResultEntries.begin(); it != searchResultEntries.end(); it++) {
   		if ((*it)->getLine().find(pattern) != string::npos) {
   			searchResult2->getResults().push_back((*it));
   		}
   	}
	
	return searchResult2;
}

SearchTool::SearchResult *binaryUnion(SearchTool::SearchResult *searchResult, string pattern) {
	SearchTool::SearchResult *searchResult2 = new SearchTool::SearchResult(searchResult->getFile());
	searchResult2->dosearch(pattern);
    searchResult->getResults().merge(searchResult2->getResults(), listMergePredicate);
    searchResult->getResults().unique(predicateUniqueFilter);
	return searchResult;
}

Value *PTreeID::eval() {
	if (!symbolTable[this->id]) {
		cerr << "Variable " << this->id << " not set before use at line " << linenum << endl;
	}
    return symbolTable[this->id];
}

Value *PTreeSTR::eval() {
    if (this->val.size() != 0) return new ValueString(this->val);
    return 0;
}

Value *PTreeSearch::eval() {
	SearchTool::SearchResult *searchResult = new SearchTool::SearchResult(this->filename);
	searchResult->dosearch(this->pattern);
    return new ValueSearchResult(searchResult);
}

bool predicateUniqueFilter(SearchTool::SearchResultEntry *searchResultEntry1,
                           SearchTool::SearchResultEntry *searchResultEntry2) {
    return searchResultEntry1->getLine() == searchResultEntry2->getLine();
}

bool listMergePredicate(SearchTool::SearchResultEntry *searchResultEntry1,
                        SearchTool::SearchResultEntry *searchResultEntry2) {
    return searchResultEntry1->getLinenum() < searchResultEntry2->getLinenum();
}