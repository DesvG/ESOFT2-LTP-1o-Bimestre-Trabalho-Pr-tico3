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
 Descritivo: Escreva um programa que leia dois números inteiros (dividendo e divisor) e exiba na tela
uma saída detalhada contendo: Dividendo, Divisor, Quociente (inteiro) e Resto da divisão.
****************************************************************/
echo "Digite o dividendo: ";
$dividendo = (int) trim(fgets(STDIN));
echo "Digite o divisor: ";
$divisor = (int) trim(fgets(STDIN));
if ($divisor == 0) {
    echo "Erro: O divisor não pode ser zero, pois o quociente sempre será indefinido.\n";
} else {
    $quociente = (int) ($dividendo / $divisor);
    $resto =($dividendo % $divisor);
    echo "Dividendo: " . $dividendo . "\n";
    echo "Divisor: " . $divisor . "\n";
    echo "Quociente: " . $quociente . "\n";
    echo "Resto: " . $resto . "\n";
};
// o código lê dois números inteiros, verifica se o divisor é zero e caso não seja, calcula o quociente e o resto da divisão e exibe os resultados // 