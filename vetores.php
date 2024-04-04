<?php
echo "<pre>";
$lista["A"] = 10;
$lista["B"] = 11;
$lista["C"] = 12;
$lista[] = 13;
$lista[] = 14; //você pode definir sem precisar de uma sequência de posições
$lista["texto"] = 15;
$lista[] = 16;

$lista["alunos"] = array("matricula" => 1, "email" => "aluno@etec");
$lista["materias"] = array("Des I", "PWI");
echo $lista["alunos"]["matricula"];
var_dump($lista);

for ($i = 0; $i < count($lista); $i++) {
    echo "Posição:" . $i . " Valor:" . $lista[$i] . "<br>";
}

// outras formas de definir um array

foreach ($lista as $valor) {
    echo "Valor" . $valor . "<br>";
}
echo "<br>";
var_dump($lista);
$lista1 = array();

var_dump($lista1);

$lista2 = [1, 2, 3, "teste", 5.20]; // você pode criar um var_dump definindo todas as posições em uma só variável
var_dump($lista2);
unset($lista2[3]); // tirar uma posições do vetor(no caso a posição 3)
$lista2[] = 20;
var_dump($lista2);
