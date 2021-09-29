<!-- Wypisz (n| n ) * n -->

<?php
$rzedy = 10;
$kolumny = 1;

for ($r = 0; $r < $rzedy; $r++)
{
    print("<br><center>");
    for ($k = 0; $k < $kolumny; $k++)
    {
        print("*");
    }
    $kolumny++;
}

?>