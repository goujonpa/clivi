<?php
/*
	Controller animal, handle CRUD for animal.
*/

// Implemented actions
$actions = array("listeAnimal", "addAnimal", "editAnimal", "listeEspece", "addEspece", "editEspece","listeRace", "addRace", "editRace");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "liste";
}

switch($action) {
	case "listeAnimal":
		$listArray = Animal::getAll();
		$listParams = array("title" => "Liste des animaux de la clinique",
							"keys" => array("id", "nom", "proprio", "race", "poids", "genre", "sterile", "date_naissance", "date_deces", "taille", "code"));
		$editLink = "editAnimal";
		include 'view/list.php';
		break;
	case "addAnimal":
		$animal = new Animal();
		$formConf = $animal->getForm();
		include 'view/form.php';
		break;
	case "editAnimal":
		$animal = new Animal();
        $animal->select($_GET['id']);
        $formConf = $animal->getForm();
        include 'view/form.php';
		break;
	case "listeEspece":
		$listArray = Espece::getAll();
		$listParams = array("title" => "Liste des espèces d'animaux",
							"keys" => array("nom", "prix_consultation"));
		$editLink = "editEspece";
		include 'view/list.php';
		break;
	case "addEspece":
		$espece = new Espece();
		$formConf = $espece->getForm();
		include 'view/form.php';
		break;
	case "editEspece":
		$espece = new Espece();
        $espece->select($_GET['nom']);
        $formConf = $espece->getForm();
        include 'view/form.php';
		break;
	case "listeRace":
		$listArray = Race::getAll();
		$listParams = array("title" => "Liste des races",
							"keys" => array("nom", "espece", "prix_intervention"));
		$editLink = "editRace";
		include 'view/list.php';
		break;
	case "addRace":
		$race = new Race();
		$formConf = $race->getForm();
		include 'view/form.php';
		break;
	case "editRace":
		$race = new Race();
        $race->select($_GET['nom']);
        $formConf = $race->getForm();
        include 'view/form.php';
		break;	
	default:
		include 'view/404.php';
		break;
}

