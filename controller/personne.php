<?php
/*
	Controller personne, handle CRUD for personnel and client.
*/

// Implemented actions
$actions = array("listePersonnel", "listeClient", "addPersonnel", "addClient", "editPersonnel", "editClient");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "listePersonnel";
}

switch($action) {
	case "listePersonnel":
		break;
	case "listeClient":
		$listArray = Client::getAll();
		$listParams = array();
		include 'view/list.php';
		break;
	case "addPersonnel":

		break;
	case "addClient":

		break;
	default:
		include 'view/404.php';
		break;
}

