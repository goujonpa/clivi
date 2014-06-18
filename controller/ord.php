<?php
/*
	Controller Ordonnance, handle CRUD for ordonnances.
*/

// Implemented actions
$actions = array("liste", "add", "edit", "listeProduit", "addProduit", "editProduit");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "liste";
}

switch($action) {
	case "liste":
		$list = Ordonnance::getList("Liste des Ordonnances");
		include 'view/list.php';
		break;
	case "add":
		$ordonnance = new Ordonnance();
		$formConf = $ordonnance->getForm();
		include 'view/form.php';
		break;
	case "edit":
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

