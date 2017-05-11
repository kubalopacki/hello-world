<?php

$pesel = "98021207153";
$tabmiesiace[1] = "Styczeń";
$tabmiesiace[2] = "Luty";
$tabmiesiace[3] = "Marzec";
$tabmiesiace[4] = "Kwiecien";
$tabmiesiace[5] = "Maj";
$tabmiesiace[6] = "Czerwiec";
$tabmiesiace[7] = "Lipiec";
$tabmiesiace[8] = "Sierpień";
$tabmiesiace[9] = "Wrzesień";
$tabmiesiace[10] = "Październik";
$tabmiesiace[11] = "Listopad";
$tabmiesiace[12] = "Grudzień";


$rok = substr($pesel, 0, 2);
echo "Rok urodzenia: 19" . $rok . "\n";
$miesiac = intval(substr($pesel, 2, 2));
echo "Miesiąc urodzenia:" . $tabmiesiace[$miesiac] . "\n";
$dzien = substr($pesel, 4, 2);
echo "Dzień urodzenia:" . $dzien . "\n";
$plec = $pesel[9];
if ($plec % 2 == 0) {
    echo "Płeć:Kobieta \n";
} else {
    echo "Płeć:Mężczyzna \n";
}
$test =
    $pesel[0] * 9 +
    $pesel[1] * 7 +
    $pesel[2] * 3 +
    $pesel[3] * 1 +
    $pesel[4] * 9 +
    $pesel[5] * 7 +
    $pesel[6] * 3 +
    $pesel[7] * 1 +
    $pesel[8] * 9 +
    $pesel[9] * 7;


$kontrola1 = substr($test, -1);
$kontrola2 = substr($pesel, 10, 1);
/*
echo $test . "\n";
echo $kontrola1 . "\n";
echo $kontrola2 . "\n";

*/
if ($kontrola1 == $kontrola2) {


} else {
    echo "Numer Pesel nieprawdiłowy";
}

$teraz = date('Y');
$wiek = $teraz - ($rok + 1900);
echo "Wiek:" . $wiek . "\n";

echo date("w");

echo PHP_EOL;
echo time() . PHP_EOL; //sekundy ktore uplynely od 1970
$timestamp = time(); //definiuje timestamp jako czas ktory uplynal od 1970
echo date("Y-m.d H:i:s") . PHP_EOL; // Pokazuje aktualny czas co do sekundy
echo date("Y-m-d H:i:s", $timestamp - 5) . PHP_EOL; //pokazuje czas ktory uplynal od 1970 do chwili 5 sekund temu
$timestamp_urodzin = mktime(12, 0, 0, 2, 12, 1998); //ilosc sekund ktora uplynela od 1970 do podanej daty
echo date("Y-m-d H:i:s", $timestamp_urodzin) . PHP_EOL; //
echo date("Y-m-d H:i:s", 2314) . PHP_EOL; //
echo date("w", $timestamp_urodzin) . PHP_EOL;
echo date("w", 800000) . PHP_EOL;
echo $timestamp_urodzin .PHP_EOL;

define("IP", '192.106.131.121');


echo IP.PHP_EOL;

echo EXAMPLE;

print_r($argc);
print_r($argv);
