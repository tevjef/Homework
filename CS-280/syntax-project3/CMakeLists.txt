cmake_minimum_required(VERSION 3.3)
project(syntax_project3)

set(CMAKE_CXX_FLAGS "${CMAKE_CXX_FLAGS} -std=c++11")

set(SOURCE_FILES main.cpp parser.cpp parser.h p2lex.h p3lex.cpp)
add_executable(syntax_project3 ${SOURCE_FILES})