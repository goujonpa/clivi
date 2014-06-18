<?php

class ListView
{
    protected $title;
    protected $objArray;


    public function __construct($class, $title)
    {
        $this->title = $title;
        $this->objArray = $class::getAll();
    }

    public function getTitle() {
        return $this->title;
    }

    public function getLines() {
        return $this->objArray;
    }

    public function getLabels() {
        if(count($this->objArray) > 0 ){
            return $this->objArray[0]->getFields();
        } else {
            throw new Exception("Liste vide");
        }
    }

}