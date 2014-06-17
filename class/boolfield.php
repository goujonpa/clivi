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
        $this->value = $POST[$this->name];
        if (!is_bool($this->value))
            return false;
        return true;
    }
}

