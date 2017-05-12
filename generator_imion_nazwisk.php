<?php
$i = 0;

$baza_imion = fopen("tylkoimiona.csv", "r");
$baza_nazwisk = fopen("nazwiska.txt", "r");

$imiona = file("tylkoimiona.csv");
$nazwiska = file("nazwiska.txt");

while ($i < 5) {

    $imie = array_rand($imiona);
    $imie = $imiona[$imie];
    $poprawione_imie = trim($imie);

    $nazwisko = array_rand($nazwiska);
    $nazwisko = $nazwiska[$nazwisko];


    echo $poprawione_imie . " " . $nazwisko . PHP_EOL;

    $i++;
}

