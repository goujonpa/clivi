<?php

class ListView
{
    protected $title;
    protected $objArray;
    public $class;

    public function __construct($class, $title, $arr=Array())
    {
        $this->title = $title;
        $this->objArray = $class::getAll($arr);
        $this->class = $class;
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