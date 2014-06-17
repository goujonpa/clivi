<?php
/*
	Controller animal, handle CRUD for animal.
*/

// Implemented actions
$actions = array("listeAnimal", "addAnimal", "editAnimal");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "listeAnimal";
}

switch($action) {
	case "listeAnimal":
		$listArray = Animal::getAll();
		$listParams = array("title" => "Liste des animaux de la clinique",
							"keys" => array("nom", "proprio", "race", "poids", "genre", "sterile", "date_naissance", "date_deces", "taille", "code"));
		include 'view/list.php';
		break;
	case "addAnimal":

		break;
	case "editAnimal":

		break;
	default:
		include 'view/404.php';
		break;
}

