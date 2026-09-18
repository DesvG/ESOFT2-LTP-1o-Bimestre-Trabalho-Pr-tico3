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
Exercício 53:
Lê a altura e o sexo da pessoa e calcula o peso ideal.
*/

$altura = (float) readline("Digite sua altura: ");
$sexo = readline("Digite o sexo (M/F): ");

if ($sexo == "M") {

    $pesoIdeal = (72.7 * $altura) - 58;

} elseif ($sexo == "F") {

    $pesoIdeal = (62.1 * $altura) - 44.7;

} else {

    echo "Sexo inválido." . PHP_EOL;
    exit;
}

echo "Peso ideal: " . $pesoIdeal . " kg" . PHP_EOL;

?>
