<?php

class LigneOrdonnance extends Objet
{
    protected $ordonnance;
    protected $produit;
    protected $quantite;
    protected $instruction;

    public function ordonnance()
    {
        return $this->ordonnance;
    }
    
    public function setOrdonnance($ordonnance)
    {
        $this->ordonnance = $ordonnance;
    }

    public function produit()
    {
        return $this->produit;
    }
    
    public function setProduit($produit)
    {
        $this->produit = $produit;
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