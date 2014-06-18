<?php
/*
	Controller Facture, handle CRUD for factures.
*/

// Implemented actions
$actions = array("listeFacture", "addFacture", "editFacture", "detailFacture");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "liste";
}

switch($action) {
	case "listeFacture":
		$list = Facture::getList("Liste des Factures");
		include 'view/detail.php';
		break;
	case "addFacture":
		$facture = new Facture();
		$formConf = $facture->getForm();
		include 'view/form.php';
		break;
	case "editFacture":
		$list = Facture::getList("Liste des Factures");
		$facture = new Facture();
        $facture->select($_GET['id']);
        $formConf = $facture->getForm();
        include 'view/formDetail.php';
		break;
	case "detailFacture":
		$facture = new Facture();
        $facture->select($_GET['id']);
        $formConf = $facture->getForm();
        include 'view/detail.php';
		break;
	default:
		include 'view/404.php';
		break;
}

