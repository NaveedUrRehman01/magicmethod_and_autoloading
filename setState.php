<?php
class Test{

    private $value1;
    private $value2;
    public function __construct()
    {
        $this->value1 = 100;
        $this->value2 = "hello";
    }

    public static function __set_state(array $array)
       {
        $setobj = new Test();
        $setobj->value1 = $array['value1'];
        $setobj->value2 = "my".$array['value2'];
        return $setobj;
       }

}
$testobj = new Test();
 $strcode = var_export($testobj,true);
 eval($strcode.";");
