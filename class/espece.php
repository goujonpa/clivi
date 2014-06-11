<?php
class Espece
{
    private $nom;
    private $prix_consult;

    public function nom()
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function prix_consult()
    {
        return $this->prix_consult;
    }
    
    public function setPrix_consult($prix_consult)
    {
        $this->prix_consult = $prix_consult;
    }
}
?>