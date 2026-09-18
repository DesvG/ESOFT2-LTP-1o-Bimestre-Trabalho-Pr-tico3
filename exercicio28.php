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
Descritivo: Metade de um número real maior que 20
******************************************************************************/

// Explicação: Lê um número real e, somente se ele for maior que 20, calcula e exibe sua metade.

$numero = (float) readline("Digite um número real: ");

if ($numero > 20) {
    $metade = $numero / 2;
    echo "A metade do número é: $metade\n";
} else {
    echo "O número não é maior que 20.\n";
}
