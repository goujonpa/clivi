<?php

class Prestation extends Objet
{
    protected $id;
    protected $description;
    protected $type;
    protected $prix;
    public $_specialFields = array(
        "description" => array(
            "i" => 3
        ),
        "type" => array(
            "i" => 2
        )
        "id" => array(
            "i" => 1
        )
        "prix" => array(
            "i" => 4,
            "t" => "PriceField"
        ));

    public function id()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function description()
    {
        return $this->description;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function type()
    {
        return $this->type;
    }
    
    public function setType($type)
    {
        $this->type = $type;
    }

    public function prix()
    {
        return $this->prix;
    }
    
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}