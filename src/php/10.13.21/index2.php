<?php

$tab = array();
$suma;

for ($i = 0; $i <= 5; $i++)
{
    $tab[$i] = rand(1, 49);
    print($tab[$i] . "<br>");
    $suma += $tab[$i];
}

print("<br>Suma wynosi: $suma");
