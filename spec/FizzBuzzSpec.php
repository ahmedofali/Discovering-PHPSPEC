<?php

namespace spec\DiscoveringPHPSpec;

use DiscoveringPHPSpec\FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_should_return_1_for_1()
    {
        $this->execute(1)->shouldReturn( 1 );
    }

    function it_should_return_2_for_2()
    {
        $this->execute( 2 )->shouldReturn( 2 );
    }

    function it_should_return_fizz_for_3()
    {
        $this->execute( 3 )->shouldReturn( "fizz" );
    }

    function it_should_return_fizzbuzz_for_15()
    {
        $this->execute( 15 )->shouldReturn( "fizzbuzz" );
    }

    function it_should_retun_array_for_4(){
        $this->executeUpTo( 4 )->shouldReturn( [ 1 , 2 , "fizz" , 4 ] ) ;
    }

    function it_should_retun_array_for_8(){
        $this->executeUpTo( 8 )->shouldReturn( [ 1 , 2 , "fizz" , 4 , "buzz" , "fizz" , 7 ,8 ] ) ;
    }

}
