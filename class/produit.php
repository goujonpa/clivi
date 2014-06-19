<?php

class Produit extends Objet
{
    protected $id;
    protected $nom;
    protected $prix;
    protected $is_medicament;
    public $_specialFields = array(
        "id" => array(
            "i" => 1
        ),
        "nom" => array(
            "i" => 2
        ),
        "is_medicament" => array(
            "i" => 3,
            "t" => "BoolField",
            "label" => "Medicament"
        ),
        "prix" => array(
            "i" => 4,
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

    public function prix()
    {
        return $this->prix;
    }
    
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function is_medicament()
    {
        return $this->is_medicament;
    }
    
    public function setis_medicament($is_medicament)
    {
        $this->is_medicament = $is_medicament;
    }

    public function str() {
        return $this->nom;
    }
}
