<?php

class Form {
	protected $object;
	public function __construct() {

	}

	public function setObject(&$obj) {
		$this->object =& $obj;
	}

	public function getTitle() {
		return "Ajouter un ".get_class($this->object);
	}

	public function getSubmitText() {
		return "Ajouter";
	}

	public function getFields() {
		return Array();
	}

}