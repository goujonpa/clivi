<?php

class LigneOrdonnance extends Objet
{
    private $ordonnance;
    private $medicament;
    private $quantite;
    private $instruction;

    public function ordonnance()
    {
        return $this->ordonnance;
    }
    
    public function setOrdonnance($ordonnance)
    {
        $this->ordonnance = $ordonnance;
    }

    public function medicament()
    {
        return $this->medicament;
    }
    
    public function setMedicament($medicament)
    {
        $this->medicament = $medicament;
    }

    public function quantite()
    {
        return $this->quantite;
    }
    
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    public function instruction()
    {
        return $this->instruction;
    }
    
    public function setInstruction($instruction)
    {
        $this->instruction = $instruction;
    }