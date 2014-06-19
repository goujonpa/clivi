<?php

class TypeField extends Field
{
    public function html() {
        // Todo, if isset($_POST[$this->name]) && !$this->validate() => Show a error msg explanation for this line.
        $html = '<div class="form-group">
                    <label for="form'.$this->name.'">'.$this->label.'</label>
                    <select class="form-control" name="'.$this->name.'">
                        <option value="consultation" '.($this->value == "consultation" ? "selected" : "").'>Consultation</option>
                        <option value="intervention" '.($this->value == "intervention" ? "selected" : "").'>Intervention</option>
                    </select>
                </div>';
        return $html;
}

    public function validate()
    {
        $this->value = $_POST[$this->name];
        return true;
    }

    public function show() {
        if ($this->value == 'M') {
            $html = 'Consultation';
        } else {
            $html = 'Intervention';
        }
        return $html; 
    }
}
