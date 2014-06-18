<?php

class Stats
{    
    public function factureMoy()
    {
        $bdd = new Db();

        $requete_prepare = $bdd->db->prepare("  SELECT SUM(f.prix_total)/COUNT(*) AS value
                                                FROM facture f" ); // on prépare notre requête
        $requete_prepare->execute();

        $ligne = $requete_prepare->fetch(PDO::FETCH_ASSOC);

        return $ligne;
    }

    public function nbAnimalMoyClient()
    {
        $bdd = new Db();

        $requete_prepare = $bdd->db->prepare("  SELECT SUM(t.count)/COUNT(*) AS value
                                                FROM (  SELECT c.nom, c.prenom, COUNT(a.client) AS count
                                                        FROM animal a, client c 
                                                        WHERE a.client = c.id
                                                        GROUP BY c.nom, c.prenom, c.id) t" ); // on prépare notre requête
        $requete_prepare->execute();

        $ligne = $requete_prepare->fetch(PDO::FETCH_ASSOC);

        return $ligne;
    }


    public function nbAnimalClient()
    {
        $bdd = new Db();

        $requete_prepare = $bdd->db->prepare("  SELECT c.nom, c.prenom, COUNT(a.client)
                                                FROM animal a, client c 
                                                WHERE a.client = c.id
                                                GROUP BY c.nom, c.prenom, c.id" ); // on prépare notre requête
        $requete_prepare->execute();

        $ligne = $requete_prepare->fetchAll(PDO::FETCH_ASSOC);

        return $ligne;
    }

    public function top3Client()
    {
        $bdd = new Db();

        $requete_prepare = $bdd->db->prepare("  SELECT c.nom, c.prenom, SUM(f.prix_total) AS prix
                                                FROM animal a, client c, facture f
                                                WHERE a.client = c.id
                                                AND f.animal = a.id
                                                GROUP BY c.nom, c.prenom, c.id
                                                ORDER BY prix DESC
                                                LIMIT 3" ); // on prépare notre requête
        $requete_prepare->execute();

        $ligne = $requete_prepare->fetchAll(PDO::FETCH_ASSOC);

        return $ligne;
    }

    public function top3Facture()
    {
        $bdd = new Db();

        $requete_prepare = $bdd->db->prepare("  SELECT c.nom, c.prenom, f.prix_total
                                                FROM animal a, client c, facture f
                                                WHERE a.client = c.id
                                                AND f.animal = a.id
                                                ORDER BY f.prix_total DESC
                                                LIMIT 3" ); // on prépare notre requête
        $requete_prepare->execute();

        $ligne = $requete_prepare->fetchAll(PDO::FETCH_ASSOC);

        return $ligne;
    }

    public function top5Veterinaire()
    {
        $bdd = new Db();

        $requete_prepare = $bdd->db->prepare("  SELECT e.nom, e.prenom, COUNT(*) AS c 
                                                FROM employe e, rdv r 
                                                WHERE e.id = r.employe
                                                AND e.is_veterinaire = '1'
                                                GROUP BY e.nom, e.prenom, e.id
                                                ORDER BY c DESC
                                                LIMIT 5" ); // on prépare notre requête
        $requete_prepare->execute();

        $ligne = $requete_prepare->fetch(PDO::FETCH_ASSOC);

        return $ligne;
    }

    public function top10Race()
    {
        $bdd = new Db();

        $requete_prepare = $bdd->db->prepare("  SELECT r.nom, count(*)
                                                FROM animal a, race r
                                                WHERE a.race = r.id
                                                GROUP BY r.nom, r.id
                                                LIMIT 10" ); // on prépare notre requête
        $requete_prepare->execute();

        $ligne = $requete_prepare->fetch(PDO::FETCH_ASSOC);

        return $ligne;
    }

    public function top10Espece()
    {

        $bdd = new Db();

        $requete_prepare = $bdd->db->prepare("  SELECT e.nom, count(*)
                                                FROM animal a, race r, espece e
                                                WHERE a.race = r.id
                                                AND e.id = r.espece
                                                GROUP BY e.nom, e.id
                                                LIMIT 10" ); // on prépare notre requête
        $requete_prepare->execute();

        $ligne = $requete_prepare->fetch(PDO::FETCH_ASSOC);

        return $ligne;
    }

    

}