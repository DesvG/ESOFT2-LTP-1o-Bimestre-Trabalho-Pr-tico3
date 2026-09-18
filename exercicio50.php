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
Exercício 50:
Lê cinco números e mostra o maior e o menor valor.
*/

$numeros = [];

for ($i = 1; $i <= 5; $i++) {
    $numeros[] = (float) readline("Digite o $iº número: ");
}

$maior = max($numeros);
$menor = min($numeros);

echo "Maior valor: $maior" . PHP_EOL;
echo "Menor valor: $menor" . PHP_EOL;

?>
