<?php

function autoload($className)
{
    if (file_exists("./sdc/{$className}.php")) 
    { 
        require "./sdc/{$className}.php";
    }
} 
spl_autoload_register("autoload");


function drive(DriveInterface $typ)
{ 
    return $typ->drive("Munich");
}


$bmwM3 = new Car("BMW", "M3", 80000, 350);
$bugatti = new SuperCar("Bugatti", "Pure Sports", 3250000, 1500, "High!");
$bmwX3 = new SUV("BMW", "X3", 54000, 210, 45);
$ducati = new Bicycle("Ducati", "XXX", 6000, 2);

var_dump($bmwM3);
print "<br>";
var_dump($ducati);
print "<br>";
var_dump($bmwX3);
print "<br>";
var_dump($bugatti);
print "<br>";
var_dump(drive($bmwM3));
print "<br>";
var_dump(drive($bugatti));
print "<br>";
var_dump(drive($bmwX3));
print "<br>";
var_dump(drive($ducati));

?>

