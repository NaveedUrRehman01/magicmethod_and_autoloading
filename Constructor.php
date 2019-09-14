<?php
class Student
{
    public $fname;
    public $lname;
    public $age;

    public function __construct($fname,$lname,$age)
    {
        $this->firstname =$fname;
        $this->lastname = $lname;
        $this->age = $age;
            }
            public function showdetails(){
        echo $this->firstname."\n";
        echo $this->lastname."\n";
        echo $this->age."\n";

           }
    function __destruct()
    {
     echo "hello ths  is destruct";
    }
}

$studentobj = new Student("naveed","afridi",21);
$studentobj-> showdetails();
unset($studentobj);

