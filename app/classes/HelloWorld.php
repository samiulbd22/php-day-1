<?php


namespace App\classes;


class HelloWorld
{
    public $name = 'BITM'; ///property
    public function index()
    {
        echo $this->name; ///&this 1ta object
    }

}