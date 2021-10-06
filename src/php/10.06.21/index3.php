<!-- 3. Wykonaj zestawienie oszczędności Ali w ciagu 30 dni, jeżeli pierwszego dnia dostała 4 zł, a każdego następnego dostaje o 2 zł więcej niż w dniu poprzednim (ile dostaje, ile ma na koncie, dzień) -->

<?php
$konto = 0;

for ($dzien = 1, $wplata = 4; $dzien <= 30; $dzien++, $wplata+=2)
{
    $konto += $wplata;
    print("W dniu $dzien, Ala otrzymala $wplata pln. Na koncie ma $konto pln.<br>");
}

?>