<?php

class PhoneField extends Field
{
    public function html() {
        $html = '<div class = "form-group">
                    <label for = "form'.$this->name.'">
                    <input type = "tel" name = "'.$this->name.'" value ="'.$this->value.'"> '.$this->label.'
                    </label>
                </div>';
        return $html; 
    }

    public function validate()
    {
 
        if (isset($_POST[$this->name]))
        {
            $_POST[$this->name] = htmlspecialchars($_POST[$this->name]); 
            if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST[$this->name]))
                {
                    $this->value = $_POST[$this->name];
                    return true;
                }
        return false;
    }

}
