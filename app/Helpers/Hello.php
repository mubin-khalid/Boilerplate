<?php

namespace App\Helpers;

class Hello
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        return "Hello {$this->name}!";
    }
}
