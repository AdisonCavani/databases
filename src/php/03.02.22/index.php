<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="get">
    <label for="name">Imię:</label>
    <input type="text" id="name" name="name">
    <label for="surname">Nazwisko:</label>
    <input type="text" id="surname" name="surname">
    <label for="age">Wiek:</label>
    <input type="number" id="age" name="age">
    <label for="city">Miasto:</label>
    <input type="text" id="city" name="city">
    <label for="single">Stan cywilny:</label>
    <select id="single" name="single">
        <option value="1">Wolny</option>
        <option value="2">Zaraz siedzę</option>
        <option value="3">Wolny, ale zaraz siedzę</option>
        <option value="4">Zaraz zamieszkuje się</option>
        <option value="5">Zamieszkuje się</option>
    </select>
    <label for="interests">Zainteresowania:</label>
    <select multiple id="interests" name="interests[]">
        <option value="1">Sport</option>
        <option value="2">Książki</option>
        <option value="3">Muzyka</option>
        <option value="4">Zwierzęta</option>
        <option value="5">Czytanie</option>
        <option value="6">Kuchnia</option>
        <option value="7">Gry</option>
    </select>
<?php



?>

</body>
</html>