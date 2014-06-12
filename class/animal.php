<?php

class Animal extends Objet
{
    private $nom;
    private $proprio;
    private $race;
    private $poids;
    private $genre;
    private $sterile;
    private $date_naissance;
    private $date_deces;
    private $taille;
    private $code;

    public function nom()
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function proprio()
    {
        return $this->proprio;
    }
    
    public function setProprio($proprio)
    {
        $this->proprio = $proprio;
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

    public function dateNaissance()
    {
        return $this->dateNaissance;
    }
    
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function dateDeces()
    {
        return $this->dateDeces;
    }
    
    public function setDateDeces($dateDeces)
    {
        $this->dateDeces = $dateDeces;
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
}