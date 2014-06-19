<?php

class LigneFacturePrestation extends LigneFacture
{
	public $_specialFields = array(
        "ordonnance" => array(
            "it" => -1
        ),
        "produit" => array(
            "i" => -1
        ));

}