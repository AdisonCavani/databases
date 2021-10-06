<!-- 4. Wypisz wszystkie liczby od 1 do 100 i pogrób te, które są kwadratami liczb naturalnych (1, 4, 9, 16 ect.) -->

<?php

// List numbers from 1 to 100 and try to find the numbers which are squares of natural numbers (1, 4, 9, 16 ect.)

for ($i = 1; $i <= 100; $i++) {
    if (is_int($i / sqrt(2))) {
        echo $i . '<br>';
    }
}

?>