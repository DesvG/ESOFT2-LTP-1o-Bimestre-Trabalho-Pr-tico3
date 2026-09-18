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
Exercício 49:
Lê três números e mostra primeiro em ordem crescente
e depois em ordem decrescente.
*/

$n1 = (float) readline("Digite o primeiro número: ");
$n2 = (float) readline("Digite o segundo número: ");
$n3 = (float) readline("Digite o terceiro número: ");

$numeros = [$n1, $n2, $n3];

sort($numeros);

echo "Ordem crescente: ";
echo $numeros[0] . " " . $numeros[1] . " " . $numeros[2] . PHP_EOL;

rsort($numeros);

echo "Ordem decrescente: ";
echo $numeros[0] . " " . $numeros[1] . " " . $numeros[2] . PHP_EOL;

?>
