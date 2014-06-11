<?php

class Employe extends Personne
{
    private $id;

    public function id()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
}