<?php
/*
	Controller Ordonnance, handle CRUD for ordonnances.
*/

// Implemented actions
$actions = array("listeOrdonnance", "addOrdonnance", "editOrdonnance", "listeProduit", "addProduit", "editProduit");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "listeOrdonnance";
}

switch($action) {
	case "listeOrdonnance":
		$list = Ordonnance::getList("Liste des Ordonnances");
		include 'view/list.php';
		break;
	case "addOrdonnance":
		$ordonnance = new Ordonnance();
		$formConf = $ordonnance->getForm();
		include 'view/form.php';
		break;
	case "editOrdonnance":
		$ordonnance = new Ordonnance();
        $ordonnance->select($_GET['id']);
        $formConf = $ordonnance->getForm();
        include 'view/form.php';
		break;
	case "listeProduit":
		$list = Produit::getList("Liste des Produits");
		include 'view/list.php';
		break;
	case "addProduit":
		$ordonnance = new Produit();
		$formConf = $ordonnance->getForm();
		include 'view/form.php';
		break;
	case "editProduit":
		$produit = new Produit();
        $produit->select($_GET['id']);
        $formConf = $produit->getForm();
        include 'view/form.php';
		break;
	default:
		include 'view/404.php';
		break;
}

