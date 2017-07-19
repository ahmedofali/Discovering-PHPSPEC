<?php

namespace spec\DiscoveringPHPSpec;

use DiscoveringPHPSpec\Stubs;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use DiscoveringPHPSpec\Task ;

class StubsSpec extends ObjectBehavior
{

    function let( $task1 , $task2)
    {
        $task1->beADoubleOf('DiscoveringPHPSpec\Task');
        $task2->beADoubleOf('DiscoveringPHPSpec\Task');

        $this->beConstructedWith( $task1 , $task2 );
    }

    function it_adds_tasks_as_expected( $task1 , $task2 )
    {
        $task1->getName()->willReturn( 1 );

        $this->addTask( $task1 ) ;
        $this->getTask( 0 )-> shouldBe( $task1 ) ;

        $this->addTask( $task2 ) ;
        $this->getTask( 1 )-> shouldBe( $task2 ) ;
    }

    function it_is_countable()
    {
        $this->shouldImplement('Countable');
    }

}
