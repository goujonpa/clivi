<?php
/*
	Controller animal, handle CRUD for animal.
*/

// Implemented actions
$actions = array("liste", "addAnimal", "edit");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "liste";
}

switch($action) {
	case "liste":
		$listArray = Animal::getAll();
		$listParams = array("title" => "Liste des animaux de la clinique",
							"keys" => array("nom", "proprio", "race", "poids", "genre", "sterile", "date_naissance", "date_deces", "taille", "code"));
		$editLink = "edit";
		include 'view/list.php';
		break;
	case "addAnimal":
		$animal = new Animal();
		$formConf = $animal->getForm();
		include 'view/form.php';
		break;
	case "edit":

		break;
	default:
		include 'view/404.php';
		break;
}

