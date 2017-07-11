<?php

namespace spec;


use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MarkdownSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->generate()->shouldReturn( 5 ) ;
    }
}
