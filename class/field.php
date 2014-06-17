<?php

class Field {
	protected $name;
	protected $value;
	public function __construct($name, &$value) {
		$this->name = $name;
		$this->value =& $value;
	}

	public function html() {
		// Todo, if isset($_POST[$this->name]) && !$this->validate() => Show a error msg explanation for this line.
		return '<div class="form-group">
    <label for="form'.$this->name.'">'.ucfirst($this->name).'</label>
    <input type="text" class="form-control" name="'.$this->name.'" value="'.$this->value.'" >
  </div>';
	}

	/*
		Load the data from $_POST
		and return false, if data is not valid !
	*/
	public function validate() {
		$this->value = $_POST[$this->name];
		return true;
	}

}
