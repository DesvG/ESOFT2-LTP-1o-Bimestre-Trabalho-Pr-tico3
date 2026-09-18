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
 Descritivo: ExiEscreva um programa que leia uma string correspondente a uma data no formato
ddmmaa (6 dígitos, ex: 250826) e exiba o dia, mês e ano de forma separada.
****************************************************************/
echo "Digite a data no formato dia/mês/ano(ddmmaa): ";
$data = trim(fgets(STDIN));
$dia = substr($data, 0, 2);
$mês = substr($data, 2, 2);
$ano = substr($data, 4, 4);
echo "O dia é: " . $dia . "\n";
echo "O mês é: " . $mês . "\n";
echo "O ano é: " . $ano . "\n";
// o código lê a data no formato ddmmaaaa e exibe o dia, mês e ano de forma separada //