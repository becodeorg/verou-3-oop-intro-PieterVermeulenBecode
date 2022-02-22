<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct($color,$price,$temperature='cold')
    {
        $this->color=$color;
        $this->price=$price;
        $this->temperature=$temperature;
    }
    public function getInfo()
    {
        return "This beverage is ".$this->temperature." and ".$this->color."</br>";
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor(string $newColor)
    {
        $this->color=$newColor;
    }
}