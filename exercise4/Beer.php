<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require './Beverage.php';
class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholpercentage;

    public function __construct($color,$price,$name, $alcoholpercentage,$temperature='cold'){
        parent:: __construct($color,$price,$temperature='cold');
        $this->name=$name;
        $this->alcoholpercentage=$alcoholpercentage;
    }

    public function getAlcoholpercentage()
    {
        return $this->alcoholpercentage." %</br>";
    }
    public function getName()
    {
        return $this->name."</br>";
    }
    private function beerInfo()
    {
        return "Hi i'm {$this->name} and have an alochol percentage of {$this->alcoholpercentage} % and I have a {$this->getColor()} color.";
    }
    public function getBeerInfo()
    {
        return $this->beerInfo();
    }
}