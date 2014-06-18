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
		$list = Rdv::getList("Liste des Rendez Vous");
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
		$list = Prestation::getList("Liste des Prestations");
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

