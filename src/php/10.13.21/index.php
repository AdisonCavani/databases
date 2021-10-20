<?php

$tab = array("Twardosz", "Środoń", "Sajewicz");

print("Tablica nieposortowana: <br>");
for ($i = 0; $i < sizeof($tab); $i++)
{
    print($tab[$i] . "<br>");
}

sort($tab);
print("<br>Tablica posortowana: <br>");

for ($i = 0; $i < sizeof($tab); $i++)
{
    print($tab[$i] . "<br>");
}
