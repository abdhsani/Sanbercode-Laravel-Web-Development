<?php

class Animal
{
    // property
    public $legs = 2;
    public $cold_blooded = 'false';
    public $name;

    // method
    public function __construct($name)
    {
        $this->name = $name;
    }
}
