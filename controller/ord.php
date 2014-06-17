<?php
/*
	Controller Ordonnance, handle CRUD for ordonnances.
*/

// Implemented actions
$actions = array("listeOrd", "addOrd", "editOrd");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "listeOrd";
}

switch($action) {
	case "listeOrd":
		$listArray = Ordonnance::getAll();
		$listParams = array("title" => "Liste des ordonnances",
							"keys" => array("id", "animal", "veterinaire", "date", "prix"));
		include 'view/list.php';
		break;
	case "addOrd":

		break;
	case "editOrd":

		break;
	default:
		include 'view/404.php';
		break;
}

