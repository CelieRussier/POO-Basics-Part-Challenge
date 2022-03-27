<?php

class Car {
    private int $nbWheels;

    private int $currentSpeed;

    private int $energyLevel;

    public function __construct(private string $color, private int $nbSeats, private string $energy) {}

    public function forward () {
        $this->currentSpeed += 15;
        return "The car is accelerating and reaching now " . $this->currentSpeed . "km/h";
    }
    public function brake () {
        while ($this->currentSpeed > 0) { $this->currentSpeed-=5;}
        return "The car is braking and reducing speed to " . $this->currentSpeed . "km/h";
    }

    public function start() {
        $this->currentSpeed = 0;
        $this->energyLevel = 10;
    }

    public function getNbWheels() {
        return $this->nbWheels;
    }

    public function getCurrentSpeed () {
        return $this->currentSpeed;
    }

    public function getColor() {
        return $this->color;
    }

    public function getNbSeats() {
        return $this->nbSeats;
    }

    public function getEnergy () {
        return $this->energy;
    }

    public function getEnergyLevel () {
        return $this->energyLevel;
    }

}

