<?php

class Espece extends Objet
{
    protected $id
    protected $nom;
    protected $prix_consultation;

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
}