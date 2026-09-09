<?php

class Kirja {
public $nimi;
public $kirjailija;
public $sivumaara;
}

$kirja1 = new Kirja;

$kirja1->nimi = "Python";
$kirja1->kirjailija = "Python-kirjailija";
$kirja1->sivumaara = "250";

echo "Kirjan nimi: " . $kirja1->nimi . "<br>";
echo "Kirjan kirjailija: " . $kirja1->kirjailija . "<br>";
echo "Kirjan sivumäärä: " . $kirja1->sivumaara; 
?>