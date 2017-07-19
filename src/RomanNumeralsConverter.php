<?php

namespace DiscoveringPHPSpec;

use Prophecy\Exception\InvalidArgumentException;

class RomanNumeralsConverter
{

    /**
     * @var array
     */
    protected static $lookup = [
        1000 => 'M',
        900  => 'CM',
        500  => 'D',
        400  => 'CD',
        100  => 'C',
        90   => 'XC',
        50   => 'L',
        40   => 'XL',
        10   => 'X',
        9    => 'IX',
        5    => 'V',
        4    => 'IV',
        1    => 'I'
    ];

    public function convert( $number ){
        $string = "" ;

        $this->startMiddleware( $number ) ;

        foreach( self::$lookup as $item => $value ){
            while( $number >= $item ){
                $string .= $value ;
                $number -= $item ;
            }
        }

        return $string ;
    }

    function startMiddleware( $number ){
        if( $number == 0 ){
            throw new InvalidArgumentException() ;
        }
    }

}
