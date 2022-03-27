<?php
require 'car.php';
require 'bicycle.php';

$tornado = new Bicycle('black');
$rockrider = new Bicycle('yellow');
echo "Tornado is " . $tornado->getColor();
echo "<br>";
echo "Rockrider is " . $rockrider->getColor();
echo "<br>";

echo "<br>";

$bartCar = new Car('yellow', 4, 'diesel');
$bartCar->start();
$bartCar->forward();
echo "Bart's car is driving at " . $bartCar->getCurrentSpeed() . " km/h";
echo "<br>";
echo "Bart's car level of " . $bartCar->getEnergy() . " is at " . $bartCar->getEnergyLevel() . "/10";
$bartCar->forward();
echo "Bart's car is driving at " . $bartCar->getCurrentSpeed() . " km/h";
echo "<br>";
echo $bartCar->brake();
echo "<br>";
echo $bartCar->getCurrentSpeed();