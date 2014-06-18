<?php

class List
{
    protected $title;
    protected $class;


    public function __construct($class, $title)
    {
        $this->$class = $class;
        $this->$title = $title;
    }


}