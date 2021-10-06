<!-- 2. W zależności od wyboru wyznacz sumę lub iloczyn dwóch liczb(wybor,a,b) - instrukcja switch -->

<?php
$w = 0;
$a = 4;
$b = 5;

switch($w)
{
    case 0:
        print("Dodawanie: $a + $b = ".$a + $b);
        break;
    case 1:
        print("Iloczyn: $a * $b = ".$a * $b);
        break;
    default:
        print("Zły wybór");
}

?>