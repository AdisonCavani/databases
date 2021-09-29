<!-- Oblicz sumę cyfr podanej liczby -->
<?php
$liczba = 3251;
$suma = 0;

while ($liczba != 0)
{
    $r = $liczba % 10;
    $suma += $r;
    $liczba -= $r;
}

print("$suma")

?>