<?php

class Form {
	protected $object;
	public $action;
	protected $error = null;

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
				try {
					if($this->action == "Modifier") {
						$this->object->update();
					} else {
						$this->object->insert();
					}
				} catch (Exception $e) {
					$this->error = $e->getMessage();
				}
			} else {
				$this->error = "Tout les conditions de validations de formulaire ne sont pas passés.";
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
		if($this->error) {
			return '<p class="bg-danger">'.$this->error.'</p>';
		} else {
			if(isset($_POST["submitForm"])) {
				return '<p class="bg-success">L\'opération a réussi avec succès.</p>';
			}
		}
	}

}