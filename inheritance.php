<?php

class vehicle{
    private $Noofwheels;
    Private $color;
    private $fuel;
    private $speed;

    public function getColor($blue)
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        echo "the color is ".$this->color."\n";
    }
    public function getFuel()
    {
        return $this->fuel;
    }


    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
        echo "the fuel is ".$this->fuel."\n";
    }
    public function getNoofwheels()
    {
        return $this->Noofwheels;

    }

    public function setNoofwheels($Noofwheels)
    {
        $this->Noofwheels = $Noofwheels;
        echo "no of wheels are ".$this->Noofwheels."\n";
    }
    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
        echo "the speed is ".$this->speed."\n";
    }

    public function start(){
    echo "vehicle is starting "."\n";
    }
    public function accelerate(){
    echo "vehicle is accelerating "."\n";
    }
    public function brake(){
        echo "vehicle is stopping"."\n";

    }

}
class transportaion extends vehicle{
    private $umberofdoors;
    private $loadcapacity;

    public function getLoadcapacity()
    {
        return $this->loadcapacity;
    }

    public function setLoadcapacity($loadcapacity)
    {
        $this->loadcapacity = $loadcapacity;
    }
    public function getUmberofdoors()
    {
        return $this->umberofdoors;
    }

    public function setUmberofdoors($umberofdoors)
    {
        $this->umberofdoors = $umberofdoors;
    }
}
class pessangervehicle extends vehicle{
    private $pessangerseats;

    public function getPessangerseats()
    {
        return $this->pessangerseats;
    }
    public function setPessangerseats($pessangerseats)
    {
        $this->pessangerseats = $pessangerseats;
    }
}
class truck extends transportaion{
    private $sixeofcontainers;

    public function getSixeofcontainers()
    {
        return $this->sixeofcontainers;
    }
    public function setSixeofcontainers($sixeofcontainers)
    {
        $this->sixeofcontainers = $sixeofcontainers;
    }
}
class van extends transportaion{
    private $numberofboxes;

    public function getNumberofboxes()
    {
        return $this->numberofboxes;
    }

    public function setNumberofboxes($numberofboxes)
    {
        $this->numberofboxes = $numberofboxes;
    }
}

class car extends pessangervehicle{
    private $noofdoors;

    public function getNoofdoors()
    {
        return $this->noofdoors;
    }

    public function setNoofdoors($noofdoors)
    {
        $this->noofdoors = $noofdoors;
    }
}
class bike extends pessangervehicle{
    private $saddleheight;

    public function getSaddleheight()
    {
        return $this->saddleheight;
    }

    public function setSaddleheight($saddleheight)
    {
        $this->saddleheight = $saddleheight;
    }
    public function brake()
    {
        //here v use overriding
        echo "the brake is from bike"."\n";
    }
    public function accelerate()
    {

        echo "the acclerate is from bike"."\n";
    }
}

$carobj = new bike();
$carobj->setColor("blue");
$carobj->setFuel("petrol");
$carobj->setSpeed("100 Km/h");
//$carobj->setNoofdoors(4);
$carobj->setNoofwheels(4);
$carobj->setPessangerseats(5);

$carobj->start();
$carobj->accelerate();
$carobj->brake();


?>