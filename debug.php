<?php
include 'abstract_class.php';
class Student{

    private $id;
    public $name;

    public function __construct($id,$name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function __debugInfo()
    {
        return[
            'student id'=> $this->id * 2,
            'address'=>'peshawar'
        ];
    }
}
$stuobj = new Student(2,"ihsan");
var_dump($stuobj);