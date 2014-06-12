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
        $className = get_called_class();
        echo $className;
        $dbName = lcfirst($className);
        $bdd = new Db();
        $result = Array();

        echo $dbName . "<br />";

        $requete_prepare = $bdd->db->prepare("SELECT * FROM :table"); // on prépare notre requête
        $requete_prepare->execute(array( 'table' => $dbName ));

        while($ligne = $requete_prepare->fetch(PDO::FETCH_ASSOC)) {
            echo print_r($ligne, true) . "<br />";
            $temp = new $className();
            $temp->fromDb($ligne);
            $result[] = $temp;
        }

    	return $result;
    }
}