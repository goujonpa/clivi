<?php
/*
	Controller personne, handle CRUD for personnel and client.
*/

// Implemented actions
$actions = array("listePersonnel", "listeClient", "addPersonnel", "addClient", "editPersonnel", "editClient");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "listePersonnel";
}

switch($action) {
	case "listePersonnel":
		$listArray = Employe::getAll();
		$listParams = array("title" => "Liste du personnel",
							"keys" => array("id", "nom", "prenom", "is_veterinaire", "id_national"));
		$editLink = "editPersonnel";
		include 'view/list.php';
		break;
	case "listeClient":
		$listArray = Client::getAll();
		$listParams = array("title" => "Liste des clients",
							"keys" => array("id", "nom", "prenom", "num_tel"));
		$editLink = "editClient";
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
	case "editPersonnel":
		$employe = new Employe();
		$formConf = $employe->getForm();
		include 'view/form.php';
		break;
	case "editClient":
		$client = new Client();
        $formConf = $client->getForm();
        include 'view/form.php';
		break;
	default:
		include 'view/404.php';
		break;
}

