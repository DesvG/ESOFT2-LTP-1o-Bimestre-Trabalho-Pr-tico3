<?php

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