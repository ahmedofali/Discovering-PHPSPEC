<?php

namespace DiscoveringPHPSpec;

use DiscoveringPHPSpec\Task ;

class Stubs implements \Countable
{
    public $tasks;

    public function __construct()
    {

    }

    public function addTask( Task $task )
    {
        $this->tasks[] = $task ;
    }

    public function getTask( $index )
    {
        return $this->tasks[ $index ] ;
    }

    public function count()
    {
        // TODO: Implement count() method.
    }
}
