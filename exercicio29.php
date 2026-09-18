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
Descritivo: Inverso ou valor absoluto de um número
******************************************************************************/

// Explicação: Se o número for positivo, calcula 1/x. Caso contrário, calcula seu valor absoluto multiplicando por -1.

$numero = (float) readline("Digite um número real: ");

if ($numero > 0) {
    $resultado = 1 / $numero;
    echo "O inverso do número é: $resultado\n";
} else {
    $resultado = $numero * -1;
    echo "O valor absoluto do número é: $resultado\n";
}
