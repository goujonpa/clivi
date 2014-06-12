<?php

class Objet
{
    public function fromDb($arr)
    {
        $att = get_object_vars($this);
        print_r($att);

        for ($i=0; $i < count($att); $i++) {
            echo $att[i] . "<br />";
            $this->$att[i] = $arr[$att[i]];
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