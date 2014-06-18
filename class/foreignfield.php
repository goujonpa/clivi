<?php

class ForeignField {
	protected $name;
	protected $value;
	protected $primary;
	protected $choices;

	public function __construct($name, &$value, $primary=false) {
		$this->name = $name;
		$this->value =& $value;
		$this->primary = $primary;
		$cl = ucfirst($name);
		$this->choices = $cl::getAll();
	}

	public function html($form) {
		// Todo, if isset($_POST[$this->name]) && !$this->validate() => Show a error msg explanation for this line.
		$disabled = "";

		if($this->primary && $form->action == "Ajouter") { return ""; }
		if($this->primary && $form->action == "Modifier") { $disabled = "disabled"; }

		$html = '<div class="form-group">
    <label for="form'.$this->name.'">'.ucfirst($this->name).'</label>
    <select class="form-control" name="'.$this->name.'">';
    	foreach ($this->choices as $value) {
    		if($this->value == $value->{$value->_primaryAttr}()) { $selected = "selected"; } else { $selected = ""; }
    		$html .= "<option value=".$value->{$value->_primaryAttr}()." ".$selected." >".$value->str()."</option>";
    	}

		$html.= '</select>
  </div>';
  		return $html;
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

}
