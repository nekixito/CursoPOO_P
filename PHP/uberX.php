<?php
require_once('car.php');

class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license, $driver);
        $this->brand=$brand;
        $this->model=$model;
        
    }

    public function printDataCar() {
        if ($this->passenger == 4) {
        parent::PrintDataCar();
        echo" 
            Modelo: $this->model
            Marca: $this->brand 
            <br>
        ";}else{
            echo "<br>";;
        }
    }
}


?>