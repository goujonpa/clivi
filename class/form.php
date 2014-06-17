<?php

class Form {
	protected $object;
	public function __construct(&$obj) {
		$this->object =& $obj;
		$this->fields = $this->object->getFields();
		// TODO: Check if there is $_POST data (and if yes, insert or update the corresponding row)
	}

	public function getTitle() {
		return "Ajouter un ".get_class($this->object);
	}

	public function getSubmitText() {
		return "Ajouter";
	}

	public function getFields() {
		return $this->fields();
	}

}