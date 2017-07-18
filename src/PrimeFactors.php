<?php

namespace DiscoveringPHPSpec;

class PrimeFactors
{

    public function generate( $number ){
        $primes = [] ;

        $candidate = 2 ;

        for( ; $number > 1 ; $candidate ++ ){
            while( $number % $candidate == 0 ){
                $primes[] = $candidate ;
                $number /= $candidate ;
            }

        }


        return $primes ;
    }

}
