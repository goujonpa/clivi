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
		$list = Animal::getList("Liste des Animaux");
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
		$list = Espece::getList("Liste des Especes");
		include 'view/list.php';
		break;
	case "addEspece":
		$espece = new Espece();
		$formConf = $espece->getForm();
		include 'view/form.php';
		break;
	case "editEspece":
		$espece = new Espece();
        $espece->select($_GET['id']);
        $formConf = $espece->getForm();
        include 'view/form.php';
		break;
	case "listeRace":
		$list = Race::getList("Liste des Races");
		include 'view/list.php';
		break;
	case "addRace":
		$race = new Race();
		$formConf = $race->getForm();
		include 'view/form.php';
		break;
	case "editRace":
		$race = new Race();
        $race->select($_GET['id']);
        $formConf = $race->getForm();
        include 'view/form.php';
		break;	
	default:
		include 'view/404.php';
		break;
}

