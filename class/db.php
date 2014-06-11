<?php

class Db
{
	public $db;

	public function __construct ()
	{
		try
		{
			$this->db = new PDO('pgsql:host=localhost;dbname=nf17p110', 'nf17p110', 'gXYc4mPg');
		}
		catch (Exception $e)
		{
        	die('Erreur : ' . $e->getMessage());
		}
	}

}