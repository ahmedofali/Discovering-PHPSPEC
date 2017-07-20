<?php

namespace spec\DiscoveringPHPSpec;

use DiscoveringPHPSpec\stringCalculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Prophecy\Exception\InvalidArgumentException;

class stringCalculatorSpec extends ObjectBehavior
{
    function it_should_return_0_for_empty_string()
    {
        $this->add( "" )->shouldReturn( 0 );
    }

    function it_should_return_5_for_string_5()
    {
        $this->add( "5" )->shouldReturn( 5 );
    }

    function it_should_split_numbers_and_calc_them()
    {
        $this->add( "5,3,4" )->shouldReturn( 12 ) ;
    }

    function it_should_throw_exception_if_negative_number(){
        $this->shouldThrow(new InvalidArgumentException("Invalid number provided: -3"))->duringAdd( "2 , -3" ) ;
    }


    function it_ignores_any_number_greater_or_equal_to_1000(){
        $this->add("5,1000,1001,4")->shouldReturn( 9 ) ;
    }

    function it_allows_new_number_delimiters(){
        $this->add("5\n1000, 1001, 7")->shouldReturn( 12 ) ;
    }
}
