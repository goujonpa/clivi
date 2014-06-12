<?php

class Db
{
	public $db;

	public function __construct ()
	{
		try
		{
			$this->db = new PDO('pgsql:host=tuxa.sme.utc;dbname=nf17p110', 'dbnf17p110', 'gXYc4mPg');
		}
		catch (Exception $e)
		{
        	die('Erreur : ' . $e->getMessage());
		}
	}
}