<?php

class Field {
	protected $name;
	protected $value;
	protected $primary;
	public $label;

	public function __construct($name, &$value, $primary=false) {
		$this->name = $name;
		$this->value =& $value;
		$this->primary = $primary;
		$this->label = ucfirst($name);
	}

	public function html($form) {
		// Todo, if isset($_POST[$this->name]) && !$this->validate() => Show a error msg explanation for this line.
		$disabled = "";

		if($this->primary && $form->action == "Ajouter") { return ""; }
		if($this->primary && $form->action == "Modifier") { $disabled = "disabled"; }

		return '<div class="form-group">
    				<label for="form'.$this->name.'">'.ucfirst($this->name).'</label>
    				<input type="text" class="form-control" name="'.$this->name.'" value="'.$this->value.'" '.$disabled.'>
  				</div>';
	}

	/*
		Load the data from $_POST
		and return false, if data is not valid !
	*/
	public function validate() {

		// On ne peut pas changer la valeur de la clef primaire
		if($this->primary && $this->value) {
			return true;
		}

		$this->value = $_POST[$this->name];
		return true;
	}

	public function show() {
		return $this->value;
	}

	public function getLabel() {
		return $this->label;
	}

}
