<?php

class Objet
{
    public $primaryAttr = "id";

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

    public static function dbName() {
        $className = get_called_class();
        $dbName = lcfirst($className);
        return $dbName;
    }

    public static function getAll()
    {
        $className = get_called_class();
        $dbName = self::dbName();
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
            if($keyName == "primaryAttr") { continue; }
            $ret[] = new Field($keyName, $this->$keyName);
        }
        return $ret;
    }

    public function insert()
    {
        $dbName = self::dbName();
        $bdd = new Db();

        $values = array();
        $params = array();
        foreach(array_keys(get_object_vars($this)) as $keyName) {
            if($keyName == "primaryAttr") { continue; }
            if($keyName == $this->primaryAttr) { 
                $values[$keyName] = "nextval('".$dbName."_id_seq'::regclass)";
                continue;
            }
            $values[$keyName] = ":".$keyName;
            $params[$keyName] = $this->$keyName;
        }

        $req = "INSERT INTO ".$dbName." (".implode(",", array_keys($values)).")
        VALUES (".implode(",", array_values($values)).")";

        $requete_prepare = $bdd->db->prepare($req); // on prépare notre requête

        if (!$requete_prepare) { 
            throw new Exception("PDO::errorInfo(): (STEP 1)\n". print_r($bdd->db->errorInfo(), true));
        } 

        $result = $requete_prepare->execute($params);

        if($result != 1) {
            throw new Exception("RESULT : ".print_r($result,true)."\n".print_r($requete_prepare->errorInfo(),true)); 
        }
    }
}