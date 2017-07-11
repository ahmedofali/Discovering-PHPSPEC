<?php

namespace spec\DiscoveringPHPSpec;

use DiscoveringPHPSpec\Markdown;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MarkdownSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Markdown::class);
    }
}
