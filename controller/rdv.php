<?php
/*
	Controller Rdv, handle CRUD for meeting.
*/

// Implemented actions
$actions = array("listeRdv", "addRdv", "editRdv");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "listeRdv";
}

switch($action) {
	case "listeRdv":
		$listArray = Employe::getAll();
		$listParams = array("title" => "Liste des rendez-vous",
							"keys" => array("id", "animal", "veterinaire", "date", "duree"));
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

