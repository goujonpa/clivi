<?php

class Employe extends Personne
{
    private $idNational;
    private $isVeterinaire;

    public function idNational()
    {
        return $this->idNational;
    }
    
    public function setIdNational($idNational)
    {
        $this->idNational = $idNational;
    }

    public function isVeterinaire()
    {
        return $this->isVeterinaire;
    }
    
    public function setIsVeterinaire($isVeterinaire)
    {
        $this->isVeterinaire = $isVeterinaire;
    }
}