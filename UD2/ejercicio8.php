<?php

$dinero = 1736;
$billetes500 = (int)($dinero / 500);
$dinero = $dinero % 500;
$billetes100 = (int)($dinero / 100);
$dinero = $dinero % 100;
$billetes50 =(int)($dinero / 50);
$dinero = $dinero % 50;
$billetes20 =(int)($dinero / 20);
$dinero = $dinero % 20;

$billetes10 =(int)($dinero / 10);
$dinero = $dinero % 10;

$monedas2 =(int)($dinero / 2);
$dinero = $dinero % 2;

$monedas1 = $dinero;

echo "Billetes de 500 €: $billetes500<br>";
echo "Billetes de 100 €: $billetes100<br>";
echo "Billetes de 50 €: $billetes50<br>";
echo "Billetes de 20 €: $billetes20<br>";
echo "Billetes de 10 €: $billetes10<br>";
echo "Monedas de 2 €: $monedas2<br>";
echo "Monedas de 1 €: $monedas1<br>";
?>

