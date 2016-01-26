//
// Created by Tevin on 12/9/2015.
//

#ifndef PROJECT4_EXEC_P3EVAL_H
#define PROJECT4_EXEC_P3EVAL_H

#include "searchResult.h"
#include "p3parser.h"
#include "p4value.h"

//A map to hold values
extern map<string,Value*> symbolTable;
//A binary operation for intesecting a searchresult and a string
extern SearchTool::SearchResult *binaryIntersect(SearchTool::SearchResult *searchResult, string pattern);
//A binary operation for union a searchresult and a string
extern SearchTool::SearchResult *binaryUnion(SearchTool::SearchResult *searchResult, string pattern);
//A predicate for merging two lists of SearchResultEntry
extern bool listMergePredicate(SearchTool::SearchResultEntry *searchResultEntry1,
                               SearchTool::SearchResultEntry *searchResultEntry2);
//A predicate for determining the uniqueness of a SecarchResultEntry in a collection
extern bool predicateUniqueFilter(SearchTool::SearchResultEntry *searchResultEntry1,
                                  SearchTool::SearchResultEntry *searchResultEntry2);


#endif //PROJECT4_EXEC_P3EVAL_H
