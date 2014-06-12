<?php

class Objet
{
    public function fromDb(Array)
    {
        $att = get_object_vars($this)

        for ($i=0; $i < count($att); $i++) { 
            $this->$att[i] = Array[i];
        }
    }

    public static function getAll()
    {
    	// TODO return list of objects Client
        
    	return Array();
    }
}