<?php
/******************************************************************************
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
Descritivo: Calcular IMC e classificar o grau de obesidade
******************************************************************************/

// Explicação: Lê peso e altura, calcula o IMC e classifica com if/elseif/else.

$peso = (float) readline("Digite o peso (kg): ");
$altura = (float) readline("Digite a altura (m): ");

$imc = $peso / ($altura * $altura);

if ($imc < 26) {
    $classificacao = "Normal";
} elseif ($imc < 30) {
    $classificacao = "Obeso";
} else {
    $classificacao = "Obeso Mórbido";
}

echo "IMC: " . number_format($imc, 2, ',', '.') . "\n";
echo "Classificação: $classificacao\n";