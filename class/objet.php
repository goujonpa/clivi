<?php

class Objet
{
    public function fromDb($arr)
    {
        $att = get_object_vars($this);
        $attKeys = array_keys($att);

        for ($i=0; $i < count($att); $i++) {
            if(array_key_exists($attKeys[$i], $arr)) {
                $this->$attKeys[$i] = $arr[$attKeys[$i]];
            }
        }
    }

    public static function getAll()
    {
        $className = get_called_class();
        $dbName = lcfirst($className);
        $bdd = new Db();
        $result = Array();

        $requete_prepare = $bdd->db->prepare("SELECT * FROM ".$dbName); // on prépare notre requête
        $requete_prepare->execute();

        while($ligne = $requete_prepare->fetch(PDO::FETCH_ASSOC)) {
            $temp = new $className();
            $temp->fromDb($ligne);
            $result[] = $temp;
        }

    	return $result;
    }

    public function getForm()
    {
        $form = new Form($this);
        return $form;
    }

    public function getFields()
    {
        $ret = array();
        foreach(array_keys(get_object_vars($this)) as $keyName) {
            $ret[] = new Field($keyName, $this->$keyName);
        }
        return $ret;
    }
}