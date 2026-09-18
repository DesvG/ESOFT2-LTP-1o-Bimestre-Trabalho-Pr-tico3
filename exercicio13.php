<?php
/*******************************
 Curso: Engenharia de Software
 Disciplina: Linguagem e Técnicas de Programação
 Professor: Flores
 Turma: ESOFT-2
 Componentes:
 26004871-2 - Derick Narresi 
 26013191-2 - Giovanna Yoko Figueredo Durigan Nakai
 26009755-2 - Guilherme Massaro De Souza
 26009484-2 - Gustavo Zangirolami Pavoni
 26007287-2 - Yago De Souza Rodrigues
 Data: 19 de Setembro de 2026
 Descritivo: Escreva um programa que leia dois números inteiros e exiba a média aritmética simples
entre eles.
****************************************************************/
echo "Digite o primeiro número: ";
$a = (int) trim(fgets(STDIN));

echo "Digite o segundo número: ";
$b = (int) trim(fgets(STDIN));

$media=($a + $b)/2;
echo "media: " . $media . "\n";
// o código pega dois números e faz a média entre eles //