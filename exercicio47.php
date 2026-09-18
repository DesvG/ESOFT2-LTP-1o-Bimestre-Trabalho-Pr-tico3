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
Descritivo: Exibir dois nomes em ordem alfabética
******************************************************************************/

// Explicação: Lê dois nomes, compara com strcmp e exibe na ordem alfabética correta.

$nome1 = readline("Digite o primeiro nome: ");
$nome2 = readline("Digite o segundo nome: ");

if (strcmp($nome1, $nome2) <= 0) {
    echo "$nome1\n";
    echo "$nome2\n";
} else {
    echo "$nome2\n";
    echo "$nome1\n";
}