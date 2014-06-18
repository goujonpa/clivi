<?
class BoolField extends Field
{

    public function html() {
        $html = '<div class = "checkbox">
                    <label for = "form'.$this->name.'">
                    <input type = "checkbox" name = "'.$this->name.'" value ="'.$this->value.'"> '.ucfirst($this->name).'
                    </label>
                </div>';
        return $html; 
    }

    public function validate()
    {
        if (isset($_POST[$this->name]))
            if ($_POST[$this->name] == 'on')
                $this->value = true;
            else
                $this->value = false;
        return true;
    }
}

