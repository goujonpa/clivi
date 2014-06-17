<?php

class Espece extends Objet
{
    protected $nom;
    protected $prixConsult;

    public function nom()
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function prixConsult()
    {
        return $this->prixConsult;
    }
    
    public function setPrixConsult($prixConsult)
    {
        $this->prixConsult = $prixConsult;
    }
}