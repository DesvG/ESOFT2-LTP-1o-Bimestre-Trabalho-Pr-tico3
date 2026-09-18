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
Descritivo: Classificação de um número como positivo, negativo ou nulo
******************************************************************************/

// Explicação: Compara o número com zero usando if, elseif e else para identificar sua situação.

$numero = (float) readline("Digite um número real: ");

if ($numero > 0) {
    echo "O número é POSITIVO.\n";
} elseif ($numero < 0) {
    echo "O número é NEGATIVO.\n";
} else {
    echo "O número é NULO.\n";
}
