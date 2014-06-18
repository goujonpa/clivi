<?php

class BoolField extends Field
{


    public function html($form) {
        if($this->value) { $checked="checked"; } else { $checked = false; }
        $html = '<div class="checkbox"> <label> <input type="checkbox" name="'.$this->name.'" '.$checked.'>'.ucfirst($this->name).'</label> </div>';
        return $html; 
    }

    public function validate()
    {
        if (isset($_POST[$this->name])) 
        {
            $this->value = 1;
        }
        else {
            $this->value = 0;
        }
        return true;
    }
}

