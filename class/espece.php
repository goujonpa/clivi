<?php

class Espece extends Objet
{
    protected $id;
    protected $nom;
    protected $prix_consultation;
    public $_specialFields = array(
        "id" => array(
            "i" => 1
        ),
        "nom" => array(
            "i" => 2
        ),
        "prix_consultation" => array(
            "i" => 3,
            "label" => "Prix de la consultation",
            "t" => "PriceField"
        ));

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

    public function prix_consultation()
    {
        return $this->prix_consultation;
    }
    
    public function setPrix_consultation($prix_consultation)
    {
        $this->prix_consultation = $prix_consultation;
    }

    public function str() {
        return $this->nom;
    }
}