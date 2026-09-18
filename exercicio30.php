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
Descritivo: Verificação de divisibilidade por 3
******************************************************************************/

// Explicação: Usa o operador módulo (%) para verificar se o resto da divisão do número por 3 é igual a zero.

$numero = (int) readline("Digite um número inteiro: ");

if ($numero % 3 == 0) {
    echo "O número é divisível por 3.\n";
} else {
    echo "O número não é divisível por 3.\n";
}
