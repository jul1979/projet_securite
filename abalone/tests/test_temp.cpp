#include "catch.hpp"
#include"model.h"


TEST_CASE("testing sum","two positive integers"){

    // https://github.com/catchorg/Catch2/blob/devel/docs/tutorial.md

    Model model;
    int a =10;
    int b =20;
    REQUIRE(model.sum(a,b)==30);
}
