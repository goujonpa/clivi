<?php

class List
{
    protected $title;
    protected $objArray;


    public function __construct($class, $title)
    {
        $this->title = $title;
        $this->$objArray = $class::getAll();
    }

    public function getTitle() {
        return $this->title;
    }

    public function getLines() {
        return $this->objArray;
    }

}