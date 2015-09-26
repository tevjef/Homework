cmake_minimum_required(VERSION 3.3)
project(filter)

set(CMAKE_CXX_FLAGS "${CMAKE_CXX_FLAGS} -std=c++11")
set(CMAKE_RUNTIME_OUTPUT_DIRECTORY "${CMAKE_CURRENT_SOURCE_DIR}/bin")

set(SOURCE_FILES
    main.cpp token.h)

add_executable(filter ${SOURCE_FILES})