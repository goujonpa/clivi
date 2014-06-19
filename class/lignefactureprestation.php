<?php

class LigneFacturePrestation extends LigneFacture
{
	public $_specialFields = array(
        "ordonnance" => array(
            "i" => -1
        ),
        "produit" => array(
            "i" => -1
        ),
        "quantite" => array(
            "i" => -1
        ));

}