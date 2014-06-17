<?php
/*
	Controller Rdv, handle CRUD for meeting.
*/

// Implemented actions
$actions = array("liste", "add", "edit");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "liste";
}

switch($action) {
	case "liste":
		$listArray = Rdv::getAll();
		$listParams = array("title" => "Liste des rendez-vous",
							"keys" => array("id", "animal", "veterinaire", "date", "duree"));
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

