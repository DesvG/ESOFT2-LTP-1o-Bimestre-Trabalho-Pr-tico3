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
Exercício 57:
Lê o dia, o mês e o ano e verifica se a data é válida.
*/

$dia = (int) readline("Digite o dia: ");
$mes = (int) readline("Digite o mês: ");
$ano = (int) readline("Digite o ano: ");

$bissexto = ($ano % 400 == 0) || (($ano % 4 == 0) && ($ano % 100 != 0));

if ($mes < 1 || $mes > 12) {

    echo "Data inválida.";

} else {

    switch ($mes) {

        case 2:
            if ($bissexto) {
                $dias = 29;
            } else {
                $dias = 28;
            }
            break;

        case 4:
        case 6:
        case 9:
        case 11:
            $dias = 30;
            break;

        default:
            $dias = 31;
    }

    if ($dia >= 1 && $dia <= $dias) {
        echo "Data válida.";
    } else {
        echo "Data inválida.";
    }
}

?>
