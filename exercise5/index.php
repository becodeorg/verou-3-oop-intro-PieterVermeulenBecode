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
    function getInfo()
    {
        return "This beverage is ".$this->temperature." and ".$this->color."</br>";
    }
    public function getProperty($property)
    {
        return $this->$property;
    }
    public function setProperty($property,$value)
    {
        $this->$property=$value;
        return $this->$property;
    }
}
$cola=new Beverage("black",2);
echo $cola->getInfo();
echo $cola->getProperty("temperature")."</br>";
echo $cola->getProperty("price")."€ </br>";
echo $cola->setProperty("price",2.5)."€ </br>";
/* EXERCISE 5
Copy the class of exercise 1.
TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/