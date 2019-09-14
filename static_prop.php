<?php
class student
{
    public $name;
    private $id;
    public static $scount = 0;

    public function __construct($name, $id)
    {
    self::$scount +=1;
     $this->name;
     $this->id;
    }
    public static function staticmethod(){

        echo "hello static method\n";
    }
}
 echo student::$scount."\n";
echo student::staticmethod();

$studobj = new student("Khan1",1);
$studobj = new student("khan2",2);
$studobj = new student("khan3",3);
$studobj = new student("khan4",4);
$studobj = new student("khan5",5);
$studobj = new student("khan6",6);
$studobj = new student("khan7",7);
$studobj = new student("khan8",8);
$studobj = new student("khan9",9);
$studobj = new student("khan10",10);

echo student::$scount;
?>