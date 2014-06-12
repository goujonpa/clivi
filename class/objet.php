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
        $dbName = lcfirst(get_called_class());
        $bdd = new Db();
        $result = Array();

        $requete_prepare = $bdd->db->prepare("SELECT * FROM :table"); // on prépare notre requête
        $requete_prepare->execute(array( 'table' => $dbName ));
        while($ligne = $requete_prepare->fetch(PDO::FETCH_ASSOC)) {
            $temp = new get_called_class()();
            $temp->fromDb($ligne);
            $result[] = $temp;
        }

    	return $result;
    }
}