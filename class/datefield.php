<?php

class DateField extends Field
{
    public function html() {
        // Todo, if isset($_POST[$this->name]) && !$this->validate() => Show a error msg explanation for this line.
        $html = '<div class="form-group">
                    <label for="form'.$this->name.'">'.$this->label.'</label>
                    <input type="date" class="form-control" name="'.$this->name.'" value="'.$this->value.'"> 
                </div>';
        return $html; 
    }

    public function validate()
    {
        $this->value = $_POST[$this->name];
        return true;
    }

    public function show() {
        return $this->value; 
    }
}
