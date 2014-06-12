<?php

class Client extends Personne
{
    private $numTel;

    public function numTel()
    {
        return $this->numTel;
    }
    
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }
}