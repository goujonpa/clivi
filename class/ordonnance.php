<?php

class Ordonnance extends Objet
{
    protected $id;
    protected $veterinaire;
    protected $animal;
    protected $date;
    protected $prix;
    public $_specialFields = array(
        "veterinaire" => array(
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

    public function date()
    {
        return $this->date;
    }
    
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function veterinaire()
    {
        return $this->veterinaire;
    }
    
    public function setVeterinaire($veterinaire)
    {
        $this->veterinaire = $veterinaire;
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