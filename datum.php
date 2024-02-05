<?php
require_once 'functions.php';

echo "<h1>Datum</h1><br><h2>Formáty dat:</h2>";
echo "Rok-Měsíc-Den: ".date('Y-n-j')."<br>";
echo "Dvoucif. Rok-Měsíc-Den: ".date('Y-m-d')."<br>";
echo "Čas h:m:s: ".date('G:i:s')."<br>";
echo "Aktuální datum: ".date('Y-m-d G:i:s')."<br>";
echo "CZ akt. datum: ".date('j.n. Y G:i')."<br>";


echo "<h2>Výpočty s datem</h2>";
$dnes = strtotime('today');
$zitra = strtotime('+1 day');
$vcera = strtotime('-1 day');
$prMes = strtotime('first day of this month');
$posMes = strtotime('last day of this month');
$splat = strtotime('+14 day');
$danPl = strtotime('-3 day');

echo "Dnešní datum a čas: ".date('j.n. Y G:i')."<br>";
echo "Zítřejší datum: ".date('j.n. Y', $zitra)."<br>";
echo "První den v měsící: ".date('j.n. Y', $prMes)."<br>";
echo "Poslední den v měsíci: ".date('j.n. Y', $posMes)."<br>";
echo "Včerejší datum: ".date('j.n. Y', $vcera)."<br>";
echo "Datum splatnosti: ".date('j.n. Y', $splat)."<br>";
echo "Zdanitelné plnění: ".date('j.n. Y', $danPl)."<br>";


echo "<h2>Lokalizované datum</h2>";
echo "Lokalizované datum: ".dateLocalized('cs');