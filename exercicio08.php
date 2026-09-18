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
Descritivo: Ler inteiro e exibir antecessor e sucessor
******************************************************************************/

// Explicação: Lê um inteiro e calcula o antecessor (n-1) e o sucessor (n+1).

$n = (int) readline("Digite um número inteiro: ");
$antecessor = $n - 1;
$sucessor = $n + 1;

echo "Número: $n\n";
echo "Antecessor: $antecessor\n";
echo "Sucessor: $sucessor\n";