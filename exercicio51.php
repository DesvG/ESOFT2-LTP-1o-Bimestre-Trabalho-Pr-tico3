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
Exercício 51:
Lê três notas e calcula a média somente das duas maiores.
*/

$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");
$nota3 = (float) readline("Digite a terceira nota: ");

$notas = [$nota1, $nota2, $nota3];

sort($notas);

$maior1 = $notas[1];
$maior2 = $notas[2];

$media = ($maior1 + $maior2) / 2;

echo "Média das duas maiores notas: $media" . PHP_EOL;

?>
