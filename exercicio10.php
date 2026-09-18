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
Descritivo: Ler dois inteiros, somar e exibir com rótulo 'Soma: '
******************************************************************************/

// Explicação: Lê dois inteiros com readline, soma e exibe o resultado precedido do rótulo.

$a = (int) readline("Digite o primeiro número: ");
$b = (int) readline("Digite o segundo número: ");

$soma = $a + $b;
echo "Soma: $soma\n";