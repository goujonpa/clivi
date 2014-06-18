<?php

class List
{
    protected $title;
    protected $objArray;
    public $class;


    public function __construct($class, $title)
    {
        $this->title = $title;
        $this->class = $class;
        $this->$objArray = $class::getAll();
    }

    public function getTitle() {
        return $this->title;
    }

    public function getLines() {
        return $this->objArray;
    }

}