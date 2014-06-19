<?php

class LigneFactureProduit extends LigneFacture
{
	public $_specialFields = array(
        "ordonnance" => array(
            "i" => -1
        ),
        "produit" => array(
            "t" => "ForeignField"
        ),
        "prestation" => array(
            "i" => -1
        ),
        "facture" => array(
            "i" => -1
        ),
        "remise" => array(
            "i" => 10
        ));
}