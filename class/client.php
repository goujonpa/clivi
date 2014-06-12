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

    public static function getAll()
    {
    	// TODO return list of objects Client

    	return Array();
    }
}