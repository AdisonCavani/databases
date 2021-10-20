<?php

// Tablice o rozmiarze losowym od 10-30 wypełnij tak, aby na pierwszym miejscu była liczba 2, a każdy następny element był o 3 większy od poprzedniego

$tab = array();

for ($i = 0, $l = 2; $i < rand(10, 30); $i++, $l += 3)
{
    $tab[$i] = $l;
}

for ($i = 0; $i < sizeof($tab); $i++)
{
    print($tab[$i] . "<br>");
}
