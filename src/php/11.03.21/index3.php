<?php

// Tablicę 2-wymiarową 10x10 wypełnij tak, aby w komórce 0x0 była liczba 2, a każda nastepna komórka idąc po wierszach ma o 3 większą wartość niż komórka poprzednia

$tab = array();
$tab[$w][$k];
$w = 10;
$k = 10;
$a = 2;

for ($i = 0; $i < $w; $i++) {
    for ($j = 0; $j < $k; $j++, $a += 3) {
        $tab[$i][$j] = $a;
        print($tab[$i][$j] . "\t");
    }
    print("<br>");
}
