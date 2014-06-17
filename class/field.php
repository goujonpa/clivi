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
    <label for="form'.$name.'">'.ucfirst($name).'</label>
    <input type="text" class="form-control" name="'.$name.'" >
  </div>';
	}

}