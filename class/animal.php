<?php

class Animal extends Objet
{
    protected $id;
    protected $nom;
    protected $client;
    protected $race;
    protected $poids;
    protected $genre;
    protected $sterile;
    protected $date_naissance;
    protected $date_deces;
    protected $taille;
    protected $code;
    public $_specialFields = array(
        "id" => array(
            "i" => 1
        ),
        "nom" => array(
            "i" => 2
        ),
        "genre" => array(
            "i" => 5,
            "t" => "GenderField"
        ),
        "poids" => array(
            "i" => 6
        ),
        "date_naissance" => array(
            "i" => 8,
            "label" => "Date de naissance",
            "t" => "DateField"
        ),
        "date_deces" => array(
            "i" => 9,
            "label" => "Date de deces",
            "t" => "DateField"
        ),
        "sterile" => array(
            "t" => "BoolField",
            "i" => 7
        ),
        "client" => array(
            "t" => "ForeignField",
            "i" => 3
        ),
        "race" => array(
            "label" => "Espece : Race",
            "t" => "ForeignField",
            "i" => 4
        ));

    public function id()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function nom()
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function client()
    {
        return $this->client;
    }
    
    public function setClient($client)
    {
        $this->client = $client;
    }

    public function race()
    {
        return $this->race;
    }
    
    public function setRace($race)
    {
        $this->race = $race;
    }

    public function poids()
    {
        return $this->poids;
    }
    
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    public function genre()
    {
        return $this->genre;
    }
    
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function sterile()
    {
        return $this->sterile;
    }
    
    public function setSterile($sterile)
    {
        $this->sterile = $sterile;
    }

    public function date_naissance()
    {
        return $this->date_naissance;
    }
    
    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    public function date_deces()
    {
        return $this->date_deces;
    }
    
    public function setDate_deces($date_deces)
    {
        $this->date_deces = $date_deces;
    }

    public function taille()
    {
        return $this->taille;
    }
    
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    public function code()
    {
        return $this->code;
    }
    
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function str() {
        return $this->nom;
    }
}