<?php

// Tablica 2-wymiarowa o wymiarze w*k wypełnić tak, aby środkowy wiersz lub dwa środkowe wiersze były wypełnione 0, pozostałe 5

$tab = array();
$tab[$w][$k];
$w = 4;
$k = 10;

for ($i = 0; $i < $w; $i++) {
    for ($j = 0; $j < $k; $j++) {
        if ($i == ($w - 1) / 2)
            $tab[$i][$j] = 0;
        else if ($i == $w / 2 || $i == ($w - 2) / 2)
            $tab[$i][$j] = 0;
        else
            $tab[$i][$j] = 5;
        print($tab[$i][$j] . "\t");
    }
    print("<br>");
}
