<?php

class Bicycle 
 {
    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;

    private function forward()
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    private function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "<br>I'm stopped !";
        return $sentence;
    }

    private function dump() 
    {
        var_dump($this);
    }

    public function getColor() : string 
    {
        return $this->color;
    }

    public function setColor(string $color) : void 
    {
        $this->color = $color;
    }

    public function getCurrentSpeed() : int 
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed ($currentSpeed) : void 
    {
        if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
        }
    
    }

    public function __construct(string $color)
    {
    $this->color = $color;    
    }
 }