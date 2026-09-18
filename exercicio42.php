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
Descritivo: Verificar se um número é divisível por 3 e por 7 simultaneamente
******************************************************************************/

// Explicação: Lê um inteiro e usa o operador % para verificar divisibilidade por 3 e por 7 ao mesmo tempo.

$numero = (int) readline("Digite um número inteiro: ");

if ($numero % 3 == 0 && $numero % 7 == 0) {
    echo "$numero é divisível por 3 e por 7 simultaneamente.\n";
} else {
    echo "$numero NÃO é divisível por 3 e por 7 simultaneamente.\n";
}