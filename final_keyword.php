<?php

//here if v use a final keyword with class or method in class so the child class cannot be inherit from parent;
 class A
{
 public function hello(){
    echo "hello werold";
}
}
class B extends A{
    public function hello()
    {
        echo "hi";
    }
}
$aobj = new A();
$aobj->hello();
$aobj->hello();
?>