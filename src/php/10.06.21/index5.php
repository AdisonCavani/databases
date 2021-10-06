<!-- 5. Używając pętli wykonaj obrazek klepsydry, która u podstawy ma "k" gwiazdek -->

<?php

$rzedy = 10;

for ($i = 0, $p = $rzedy; $i < $rzedy; $i++)
{
    print("<br><center>");
    
    for ($j = 0; $j < $p; $j++)
    {
        print("*");
    }
    $p--;
}

for ($r = 0, $q = 2; $r < $rzedy-1; $r++)
{
    print("<br><center>");
    for ($k = 0; $k < $q; $k++)
    {
        print("*");
    }
    $q++;
} 
?>