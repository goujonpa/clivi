<?php

class Facture extends Objet
{
    protected $id;
    protected $employe;
    protected $animal;
    protected $date_edition;
    protected $date_paiement;
    protected $moyen_paiement;
    protected $prix_total;
    public $_specialFields = array(
        "employe" => array(
            "t" => "ForeignField"
        ),
        "animal" => array(
            "t" => "ForeignField"
        ),
        "date_edition" => array(
            "label" => "Date d'édition",
            "i" => 8
        ),
        "date_paiement" => array(
            "label" => "Date de paiement",
            "i" => 8
        ),
        "moyen_paiement" => array(
            "label" => "Moyen de paiement",
            "i" => -1
        ),
        "prix_total" => array(
            "label" => "Prix total",
            "i" => 9
        ));

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

    public function date_edition()
    {
        return $this->date_edition;
    }
    
    public function setDate_edition($date_edition)
    {
        $this->date_edition = $date_edition;
    }

    public function date_paiement()
    {
        return $this->date_paiement;
    }
    
    public function setDate_paiement($date_paiement)
    {
        $this->date_paiement = $date_paiement;
    }

    public function moyen_paiement()
    {
        return $this->moyen_paiement;
    }
    
    public function setMoyen_paiement($moyen_paiement)
    {
        $this->moyen_paiement = $moyen_paiement;
    }

    public function prix_total()
    {
        return $this->prix_total;
    }
    
    public function setPrix_total($prix_total)
    {
        $this->prix_total = $prix_total;
    }
}