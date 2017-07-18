<?php

namespace DiscoveringPHPSpec;

class FizzBuzz
{

    public function execute( $number ){

        if( $number % 15 == 0 ) return "fizzbuzz" ;
        if( $number % 3 == 0 ) return "fizz" ;
        if( $number % 5 == 0 ) return "buzz" ;


        return $number ;
    }


    public function executeUpTo( $number ){
        return array_map(function( $i ){
            return $this->execute( $i );
        }, range( 1 , $number )) ;
    }

}
