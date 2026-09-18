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
Descritivo: Troca dos conteúdos das variáveis A e B
******************************************************************************/

// Explicação: Lê A e B, mostra os valores antes da troca e usa uma variável auxiliar para trocar os conteúdos.

$a = (int) readline("Digite o valor de A: ");
$b = (int) readline("Digite o valor de B: ");

echo "Antes da troca: A = $a e B = $b\n";

$aux = $a;
$a = $b;
$b = $aux;

echo "Depois da troca: A = $a e B = $b\n";
