<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PHP Variables, arrays and operators</title>
</head>

<body>

<h1>PHP Variables, arrays and operators</h1>

<?php

$days = array(
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
);

echo "<p>The days of the week in English are:</p>";

echo implode(", ", $days);

echo "<p>The days of the week in French are:</p>";

$days = array(
    "Dimanche",
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi"
);

echo implode(", ", $days);

?>

</body>
</html>