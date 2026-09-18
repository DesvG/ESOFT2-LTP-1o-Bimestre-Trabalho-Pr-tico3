<?php

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