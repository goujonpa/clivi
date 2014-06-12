<?php

class Ordonnance extends Objet
{
    private $id;
    private $veterinaire;
    private $animal;
    private $date;
    private $prix;

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