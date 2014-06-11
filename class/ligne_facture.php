<?php
class Ligne_facture
{
    private $num;
    private $quantite;
    private $remise;


    public function num()
    {
        return $this->num;
    }
    
    public function setNum($num)
    {
        $this->num = $num;
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
?>