<?php
$col = 11;
$row = 11;
$tab = array();

for ($i = 0; $i < $row; $i++)
{
    for ($j = 0; $j < $col; $j++)
    {
        if ($i == $j)
            $tab[$i] = "*";
        elseif ($i + $j == $col - 1)
            $tab[$i] = "*";
        else

            $tab[$i] = 0;
        print($tab[$i] . "\t");
    }
    print("<br>");
}
