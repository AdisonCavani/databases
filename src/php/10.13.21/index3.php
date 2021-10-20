<?php

// Tablice 20 elementowa wypelnij tak, aby na parzystych indexach byly liczby losowe, 1 cyfrowe, a na nieparzystych 2 cyfrowe losowe

$tab = array();

for ($i = 0; $i <= 20; $i++)
{
    if ($i % 2 == 0)
        $tab[$i] = rand(0, 9);
    else
        $tab[$i] = rand(10, 99);
}

for ($i = 0; $i < sizeof($tab); $i++)
{
    print($tab[$i] . "<br>");
}
