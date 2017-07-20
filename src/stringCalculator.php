<?php

namespace DiscoveringPHPSpec;

use Prophecy\Exception\InvalidArgumentException;

class stringCalculator
{

    const Max_Number_Allowed = 1000;

    public function add($string ){

        $numbers = $this->stringParser($string);

        $sum = 0 ;

        foreach ( $numbers as $number ){
            $this->GuardAgainstInvalidNumber($number);
            if( $number >= self::Max_Number_Allowed ) continue ;

            $sum += $number ;
        }

        return $sum ;
    }


    /**
     * @param $num
     */
    public function GuardAgainstInvalidNumber($num)
    {
        if ($num < 0) throw new InvalidArgumentException("Invalid number provided: " . $num);
    }

    /**
     * @param $string
     * @return array
     */
    public function stringParser($string)
    {
        $numbers = array_map("intval" , preg_split("/\s*(,|\\\n)\s*/", $string ));
        return $numbers;
    }

}
