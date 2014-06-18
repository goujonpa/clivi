<?php
/*
	Controller Rdv, handle CRUD for meeting.
*/

// Implemented actions
$actions = array("liste", "add", "edit", "listePrestation", "addPrestation", "editPrestation");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "liste";
}

switch($action) {
	case "liste":
		$listArray = Rdv::getAll();
		$listParams = array("title" => "Liste des rendez-vous",
							"keys" => array("id", "animal", "employe", "date", "duree"));
		$editLink = "edit";
		include 'view/list.php';
		break;
	case "add":
		$rdv = new Rdv();
		$formConf = $rdv->getForm();
		include 'view/form.php';
		break;
	case "edit":
		$rdv = new Rdv();
        $rdv->select($_GET['id']);
        $formConf = $rdv->getForm();
        include 'view/form.php';
		break;
	case "listePrestation":
		$listArray = Prestation::getAll();
		$listParams = array("title" => "Liste des prestations",
							"keys" => array("id", "description", "type", "prix"));
		$editLink = "editPrestation";
		include 'view/list.php';
		break;
	case "addPrestation":
		$prestation = new Prestation();
		$formConf = $prestation->getForm();
		include 'view/form.php';
		break;
	case "editPrestation":
		$prestation = new Prestation();
        $prestation->select($_GET['id']);
        $formConf = $prestation->getForm();
        include 'view/form.php';
		break;
	default:
		include 'view/404.php';
		break;
}

