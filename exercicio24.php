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
 Descritivo: Escreva um programa que calcule e exiba o comprimento de uma circunferência com
base em seu raio fornecido pelo usuário. Defina PI como uma constante com valor 3.1415
(Fórmula: C = 2 * PI * Raio).
****************************************************************/
echo "digite o valor do raio: ";
$raio = (float) trim(fgets(STDIN));
define("PI", 3.1415);
$comprimento = 2 * PI * $raio;
echo "O comprimento da circunferência é: " . $comprimento . "\n";
// o código lê o valor do raio, define a constante PI e calcula o comprimento da circunferência usando a fórmula fornecida //