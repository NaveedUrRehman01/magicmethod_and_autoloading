<?php
class iinvoke{
//invoke method is called when we use obj is a function ;
    public function __invoke()
    {

        echo "this is invoke method ";
    }

}
$invobj = new iinvoke;
$invobj();
//and callable is used when we call the object and it's true so we say that object is a callable;
var_dump(is_callable($invobj));