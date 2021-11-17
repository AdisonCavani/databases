<?php

// Utwórz tablicę asocjacyjną złożoną z 6 rekordów, gdzie kluczami są nazwy kwiatów, natomiast wartościami cena za jedną sztukę

// Utwórz tablicę 6 elementową z wartościamim liczby losowe z przedziału od 1 - 10. Wykonaj zestawienie postaci nazwa kwiatka, cena jednostkowa, ilość sztuk i cena całościowa

$produkty = array("Róża" => 18, "Irys" => 25, "Tulipan" => 15, "Słonecznik" => 10, "Hiacynt" => 20, "Stokrotka" => 5);
$ilosc = array();
$suma;

for ($i = 0; $i <= 5; $i++) {
    $ilosc[$i] = rand(1, 10);
}

$i = 0;
foreach ($produkty as $produkt => $cena) {
    echo "Produkt: " . $produkt . ", cena (szt): " . $cena . " pln, ilość sztuk: " . $ilosc[$i] . "<br>";
    $suma += $cena * $ilosc[$i];
    $i++;
}

echo "<br>Razem: " . $suma . " pln";
