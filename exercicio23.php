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
 Descritivo:Escreva um programa que leia o valor da base e da altura de um triângulo e calcule e
exiba a sua área (Fórmula: Area = (Base * Altura) / 2).
****************************************************************/
echo "digite o valor da base do triângulo: ";
$base = (float) trim(fgets(STDIN));
echo "digite o valor da altura do triângulo: ";
$altura = (float) trim(fgets(STDIN));
$área = ($base * $altura) / 2;
echo "A área do triângulo é: " . $área . "\n";
// o código lê o valor da base e da altura do triângulo, calcula a área usando a fórmula fornecida e exibe o resultado //  