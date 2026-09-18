<?php

//*
Exercício 53:
Lê a altura e o sexo da pessoa e calcula o peso ideal.
*/

$altura = (float) readline("Digite sua altura: ");
$sexo = readline("Digite o sexo (M/F): ");

if ($sexo == "M") {

    $pesoIdeal = (72.7 * $altura) - 58;

} elseif ($sexo == "F") {

    $pesoIdeal = (62.1 * $altura) - 44.7;

} else {

    echo "Sexo inválido." . PHP_EOL;
    exit;
}

echo "Peso ideal: " . $pesoIdeal . " kg" . PHP_EOL;

?>