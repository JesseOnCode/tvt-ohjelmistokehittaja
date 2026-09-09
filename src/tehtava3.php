<?php

class Opiskelija {
    public $nimi;
    public $ryhma;
}

$opiskelija1 = new Opiskelija();
$opiskelija2 = new Opiskelija();

$opiskelija1->nimi = "Jesse";
$opiskelija1->ryhma = "TVT25";

$opiskelija2->nimi = "Joonas";
$opiskelija2->ryhma = "TVT25";

echo "Opiskelija1: " . $opiskelija1->nimi . " (" . $opiskelija1->ryhma . ")<br>";
echo "Opiskelija2: " . $opiskelija2->nimi . " (" . $opiskelija2->ryhma . ")";
?>