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
            "t" => "ForeignField"
        ),
        "animal" => array(
            "t" => "ForeignField"
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