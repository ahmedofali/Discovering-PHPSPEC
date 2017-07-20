<?php

namespace spec\DiscoveringPHPSpec;

use DiscoveringPHPSpec\tennisMatch;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use DiscoveringPHPSpec\Player;

class tennisMatchSpec extends ObjectBehavior
{

    protected $john ;
    protected $jane ;

    function let()
    {
        $this->john = new Player("John Doe" , 0 ) ;
        $this->jane = new Player("Jane" , 0) ;

        $this->beConstructedWith( $this->john , $this->jane );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(tennisMatch::class);
    }

    function it_scores_a_scoreless_game()
    {
        $this->score()->shouldReturn("Love-All");
    }

    function it_scores_1_0_game()
    {
        $this->john->earnPoints( 1 ) ;
        $this->score()->shouldReturn("Fifteen-Love");
    }

    function it_scores_2_0_game()
    {
        $this->john->earnPoints( 2 ) ;
        $this->score()->shouldReturn("Thirty-Love");
    }

    function it_scores_3_0_game()
    {
        $this->john->earnPoints( 3 ) ;
        $this->score()->shouldReturn("Forty-Love");
    }

    function it_scores_4_0_game()
    {
        $this->john->earnPoints( 4 ) ;
        $this->score()->shouldReturn("Player John Doe Win the Game");
    }

    function it_scores_0_4_game()
    {
        $this->jane->earnPoints( 4 ) ;
        $this->score()->shouldReturn("Player Jane Win the Game");
    }
}
