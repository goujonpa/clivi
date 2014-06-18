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
		$list = Facture::getList("Liste des Factures");
		include 'view/list.php';
		break;
	case "add":
		$facture = new Facture();
		$formConf = $facture->getForm();
		include 'view/form.php';
		break;
	case "edit":
		$facture = new Facture();
        $facture->select($_GET['id']);
        $formConf = $facture->getForm();
        include 'view/form.php';
		break;
	default:
		include 'view/404.php';
		break;
}

