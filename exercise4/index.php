<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require './Beer.php';

$duvel=new Beer("blonde",3.5,'Duvel',8.5,'cold');
echo $duvel->getName();
echo $duvel->getInfo();
echo $duvel->getAlcoholpercentage();
echo $duvel->getColor()."</br>";
$duvel->setColor("light");
echo $duvel->getColor()."</br>";
echo $duvel->getBeerInfo();

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/