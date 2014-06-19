<?php

class Client extends Personne
{
    protected $num_tel;

    public $_specialFields = array(
    "num_tel" => array(
        "t" => "PhoneField",
        "label" => "Numero de telephone",
    ));

    public function num_tel()
    {
        return $this->num_tel;
    }
    
    public function setNum_tel($num_tel)
    {
        $this->num_tel = $num_tel;
    }

}