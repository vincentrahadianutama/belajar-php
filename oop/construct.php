<?php
class Car{
    public $nameCar;//civic
    public $typeCar;//sport
    public $colorCar;

    public function __construct($nameCar, $typeCar, $colorCar){
        $this->nameCar=$nameCar;
        $this->typeCar=$typeCar;
        $this->colorCar=$colorCar;
    }
    public function detailCar(){
        echo "Mobil saat ini adalah ".$this->nameCar." tipe mobilnya ".$this->typeCar." warna mobilnya adalah ".$this->colorCar;
    }
}
$car = new Car("civic turbo","sports","greentea");
$car->detailCar();
?>
