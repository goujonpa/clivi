<?php
/*
	Controller Facture, handle CRUD for factures.
*/

// Implemented actions
$actions = array("listeFacture", "addFacture", "detailFacture", "addPresta", "addProduit", "addOrd");

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
	case "addPresta":
		$ligne = new LigneFacturePrestation();
		$ligne->setFacture($_GET['factId']);
		$formConf = $ligne->getForm();
		include 'view/form.php';
		break;
	case "addProduit":
		$ligne = new LigneFactureProduit();
		$ligne->setFacture($_GET['factId']);
		$formConf = $ligne->getForm();
		include 'view/form.php';
		break;
	case "addOrd":
		$ligne = new LigneFactureOrdonnance();
		$ligne->setFacture($_GET['factId']);
		$formConf = $ligne->getForm();
		include 'view/form.php';
		break;
	case "detailFacture":
		// TODO: Ajouter bouton payer
		// TODO: Ajouter résumé de la facture (client, prix etc... )
		echo '<div class="container">';
		echo ' <a href="'.$base_url.$page.'/addPresta'.'?factId='.$_GET["id"].'" type="button" class="btn btn-success">Ajouter une Prestation</a>';
		echo ' <a href="'.$base_url.$page.'/addProduit'.'?factId='.$_GET["id"].'" type="button" class="btn btn-success">Ajouter un Produit</a>';
		echo ' <a href="'.$base_url.$page.'/addOrd'.'?factId='.$_GET["id"].'" type="button" class="btn btn-success">Ajouter une Ordonnance</a>';
        echo '</div>';
        $list = LigneFacture::getList("Détails de la facture", array("facture" => $_GET["id"]));
        $disabledTools = true;
        include 'view/list.php';
		break;
	default:
		include 'view/404.php';
		break;
}

