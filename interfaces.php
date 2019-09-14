<?php

// interface is exactly like abstract where u can define the method but cannot implement a method ;
// u must declare a class for the implemetation;
interface classinterfaces{
    public function charge();

}
class testclass implements classinterfaces{
    public function charge()
    {
        echo "i am going to charge my device\n";
        echo "hi";
        echo "hello";
    }
}
$interobj = new testclass();
$interobj->charge();
?>C:\Users\Asus\PhpstormProjects\untitled4\abstract_class.php