<?php

$swiat = array("Europa" => array("Polska", "Francja", "Niemcy", "Włochy"), "Azja" => array("Chiny", "Rosja", "Japonia", "Indie"), "Afryka" => array("Kongo", "RPA", "Jamajka", "Kenia"));

foreach ($swiat as $kontynent => $kraj) {
    echo "Kontynent: " . $kontynent . "<br>";
    for ($i = 0; $i < sizeof($kraj); $i++) {
        echo " - " . $kraj[$i] . "<br>";
    }
    echo "<br>";
}
