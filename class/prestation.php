<?php
class Prestation
{
    private $id;
    private $description;
    private $type;
    private $prix;


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
?>