<?php

class Race extends Objet
{
    protected $id;
    protected $nom;
    protected $espece;
    protected $prix_intervention;
    public $_specialFields = array(
        "espece" => array(
            "t" => "ForeignField",
            "i" => 3
        ),
        "nom" => array(
            "t" => "ForeignField",
            "i" => 2
        ),
        "id" => array(
            "i" => 1
        ),
        "prix_intervention" => array(
            "label" => "Prix de l'intervetion",
            "i" => 4
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

    public function espece()
    {
        return $this->espece;
    }
    
    public function setEspece($espece)
    {
        $this->espece = $espece;
    }

    public function prix_intervention()
    {
        return $this->prix_intervention;
    }
    
    public function setPrix_intervention($prix_intervention)
    {
        $this->prix_intervention = $prix_intervention;
    }

    public function str() {
        return $this->nom;
    }
}