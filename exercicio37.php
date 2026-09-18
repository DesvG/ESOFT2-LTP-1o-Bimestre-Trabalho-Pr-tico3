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
Descritivo: Calcular média de três notas e exibir o conceito correspondente
******************************************************************************/

// Explicação: Lê três notas, calcula a média e usa if/elseif/else para definir o conceito.

$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");
$nota3 = (float) readline("Digite a terceira nota: ");

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 8.0) {
    $conceito = "A";
} elseif ($media >= 5.0) {
    $conceito = "B";
} else {
    $conceito = "C";
}

echo "Média: $media\n";
echo "Conceito: $conceito\n";