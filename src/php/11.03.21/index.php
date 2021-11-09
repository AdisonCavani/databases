<?php
// Tablice 2 wymiarową, 5x10 wypełnij tak, aby w pierwszej i ostatniej kolumnie były liczby losowe 2-cyfowe, na pozostałych miejscach 0

$tab = array();
$tab[$w][$k];
$w = 5;
$k = 10;


for ($i = 0; $i < $w; $i++)
{
    for ($j = 0; $j < $k; $j++)
    {
        if ($j == 0 || $j == 9)
            $tab[$i][$j] = rand(10, 99);
        else
            $tab[$i][$j] = 0;
        print($tab[$i][$j] . "\t");
    }
    print("<br>");
}
