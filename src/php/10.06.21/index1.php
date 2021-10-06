<!--1. Wypisz wszystkie liczby 3 cyfrowe parzyste i pogrób te, które są podzielne przez 20 -->

<?php

for ($i=100; $i < 1000; $i++) { 
    if ($i % 20 == 0)
        print("<b>$i</b><br>");
    else
        print("$i<br>");
}

?>