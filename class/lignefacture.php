<?php

class LigneFacture extends Objet
{
    protected $id;
    protected $facture;
    protected $prestation;
    protected $ordonnance;
    protected $produit;
    protected $quantite;
    protected $remise;
    public $_specialFields = array(
        "ordonnance" => array(
            "t" => "ForeignField",
            "i" => 8
        ),
        "produit" => array(
            "t" => "ForeignField",
            "i" => 10
        ),
        "prestation" => array(
            "t" => "ForeignField",
            "i" => 9
        ),
        "quantite" => array(
            "i" => 11
        ),
        "facture" => array(
            "t" => "ForeignField",
            "i" => -1
        ),
        "remise" => array(
            "i" => 7
        ));

    public static function dbName() {
        return "lignefacture";
    }

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
}