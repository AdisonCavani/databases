<?php

// Ala w pierwszy dzien dostala 5 zl. W dni parzyste, kwota z poprzedniego dnia wzrasta o 2 zl, a w dni nieparzyste kwota z poprzedniego dnia wzrasta 3 zl. Wykonaj zestawienie oszczednosci przez okres 30 dni.
$k = 5;
$d = 5;

for ($i = 1; $i <= 30; $i++)
{
    if ($i % 2 == 0)
    {
        $k += $d;
        print("W dniu $i Ala otrzymała $d zł i ma $k zł.<br>");
        $d += 3;
    }
    else
    {
        $k += $d;
        print("W dniu $i Ala otrzymała $d zł i ma $k zł.<br>");
        $d += 2;
    }
}