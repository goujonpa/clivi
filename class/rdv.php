<?php

class Rdv
{
    private $id;
    private $date;
    private $duree;


    public function id()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function date()
    {
        return $this->date;
    }
    
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function duree()
    {
        return $this->duree;
    }
    
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }
}