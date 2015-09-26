#ifndef FILTER_TOKEN_H
#define FILTER_TOKEN_H

#include <iostream>
#include <fstream>
#include <string>
#include <string.h>
#include <algorithm>

class Token {
private:
    std::string optional;
    std::string parameter;
public:
    bool has_optional() { return !optional.empty(); }
    std::string get_optional() const { return optional; };
    std::string get_parameter() const { return parameter; };
    Token(std::string _optional, std::string _parameter) {
        optional = _optional;
        parameter = _parameter;
    };
    Token() { };
    virtual std::ostream &to_string(std::ostream &strm) const { return strm << "Token(" << optional << " " << parameter << ")"; }};

std::ostream &operator<<(std::ostream &strm, const Token &token) {
    return token.to_string(strm);
}

#endif //FILTER_TOKEN_H
