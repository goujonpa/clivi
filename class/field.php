<?php

class Field {
	protected $name;
	protected $value;
	public function __construct($name, &$value) {
		$this->name = $name;
		$this->value =& $value;
	}

	public function html() {
		return '<div class="form-group">
    <label for="form'.$this->name.'">'.ucfirst($this->name).'</label>
    <input type="text" class="form-control" name="'.$this->name.'" value="'.$this->value.'" >
  </div>';
	}

}