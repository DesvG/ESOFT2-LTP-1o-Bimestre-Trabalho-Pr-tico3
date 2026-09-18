<?php

//*
Exercício 51:
Lê três notas e calcula a média somente das duas maiores.
*/

$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");
$nota3 = (float) readline("Digite a terceira nota: ");

$notas = [$nota1, $nota2, $nota3];

sort($notas);

$maior1 = $notas[1];
$maior2 = $notas[2];

$media = ($maior1 + $maior2) / 2;

echo "Média das duas maiores notas: $media" . PHP_EOL;

?>