<?php

class Rdv extends Objet
{
    private $id;
    private $veterinaire;
    private $animal;
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