<?php

class Produit extends Objet
{
    protected $id;
    protected $nom;
    protected $prix;
    protected $isMedicament;
    
    public function id()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function nom()
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function prix()
    {
        return $this->prix;
    }
    
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function isMedicament()
    {
        return $this->isMedicament;
    }
    
    public function setIsMedicament($isMedicament)
    {
        $this->isMedicament = $isMedicament;
    }
}
