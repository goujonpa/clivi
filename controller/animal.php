<?php
/*
	Controller animal, handle CRUD for animal.
*/

// Implemented actions
$actions = array("liste", "add", "edit");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "liste";
}

switch($action) {
	case "liste":
		$listArray = Animal::getAll();
		$listParams = array("title" => "Liste des animaux de la clinique",
							"keys" => array("nom", "proprio", "race", "poids", "genre", "sterile", "dateNaissance", "dateDeces", "taille", "code"));
		include 'view/list.php';
		break;
	case "add":

		break;
	case "edit":

		break;
	default:
		include 'view/404.php';
		break;
}

