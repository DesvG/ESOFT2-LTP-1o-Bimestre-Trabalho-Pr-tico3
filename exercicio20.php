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
 Descritivo:Escreva um programa que leia uma data no formato ddmmaa (ex: 250826) e exiba a
mesma data reorganizada no formato mmddaa.
****************************************************************/
echo "Digite a data no formato dia/mês/ano(ddmmaa): ";
$data = trim(fgets(STDIN));
$dia = substr($data, 0, 2);
$mês = substr($data, 2, 2);
$ano = substr($data, 4, 4);
echo "A data reorganizada é: " . $mês . '/' . $dia . '/' . $ano . "\n";
// o código lê a data no formato ddmmaa e exibe a mesma data reorganizada no formato mmddaa //