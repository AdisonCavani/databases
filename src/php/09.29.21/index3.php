<!-- W zależności od wyboru wypisać wszystkie liczby dwucyfrowe lub dwucyfrowe parzyste, lub dwucyfrowe nieparzyste -->
<!-- Napisz skrypt, który w liczbie dwucyfrowej zamieni miejscami cyfrę jedności i jednostek, wypisze wypisaną liczbę, a następnie obliczy sumę wejściowej i zmienionej liczby -->

<?php
$wybor = 1;

switch ($wybor)
{
    case 1:
        for ($i = 0; $i <= 99; $i++)
            print("$i<br>");
        break;

    case 2:
        for ($i = 0; $i <= 99; $i++)
            if ($i % 2 == 0)
                print("$i<br>");
        break;

    case 3:
        for ($i = 0; $i <= 99; $i++)
            if ($i % 2 == 1)
                print("$i<br>");
        break;

    default:
        print("Nie ma takiej opcji!");
        break;
}
?>
