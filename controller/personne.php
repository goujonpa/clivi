<?php
/*
	Controller personne, handle CRUD for personnel and client.
*/

// Implemented actions
$actions = array("listePersonnel", "listeClient", "addPersonnel", "addClient", "editEmploye", "editClient");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "listePersonnel";
}

switch($action) {
	case "listePersonnel":
		$list = Employe::getList("Liste du Personnel");
		include 'view/list.php';
		break;
	case "listeClient":
		$list = Client::getList("Liste des Clients");
		include 'view/list.php';
		break;
	case "addPersonnel":
		$employe = new Employe();
		$formConf = $employe->getForm();
		include 'view/form.php';
		break;
	case "addClient":
        $client = new Client();
        $formConf = $client->getForm();
        include 'view/form.php';
		break;
	case "editEmploye":
		$employe = new Employe();
        $employe->select($_GET['id']);
		$formConf = $employe->getForm();
		include 'view/form.php';
		break;
	case "editClient":
		$client = new Client();
        $client->select($_GET['id']);
        $formConf = $client->getForm();
        include 'view/form.php';
		break;
	default:
		include 'view/404.php';
		break;
}

