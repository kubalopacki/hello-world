<?php
exit('m-m-m-m');
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/config_static.php');

$m = new Memcached();
$m->addServer(_IP_MEMCACHED, 11212);

require_once('../../lib/singleton.php');
$s =& Glob::singleton();

require_once('../../lib/protection.php');
require_once('../../lib/time.php');
require_once('../../lib/lib_db1.php');
//require_once('lib/lib_db.php'); 

$config = check_config($www, $m);
require_once('../../lib/config_db.php');

$shopId1 = 9671;
$shopId2 = 9671;

$dbs = new DB(_IP_DBM, 'shop', _SHOPPASS, 's_' . $shopId1);
$dbs->Connect();

$dbm = new DB(_IP_DBM, 'shop', _SHOPPASS, 's_' . $shopId2);
$dbm->Connect();

//Pobranie tabeli wzorcowej

$sql = 'SELECT * FROM tabela_1 WHERE flaga BETWEEN 1 AND 2';
$stmt = $dbs->dbquery($sql);
while ($item = $dbs->dbfetch($stmt)) {
    $tabela1[$item['id']] = $item['wartosc'];
}

//Pobranie tabeli z lukami

$sql = 'SELECT * FROM tabela_2 ORDER BY id ASC ';
$stmt = $dbm->dbquery($sql);
while ($item = $dbm->dbfetch($stmt)) {
    $tabela2[$item['id']] = $item['wartosc'];
}

//Sprawdza różnice pomiędzy tabelami
//Wypisuje ID nieobecne w drugiej tabeli


$result = array_diff_key($tabela1, $tabela2);

print_r($result);

/*
//Dodaje do tabeli_2 brakujące IDki i wartości

function insertRecord($table_name, $data)
{
    $fields = array_keys($data); //przypisuje zmiennej fields klucze z $data w postaci tablicy
    $fields = array_map(function ($element) {
        return "`$element`";
    }, $fields);
    $fields = implode(', ', $fields);

    $values = array_values($data);
    $values = array_map(function ($element) {
        $element = addslashes($element);
        return "'$element'";
    }, $values);
    $values = implode(', ', $values);

    $sql = "INSERT INTO `$table_name` ($fields) VALUES ($values);" . PHP_EOL;
    echo $sql;
    return $sql;

}

foreach ($result as $id => $wartosc) {

    //insertRecord("tabela_2", $wartosc);

    $stmt = $dbm->dbquery(insertRecord("tabela_2", $wartosc));


}
*/
