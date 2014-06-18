<?php

class Race extends Objet
{
    protected $nom;
    protected $espece;
    protected $prix_intervention;

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
}