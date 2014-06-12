<?php

class Client extends Personne
{
    protected $numTel;

    public function numTel()
    {
        return $this->numTel;
    }
    
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }
}