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
 Descritivo: Escreva um programa que leia um número inteiro positivo e exiba o dobro dele. Se o
número for negativo, informe o erro.
****************************************************************/
echo "Digite um número inteiro positivo: ";
$número = (int) trim(fgets(STDIN));

if ($número < 0) {
    echo "Erro: O número deve ser positivo.\n";
} else {
    echo "O dobro de " . $número . " é " . (2 * $número) . ".\n";
}
// o código lê um número, verifica se é negativo caso for informada o erro e caso seja positivo exibe o dobro do número. //