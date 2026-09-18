<?php

//*
Exercício 56:
Lê o tipo do veículo e a distância que ele irá percorrer.
Depois calcula a quantidade de combustível necessária.
*/

$tipo = readline("Digite o tipo do veículo (A, B, C, D ou E): ");
$distancia = (float) readline("Digite a distância em Km: ");

switch ($tipo) {

    case "A":
        $consumo = 13.5;
        break;

    case "B":
        $consumo = 12.0;
        break;

    case "C":
        $consumo = 10.5;
        break;

    case "D":
        $consumo = 9.0;
        break;

    case "E":
        $consumo = 7.5;
        break;

    default:
        echo "Tipo de veículo inválido.";
        exit;
}

$litros = $distancia / $consumo;

echo "Litros estimados: $litros L";

?>