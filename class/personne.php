<?php

class Personne extends Objet
{
    protected $id;
    protected $nom;
    protected $prenom;

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

    public function prenom()
    {
        return $this->prenom;
    }
    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function str() {
        return $this->prenom.$this->nom;
    }
}



