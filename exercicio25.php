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
Descritivo: Conversão de temperatura de Fahrenheit para Celsius
******************************************************************************/

// Explicação: Lê uma temperatura em Fahrenheit e aplica a fórmula C = 5/9 * (F - 32).

$fahrenheit = (float) readline("Digite a temperatura em Fahrenheit: ");

$celsius = 5 / 9 * ($fahrenheit - 32);

echo "Temperatura em Celsius: $celsius\n";