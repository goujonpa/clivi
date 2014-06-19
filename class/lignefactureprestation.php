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
        "prestation" => array(
            "t" => "ForeignField"
        ),
        "quantite" => array(
            "i" => -1
        ),
        "facture" => array(
            "i" => -1
        ),
        "remise" => array(
            "i" => 10
        ));

}