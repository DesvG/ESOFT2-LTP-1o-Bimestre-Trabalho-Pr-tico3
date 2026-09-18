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
 Descritivo: Exibir a mensagem 'Escreva um programa que leia um número inteiro de três algarismos (de 100 a 999) e
exiba o algarismo correspondente à casa das dezenas..
****************************************************************/
echo "Digite um número inteiro de três algarismos (de 100 a 999): ";
$numero = (int) trim(fgets(STDIN));
$dezena = intval($numero / 10) % 10;
echo "O algarismo correspondente à casa das dezenas é: " . $dezena . "\n";
// o código lê um número inteiro de três algarismos e exibe o algarismo correspondente à casa das dezenas //