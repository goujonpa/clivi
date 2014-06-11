<?php
class Animal
{
    private $nom;
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
}
?>