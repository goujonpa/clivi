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
        $ret = true;
        $this->value = $_POST[$this->name];
        $year = substr($this->value, 0, 4);
        $month = substr($this->value, 5, 2);
        $day = substr($this->value, 8, 2);
        $today = getdate();
        if ($year < $today[year]) {
            $ret = false;
        } else if ( $year == $today[year] && $month < $today[mon] ){
            $ret = false;
        } else if ( $year == $today[year] && $month == $today[mon] && $day < $today[day]){
            $ret = false;
        }
        return ret;
    }

    public function show() {
        $year = substr($this->value, 0, 4);
        $month = substr($this->value, 5, 2);
        $day = substr($this->value, 8, 2);
        $html = $day.'-'.$month.'-'.$year;
        return $html; 
    }
}
