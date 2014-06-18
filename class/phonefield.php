<?php

class PhoneField extends Field
{
    public function html() {
        // Todo, if isset($_POST[$this->name]) && !$this->validate() => Show a error msg explanation for this line.
        $html = '<div class="form-group">
                    <label for="form'.$this->name.'">'.$this->label.'</label>
                    <input type="tel" name="'.$this->name.'" value="'.$this->value.'"> 
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
        }
        return false;
    }

    public function show() {
        $num = $this->value;
        $html = "";
        $html .= substr($num, 0, 2);
        for($i = 1; $i < 5; $i++) {
            $html .= ".";
            $html .= substr($num, 2*$i, 2);
        }
        return $html;
    }
}
