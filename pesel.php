<?php

$pesel = "72102904586";
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
    echo "Płeć:Kobieta";
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
