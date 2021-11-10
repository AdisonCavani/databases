<?php
$dane = array("Twardosz" => 18, "Środoń" => 19, "Rodzaj" => 12, "Pawlina" => 20);

echo "<b>Tablica orginalna: </b><br>";
foreach ($dane as $nazwisko => $value) {
    echo $nazwisko . ": " . $value . " lat<br>";
}

asort($dane);

echo "<br><b>Tablica posortowana wg. wieku: </b><br>";
foreach ($dane as $nazwisko => $value) {
    echo $nazwisko . ": " . $value . " lat<br>";
}

ksort($dane);

echo "<br><b>Tablica posortowana wg. nazwiska: </b><br>";
foreach ($dane as $nazwisko => $value) {
    echo $nazwisko . ": " . $value . " lat<br>";
}
