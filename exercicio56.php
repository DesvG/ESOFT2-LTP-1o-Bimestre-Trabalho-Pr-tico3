<?php
//*
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
[26004871-2] - [Derick Naressi]
[26013191-2] - [Giovanna Yoko Figueredo Durigan Nakai]
[26009755-2] - [Guilherme Massaro de Souza]
[26009484-2] - [Gustavo Zangirolami Pavoni]
[26007287-2] - [Yago de Souza Rodrigues]
Data: 19 de Setembro de 2026
*/
    
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
