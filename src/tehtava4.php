<?php

class Opiskelija {
    public $nimi;
    public $ryhma;

    public function esittele() {
       echo "Opiskelijan nimi on: " . $this->nimi . " ja ryhmä on " . $this->ryhma . ".<br>"; 
    }
}

$opiskelija1 = new Opiskelija();
$opiskelija2 = new Opiskelija();

$opiskelija1->nimi = "Jesse";
$opiskelija1->ryhma = "TVT25";

$opiskelija2->nimi = "Joonas";
$opiskelija2->ryhma = "TVT25";

$opiskelija1->esittele();
$opiskelija2->esittele();
?>