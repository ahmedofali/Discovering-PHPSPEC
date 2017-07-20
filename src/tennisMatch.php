<?php

namespace DiscoveringPHPSpec;

class tennisMatch
{

    protected $player1 ;

    protected $player2 ;

    protected $lookup =[
          0 => "Love" ,
          1 => "Fifteen" ,
          2 => "Thirty" ,
          3 => "Forty"
    ];

    function __construct( Player $player_1 , Player $player_2 )
    {
        $this->player1 = $player_1 ;
        $this->player2 = $player_2 ;
    }

    public function score()
    {
        if( $this->hasAWinner() )
        {
            return "Player ".$this->winner()->name." Win the Game";
        }

        $score = $this->lookup[ $this->player1->points ]."-" ;


        if( $this->player1->points == $this->player2->points ){
            $score .= "All" ;
        }else{
            $score .= $this->lookup[ $this->player2->points ] ;
        }


        return $score ;
    }

    public function hasAWinner()
    {
        return $this->hasEnoughtPoints() &&  $this->isLeadingByTwo() ;
    }

    private function hasEnoughtPoints()
    {
        return max( $this->player1->points , $this->player2->points ) >= 4 ;
    }


    private function isLeadingByTwo()
    {
        return abs( $this->player1->points - $this->player2->points ) >= 2 ;
    }


    public function winner()
    {
        return $this->player2->points > $this->player1->points ? $this->player2 : $this->player1 ;
    }

}
