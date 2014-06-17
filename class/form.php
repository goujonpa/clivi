<?php

class Form {
	protected $object;
	protected $action;

	public function __construct(&$obj) {
		$this->object =& $obj;
		$this->fields = $this->object->getFields();

		// Update or Insert
		if($this->object->{$this->object->primaryAttr}()) {
			$this->action = "Modifier";
		} else {
			$this->action = "Ajouter";
		}

		// Check posted values
		if(isset($_POST["submitForm"])) {
			$post = true;
			// Apply validators
			$success = true;
			foreach($this->fields as $field) {
				$success = $success && $field->validate();
			}

			// If all validators ok, commit
			if($success) {
				if($this->action == "Modifier") {
					$this->object->update();
				} else {
					$this->object->insert();
				}
			}
		} else {
			$post = false;
		}
	}

	public function getTitle() {
		return $this->action." un ".get_class($this->object);
	}

	public function getSubmitText() {
		return $this->action;
	}

	public function getFields() {
		return $this->fields;
	}

	public function getAlerts() {
		return '<p class="bg-danger">Code en cours d\'implémentation, l\'enregistrement n\'a pas été ajouté !</p>';
	}

}