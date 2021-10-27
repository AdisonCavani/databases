<?php
$col = 10;
$row = 20;
$tab = array();

for ($i = 0; $i < $row; $i++)
{
    for ($j = 0; $j < $col; $j++)
    {
        if ($j % 2 == 0 && $i % 2 == 0)
            $tab[$i] = "*";
        elseif ($j % 2 == 0 && $i % 2 == 1)
            $tab[$i] = "#";
        else if ($j % 2 == 1 && $i % 2 == 1)
            $tab[$i] = "*";
        else
            $tab[$i] = "#";

        print($tab[$i] . "\t");
    }
    print("<br>");
}
