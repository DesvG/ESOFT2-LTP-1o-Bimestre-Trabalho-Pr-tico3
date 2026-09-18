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
Descritivo: Exibir o maior entre três números reais
******************************************************************************/

// Explicação: Lê três números reais e usa if/elseif para determinar o maior valor.

$a = (float) readline("Digite o primeiro número: ");
$b = (float) readline("Digite o segundo número: ");
$c = (float) readline("Digite o terceiro número: ");

if ($a >= $b && $a >= $c) {
    $maior = $a;
} elseif ($b >= $a && $b >= $c) {
    $maior = $b;
} else {
    $maior = $c;
}

echo "Maior valor: $maior\n";