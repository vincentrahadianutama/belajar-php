<?php
class dealerCar{
    public $nameCar;
    public $capacity;

    function buyCar(){
        echo "Mobil tersedia, silakan beli.";
    }
    function typeCar(){
        echo "Tersedia pilihan tipe mobil";
    }
}
$buy = new dealerCar();
$buy->buyCar();
echo "<br>";
$buy->nameCar = "Honda Civic 2023";
echo "<br>";
$buy->capacity = 2;
echo "Berhasil membeli ".$buy->nameCar." dengan kapasitas ".$buy->capacity;