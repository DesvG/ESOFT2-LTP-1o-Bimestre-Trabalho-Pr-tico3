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
Descritivo: Verificar se o algarismo das centenas é par ou ímpar
******************************************************************************/

// Explicação: Lê um número de 3 dígitos, extrai a centena com divisão inteira por 100 e verifica par/ímpar.

$numero = (int) readline("Digite um número inteiro de 100 a 999: ");

$centena = (int) ($numero / 100);

if ($centena % 2 == 0) {
    echo "O algarismo das centenas ($centena) é PAR.\n";
} else {
    echo "O algarismo das centenas ($centena) é ÍMPAR.\n";
}