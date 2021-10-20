<?php


class Car {
    public $id;
    public $license;
    public $driver;
    public $passengers;

    public function __construct($license,$driver){
        $this->license=$license;
        $this->driver=$driver;
        
    }

    public function printDataCar(){
        echo "license is: ".$this->license.", the conductor is: ". $this->driver->name.
        " and the document is: ". $this->driver->document ."<br>";
    }
}