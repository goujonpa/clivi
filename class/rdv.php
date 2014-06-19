<?php

class Rdv extends Objet
{
    protected $id;
    protected $employe;
    protected $animal;
    protected $date;
    protected $duree;
    public $_specialFields = array(
        "employe" => array(
            "t" => "ForeignField",
            "i" => 2
        ),
        "animal" => array(
            "t" => "ForeignField",
            "i" => 3
        ),
        "id" => array(
            "i" => 1
        ),
        "date" => array(
            "i" => 4,
            "t" => "DateField"
        ),        
        "duree" => array(
            "i" => 5,
            "t" => "DureeField"
        ));


    public function id()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    
    public function employe()
    {
        return $this->employe;
    }
    
    public function setEmploye($employe)
    {
        $this->employe = $employe;
    }

    public function animal()
    {
        return $this->animal;
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