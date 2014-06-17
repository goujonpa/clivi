<?php
/*
	Controller Facture, handle CRUD for factures.
*/

// Implemented actions
$actions = array("listeFact", "addFact", "editFact");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "listeFact";
}

switch($action) {
	case "listeFact":
		$listArray = Facture::getAll();
		$listParams = array("title" => "Liste des factures",
							"keys" => array("id", "employe", "animal", "dateEdition", "datePaiement", "moyenPaiement", "prixTotal"));
		include 'view/list.php';
		break;
	case "addFact":

		break;
	case "editFact":

		break;
	default:
		include 'view/404.php';
		break;
}

