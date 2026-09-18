<?php

//*
Exercício 54:
Lê um número de 1 a 7 e mostra o dia da semana correspondente.
*/

$numero = (int) readline("Digite um número de 1 a 7: ");

switch ($numero) {

    case 1:
        echo "Domingo";
        break;

    case 2:
        echo "Segunda-feira";
        break;

    case 3:
        echo "Terça-feira";
        break;

    case 4:
        echo "Quarta-feira";
        break;

    case 5:
        echo "Quinta-feira";
        break;

    case 6:
        echo "Sexta-feira";
        break;

    case 7:
        echo "Sábado";
        break;

    default:
        echo "Número inválido.";
}

?>