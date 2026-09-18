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
 Descritivo: escreva um programa que leia o valor do saldo de uma aplicação bancária e exiba o novo
saldo reajustado com um acréscimo de 2%.
****************************************************************/
echo "digite o valor do saldo: ";
$saldo = (float) trim(fgets(STDIN));
$novoSaldo = $saldo * 1.02;
echo "O novo saldo é: " . $novoSaldo . "\n";
// o código lê o valor do saldo, calcula o novo saldo com um acréscimo de 2% e exibe o resultado //