<?php

class Race extends Objet
{
    private $nom;
    private $espece;
    private $prixIntervention;

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

    public function prixIntervention()
    {
        return $this->prixIntervention;
    }
    
    public function setPrixIntervention($prixIntervention)
    {
        $this->prixIntervention = $prixIntervention;
    }
}