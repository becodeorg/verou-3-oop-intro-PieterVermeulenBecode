<?php

require './exercise2.php';

$duvel=new Beer("blonde",3.5,'cold','Duvel',8.5);
echo $duvel->name."</br>";
echo $duvel->getInfo();
echo $duvel->getAlcoholpercentage();
echo $duvel->alcoholpercentage."</br>";
echo $duvel->color."</br>";
