<?php

class PriceField extends Field
{
    public function html() {
        // Todo, if isset($_POST[$this->name]) && !$this->validate() => Show a error msg explanation for this line.
        $html = '<div class="form-group">
                    <label for="form'.$this->name.'">'.$this->label.'</label>
                    <input type="number" class="form-control" name="'.$this->name.'" value="'.$this->value.'"> 
                </div>';
        return $html; 
    }

    public function validate()
    {
 
        if (isset($_POST[$this->name]))
        {
            $this->value = $_POST[$this->name];
            if ($this->value > -1) {
                return true;
            }
        }
        return false;
    }

    public function show() {
        $prix = $this->value;
        $html = (string)$prix;
        $html .= " €";
        return $html;
    }
}
