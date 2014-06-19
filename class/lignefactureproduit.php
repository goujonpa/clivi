<?php

class LigneFactureProduit extends LigneFacture
{
	public $_specialFields = array(
        "ordonnance" => array(
            "it" => -1
        ),
        "prestation" => array(
            "i" => -1
        ));
}