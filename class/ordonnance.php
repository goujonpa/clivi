<?php

class Ordonnance extends Objet
{
    protected $id;
    protected $employe;
    protected $animal;
    protected $date;
    protected $prix;
    public $_specialFields = array(
        "id" => array(
            "i" => 1
        ),
        "date" => array(
            "i" => 2
        ),
        "animal" => array(
            "i" => 3
        ),
        "employe" => array(
            "i" => 4,
            "t" => "ForeignField"
        ),
        "prix" => array(
            "i" => 5
        ));

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
    
    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }

    public function prix()
    {
        return $this->prix;
    }
    
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}