<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;

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
}

$cola=new Beverage("black",2);
echo $cola->getInfo();
echo $cola->temperature;
/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/