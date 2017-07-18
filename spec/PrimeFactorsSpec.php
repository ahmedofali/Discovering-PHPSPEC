<?php

namespace spec\DiscoveringPHPSpec;

use DiscoveringPHPSpec\PrimeFactors;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
    function it_should_return_empty_array_for_1()
    {
        $this->generate( 1 )->shouldReturn( [] );
    }

    function it_should_return_2_for_2()
    {
        $this->generate( 2 )->shouldReturn( [ 2 ] );
    }

    function it_should_return_3_for_3()
    {
        $this->generate( 3 )->shouldReturn( [ 3 ] );
    }

    function it_should_return_array_of_two_for_4()
    {
        $this->generate( 4 )->shouldReturn( [ 2 , 2 ] );
    }

    function it_should_return_array_of_three_for_8()
    {
        $this->generate( 8 )->shouldReturn( [ 2 , 2 , 2 ] );
    }

    function it_should_return_5_for_5()
    {
        $this->generate( 5 )->shouldReturn( [ 5 ] );
    }

    function it_should_return_2_3_for_6()
    {
        $this->generate( 6 )->shouldReturn( [ 2 , 3 ] );
    }

    function it_should_return_2_3_for_9()
    {
        $this->generate( 6 )->shouldReturn( [ 2 , 3 ] );
    }

    function it_should_return_2_2_5_5_for_100()
    {
        $this->generate( 100 )->shouldReturn( [ 2 , 2 ,5 , 5 ] );
    }
}
