<?php
class Test{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function __toString()
    {
        return "my name is".$this->name;
    }

}
$strobj = new Test(" naveed");
 echo $strobj;