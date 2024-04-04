<?php
echo "<pre>"; 
$lista[] = 10;
$lista[] = 11;
$lista[] = 12;
$lista[] = "nome";
$lista[6] = 13; //você pode definir sem precisar de uma sequência de posições

// outras formas de definir um array

var_dump($lista);
$lista1 = array();

var_dump($lista1);

$lista2 = [1,2,3,"teste",5.20]; // você pode criar um var_dump definindo todas as posições em uma só variável
$lista2[] = 20;
var_dump($lista2);