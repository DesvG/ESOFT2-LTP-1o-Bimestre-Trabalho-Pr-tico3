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
Descritivo: Ler dois inteiros e exibir o produto entre eles
******************************************************************************/

// Explicação: Lê dois inteiros com readline, multiplica com o operador * e exibe o resultado.

$a = (int) readline("Digite o primeiro número: ");
$b = (int) readline("Digite o segundo número: ");

$produto = $a * $b;
echo "Produto: $produto\n";