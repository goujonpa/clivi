<?php

class Objet
{
    public function fromDb($arr)
    {
        $att = get_object_vars($this);
        $attKeys = array_keys($att);

        for ($i=0; $i < count($att); $i++) {
            $this->$attKeys[$i] = $arr[$attKeys[$i]];
        }
    }

    public static function getAll()
    {
        $className = get_called_class();
        $dbName = lcfirst($className);
        $bdd = new Db();
        $result = Array();

        $requete_prepare = $bdd->db->prepare("SELECT * FROM client"); // on prépare notre requête
        $requete_prepare->execute(); //array( 'table' => $dbName ));

        while($ligne = $requete_prepare->fetch(PDO::FETCH_ASSOC)) {
            $temp = new $className();
            $temp->fromDb($ligne);
            $result[] = $temp;
        }

    	return $result;
    }
}