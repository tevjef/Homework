cmake_minimum_required(VERSION 3.3)
project(project4_exec)

set(CMAKE_CXX_FLAGS "${CMAKE_CXX_FLAGS} -std=c++11")

set(SOURCE_FILES main.cpp p2lex.h p4value.h searchResult.h searchResult.cpp p3lex.cpp p3parser.cpp p3parser.h p3eval.cpp p3eval.cpp p3eval.h)
add_executable(project4_exec ${SOURCE_FILES})