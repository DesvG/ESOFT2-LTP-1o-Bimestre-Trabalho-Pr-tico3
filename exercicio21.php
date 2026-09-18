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
 Descritivo: Escreva um programa que leia quatro números inteiros e calcule a média ponderada
deles, considerando que os pesos associados a cada número são, respectivamente, 1, 2, 3 e
4.
****************************************************************/
echo "digite o primeiro número: ";
$numero1 = (int) trim(fgets(STDIN));
echo "digite o segundo número: ";
$numero2 = (int) trim(fgets(STDIN));
echo "digite o terceiro número: ";
$numero3 = (int) trim(fgets(STDIN));
echo "digite o quarto número: ";
$numero4 = (int) trim(fgets(STDIN));
$mediaPonderada = ($numero1 * 1 + $numero2 * 2 + $numero3 * 3 + $numero4 * 4) / (1 + 2 + 3 + 4);
echo "A média ponderada é: " . $mediaPonderada . "\n";
// o código lê quatro números inteiros e calcula a média ponderada usando os pesos fornecidos //