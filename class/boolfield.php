<?
class BoolField extends Field
{

    public function html($form) {
        $html = '<div class = "form-group">
                    <label for = "form'.$this->name.'">'.ucfirst($this->name).'</label>
                    <input type = "checkbox" class="form-control" name = "'.$this->name.'" value ="'.$this->value.'">
                </div>';
        return $html; 
    }

    public function validate()
    {
        if (isset($_POST[$this->name]))
            $this->value = $_POST[$this->name];
        else
            $this->value = NULL;
        return true;
    }
}

