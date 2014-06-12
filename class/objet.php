<?php

class Objet
{
    public function fromDb($arr)
    {
        $att = get_object_vars($this);

        for ($i=0; $i < count($att); $i++) { 
            $this->$att[i] = $arr[i];
        }
    }

    public static function getAll()
    {
    	// TODO return list of objects Client
        echo "toto:".get_called_class();
    	return Array();
    }
}