<?php
/*
	Controller Facture, handle CRUD for factures.
*/

// Implemented actions
$actions = array("liste", "add", "edit");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "liste";
}

switch($action) {
	case "liste":
		$listArray = Facture::getAll();
		$listParams = array("title" => "Liste des factures",
							"keys" => array("id", "employe", "animal", "date_edition", "date_paiement", "moyen_paiement", "prix_total"));
		include 'view/list.php';
		break;
		case "listePersonnel":
		$listArray = Employe::getAll();
		$listParams = array("title" => "Liste du personnel",
							"keys" => array("id", "nom", "prenom", "is_veterinaire", "id_national"));
		include 'view/list.php';
		break;
	case "add":
		$facture = new Facture();
		$formConf = $facture->getForm();
		include 'view/form.php';
		break;
	case "edit":

		break;
	default:
		include 'view/404.php';
		break;
}

