<?php

class Facture extends Objet
{
    protected $id;
    protected $employe;
    protected $animal;
    protected $dateEdition;
    protected $datePaiement;
    protected $moyenPaiement;
    protected $prixTotal;

    public function id()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function employe()
    {
        return $this->employe;
    }
    
    public function setEmploye($employe)
    {
        $this->employe = $employe;
    }

    public function animal()
    {
        return $this->animal;
    }
    
    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }

    public function dateEdition()
    {
        return $this->dateEdition;
    }
    
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;
    }

    public function datePaiement()
    {
        return $this->datePaiement;
    }
    
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;
    }

    public function moyenPaiement()
    {
        return $this->moyenPaiement;
    }
    
    public function setMoyenPaiement($moyenPaiement)
    {
        $this->moyenPaiement = $moyenPaiement;
    }

    public function prixTotal()
    {
        return $this->prixTotal;
    }
    
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;
    }
}