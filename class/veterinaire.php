<?php
class Veterinaire extends Employe
{
    private $idNational;

    public function idNational()
    {
        return $this->idNational;
    }
    
    public function setIdNational($idNational)
    {
        $this->idNational = $idNational;
    }
}
?>