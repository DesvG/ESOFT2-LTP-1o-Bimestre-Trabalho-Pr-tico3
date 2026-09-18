<?php
//*
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
[26004871-2] - [Derick Naressi]
[26013191-2] - [Giovanna Yoko Figueredo Durigan Nakai]
[26009755-2] - [Guilherme Massaro de Souza]
[26009484-2] - [Gustavo Zangirolami Pavoni]
[26007287-2] - [Yago de Souza Rodrigues]
Data: 19 de Setembro de 2026
*/
    
//*
Exercício 55:
Lê um número de 1 a 12 e mostra o mês correspondente.
*/

$mes = (int) readline("Digite um número de 1 a 12: ");

switch ($mes) {

    case 1:
        echo "Janeiro";
        break;

    case 2:
        echo "Fevereiro";
        break;

    case 3:
        echo "Março";
        break;

    case 4:
        echo "Abril";
        break;

    case 5:
        echo "Maio";
        break;

    case 6:
        echo "Junho";
        break;

    case 7:
        echo "Julho";
        break;

    case 8:
        echo "Agosto";
        break;

    case 9:
        echo "Setembro";
        break;

    case 10:
        echo "Outubro";
        break;

    case 11:
        echo "Novembro";
        break;

    case 12:
        echo "Dezembro";
        break;

    default:
        echo "Mês inválido.";
}

?>
