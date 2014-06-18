<?php
/*
	Controller Rdv, handle CRUD for meeting.
*/

// Implemented actions
$actions = array("listeRdv", "addRdv", "editRdv", "listePrestation", "addPrestation", "editPrestation");

// Check action is correct
if(!in_array($action, $actions)) {
	$action = "liste";
}

switch($action) {
	case "listeRdv":
		$list = Rdv::getList("Liste des Rendez Vous");
		include 'view/list.php';
		break;
	case "addRdv":
		$rdv = new Rdv();
		$formConf = $rdv->getForm();
		include 'view/form.php';
		break;
	case "editRdv":
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

