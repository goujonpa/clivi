<?php

class Consommable
{
    private $ref;
    private $nom;
    private $prix;
    private $type;
    
    public function ref()
    {
        return $this->ref;
    }
    
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    public function nom()
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function prix()
    {
        return $this->prix;
    }
    
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function type()
    {
        return $this->type;
    }
    
    public function setType($type)
    {
        $this->type = $type;
    }
}
