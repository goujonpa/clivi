<?php

class Espece extends Objet
{
    public $_primaryAttr = "nom";
    protected $nom;
    protected $prix_consultation;

    public function nom()
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function prix_consultation()
    {
        return $this->prix_consultation;
    }
    
    public function setPrix_consultation($prix_consultation)
    {
        $this->prix_consultation = $prix_consultation;
    }
}