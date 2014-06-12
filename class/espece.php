<?php

class Espece extends Objet
{
    private $nom;
    private $prix_consult;

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