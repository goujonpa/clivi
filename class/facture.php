<?php

class Facture
{
    private $id;
    private $date_edition;
    private $date_paiement;
    private $moyen_paiement;
    private $prix_total;

    public function id()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
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