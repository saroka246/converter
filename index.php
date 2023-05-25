<?php

require_once __DIR__ . "/utils/config.php";

/*static $rates;
$now = date('y-m-d H:i:s',time() + 3600);
$rates= simplexml_load_file("https://www.cbr.ru/scripts/XML_daily.asp");

foreach ($rates->Valute as $val){
    $dec = $val->Value->__toString();
    $dec = str_replace(",", '.',$dec);
    $mysqli->query("UPDATE currency SET value='$val->Value',time='$now' WHERE id='$val->NumCode'");
}*/
