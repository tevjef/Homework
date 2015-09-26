cmake_minimum_required(VERSION 3.3)
project(lex)

set(CMAKE_CXX_FLAGS "${CMAKE_CXX_FLAGS} -std=c++11")

set(SOURCE_FILES
        lex.cpp
    p2lex.h Tokenizer.cpp)

add_executable(lex ${SOURCE_FILES})