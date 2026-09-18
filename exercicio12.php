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
Descritivo: Ler número real e exibir a terça parte
******************************************************************************/

// Explicação: Lê um número real com readline, divide por 3 e exibe o resultado.

$n = (float) readline("Digite um número real: ");
$tercaParte = $n / 3;

echo "Terça parte = $tercaParte\n";