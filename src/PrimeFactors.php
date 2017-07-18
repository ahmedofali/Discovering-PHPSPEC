<?php

namespace DiscoveringPHPSpec;

class PrimeFactors
{

    public function generate( $number ){
        $primes = [] ;

        $candidate = 2 ;

        while( $number > 1 ){
            while( $number % $candidate == 0 ){
                $primes[] = $candidate ;
                $number /= $candidate ;
            }

            $candidate ++ ;
        }


        return $primes ;
    }

}
