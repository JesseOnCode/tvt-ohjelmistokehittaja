<?php

class Auto {
    public $merkki;
    public $malli;
}

$auto1 = new Auto();

$auto1->merkki = "BMW";
$auto1->malli = "X5";

echo "Auton merkki on: " . $auto1->merkki . "<br>";
echo "Auton malli on: " . $auto1->malli;

?>