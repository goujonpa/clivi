<?php

class LigneFacture extends Objet
{
    private $id;
    private $facture;
    private $prestation;
    private $ordonnance;
    private $produit;
    private $quantite;
    private $remise;

    public function id()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function facture()
    {
        return $this->facture;
    }
    
    public function setFacture($facture)
    {
        $this->facture = $facture;
    }

    public function prestation()
    {
        return $this->prestation;
    }
    
    public function setPrestation($prestation)
    {
        $this->prestation = $prestation;
    }

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

    public function remise()
    {
        return $this->remise;
    }
    
    public function setRemise($remise)
    {
        $this->remise = $remise;
    }