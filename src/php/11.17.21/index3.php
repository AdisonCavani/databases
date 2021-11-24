<?php

// Tablicę dwu-wymiarową, gdzie liczba wierszy i kolumn jest liczbą losową z przedziału od 4 - 10 wypełnij tak, aby druga kolumna i przedostatnia kolumna były zerami, a na pozostałych miejscach liczba 5

$tab = array();

$col = rand(4, 10);
$row = rand(4, 10);

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        if ($j == 1)
            $tab[$i] = 0;
        else if ($col - 2 == $j)
            $tab[$i] = 0;
        else
            $tab[$i] = 5;
        echo $tab[$i] . " ";
    }
    echo "<br>";
}
