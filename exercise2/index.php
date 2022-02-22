<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require './exercise2.php';

$duvel=new Beer("blonde",3.5,'Duvel',8.5,'cold');
echo $duvel->name."</br>";
echo $duvel->getInfo();
echo $duvel->getAlcoholpercentage();
echo $duvel->alcoholpercentage." %</br>";
echo $duvel->color."</br>";
$karmeliet=new Beverage('blonde',0.5,'cold');
$karmeliet->getAlcoholpercentage();
