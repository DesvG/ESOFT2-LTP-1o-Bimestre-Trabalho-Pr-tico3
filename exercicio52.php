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
Exercício 52:
Lê um valor em Reais e a cotação do dólar,
depois converte o valor para dólares.
*/

$reais = (float) readline("Digite o valor em Reais: ");
$cotacao = (float) readline("Digite a cotação do dólar: ");

$dolares = $reais / $cotacao;

echo "Valor em dólares: US$ " . number_format($dolares, 2, ',', '.') . PHP_EOL;

?>
