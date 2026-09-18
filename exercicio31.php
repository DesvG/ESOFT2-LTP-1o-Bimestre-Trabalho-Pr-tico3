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
Descritivo: Verificação se um número é par ou ímpar
******************************************************************************/

// Explicação: Usa o operador módulo (%) para verificar se a divisão por 2 possui resto zero.

$numero = (int) readline("Digite um número inteiro: ");

if ($numero % 2 == 0) {
    echo "O número é PAR.\n";
} else {
    echo "O número é ÍMPAR.\n";
}
