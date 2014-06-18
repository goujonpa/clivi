<?php

class Employe extends Personne
{
    protected $id_national;
    protected $is_veterinaire;
    public $_specialFields = array(
        "is_veterinaire" => array(
            "t" => "BoolField",
            "label" => "Veterinaire"
        ),
        "id_national" => array(
            "label" => "Identifiant national"
        ));

    public function id_national()
    {
        return $this->id_national;
    }
    
    public function setId_national($id_national)
    {
        $this->id_national = $id_national;
    }

    public function is_veterinaire()
    {
        return $this->is_veterinaire;
    }
    
    public function setIs_veterinaire($is_veterinaire)
    {
        $this->is_veterinaire = $is_veterinaire;
    }
}