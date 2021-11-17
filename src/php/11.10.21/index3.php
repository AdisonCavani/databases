<?php

$produkty = array("Piwo" => 5, "Wino" => 50, "Wódka" => 15, "Spirytus" => 15);
$ilosc = array();

for ($i = 0; $i < sizeof($produkty); $i++) {
    $ilosc[$i] = rand(1, 20);
}

$i = 0;
foreach ($produkty as $produkt => $value) {
    echo "Produkt: " . $produkt . ". Cena: " . $value . " pln. Ilość: " . $ilosc[$i] . "<br>";
    $i++;
}
