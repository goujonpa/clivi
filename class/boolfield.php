<?
class BoolField extends Field
{

    public function html() {
        $html = '<div class = "form-group">
                    <label for = "form'.$this->name.'">'.ucfirst($this->name).'</label>
                    <input type = "checkbox" class="form-control" name = "'.$this->name.'" value ="'.$this->value.'">
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

