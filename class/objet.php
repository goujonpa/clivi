<?php

class Objet
{
    public $_primaryAttr = "id";
    public $_specialFields = array();

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

    public static function getAll($arr = array())
    {
        $className = get_called_class();
        $dbName = self::dbName();
        $bdd = new Db();
        $result = Array();
        if(count($arr) == 0) {
            $requete_prepare = $bdd->db->prepare("SELECT * FROM ".$dbName." ORDER BY id DESC"); // on prépare notre requête
            $requete_prepare->execute();
        } else {
            $req = "SELECT * FROM ".$dbName." WHERE 1=1";
            foreach($arr as $k => $a) {
                $req .= " AND $k = :$k";
            }
            $req .= " ORDER BY id DESC";
            $requete_prepare = $bdd->db->prepare($req);
            $requete_prepare->execute($arr);
        }

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
            $field = null;
            if($keyName[0] == "_") { continue; }
            if($keyName == $this->_primaryAttr && $this->_primaryAttr == "id") { $ret[] = new Field($keyName, $this->$keyName, true); continue; }
            if(isset($this->_specialFields[$keyName]["t"])) {
                $field = new $this->_specialFields[$keyName]["t"]($keyName, $this->$keyName);
            } else {
                $field = new Field($keyName, $this->$keyName);
            }
            if(isset($this->_specialFields[$keyName]["label"])) {
                $field->label = $this->_specialFields[$keyName]["label"];
            }
            if(isset($this->_specialFields[$keyName]["i"])) {
                $field->i = $this->_specialFields[$keyName]["i"];
            } else {
                $field->i = 5;
            }
            if($field->i == -1) {
                continue;
            }
            $ret[] = $field;
        }
        usort($ret, function($a, $b) {return $a->i - $b->i;} );
        return $ret;
    }

    public function insert()
    {
        $class = get_called_class();
        $dbName = $class::dbName();
        $bdd = new Db();

        $values = array();
        $params = array();
        foreach(array_keys(get_object_vars($this)) as $keyName) {
            if($keyName[0] == "_") { continue; }
            if($keyName == $this->_primaryAttr && $this->_primaryAttr == "id") {
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

    public function update()
    {
        $dbName = self::dbName();
        $bdd = new Db();

        $values = array();
        $params = array();
        foreach(array_keys(get_object_vars($this)) as $keyName) {
            if($keyName[0] == "_") { continue; }
            $params[$keyName] = $this->$keyName;
            if($keyName == $this->_primaryAttr && $this->_primaryAttr == "id") { continue; }
            $values[$keyName] = $keyName." = :".$keyName;
        }

        $req = "UPDATE ".$dbName." SET ".implode(",", array_values($values))." WHERE ".$this->_primaryAttr." = :".$this->_primaryAttr;

        $requete_prepare = $bdd->db->prepare($req); // on prépare notre requête

        if (!$requete_prepare) { 
            throw new Exception("PDO::errorInfo(): (STEP 1)\n". print_r($bdd->db->errorInfo(), true));
        } 

        $result = $requete_prepare->execute($params);

        if($result != 1) {
            throw new Exception("RESULT : ".print_r($result,true)."\n".print_r($requete_prepare->errorInfo(),true)); 
        }
    }

    public function select($id) {
        $dbName = self::dbName();
        $bdd = new Db();

        $requete_prepare = $bdd->db->prepare("SELECT * FROM ".$dbName." WHERE ".$this->_primaryAttr." = :id"); // on prépare notre requête
        $requete_prepare->execute(array("id" => $id));

        $ligne = $requete_prepare->fetch(PDO::FETCH_ASSOC);
        $this->fromDb($ligne);
    }

    public function str() {
        return self::dbName()." #".$this->{$this->_primaryAttr};
    }

    public function getList($title, $arr=array()) {
        return new ListView(get_called_class(), $title, $arr);
    }
}
