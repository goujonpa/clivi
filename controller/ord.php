<?php
/*
	Controller Ordonnance, handle CRUD for ordonnances.
*/

// Implemented actions
$actions = array("liste", "add", "edit");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "liste";
}

switch($action) {
	case "liste":
		$listArray = Ordonnance::getAll();
		$listParams = array("title" => "Liste des ordonnances",
							"keys" => array("id", "animal", "veterinaire", "date", "prix"));
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

