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
Descritivo: Maior entre dois números reais
******************************************************************************/

// Explicação: Lê dois números reais e compara os valores para descobrir qual é o maior.

$numero1 = (float) readline("Digite o primeiro número: ");
$numero2 = (float) readline("Digite o segundo número: ");

if ($numero1 > $numero2) {
    echo "O maior número é: $numero1\n";
} elseif ($numero2 > $numero1) {
    echo "O maior número é: $numero2\n";
} else {
    echo "Os dois números são iguais.\n";
}
