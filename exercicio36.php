<?php
/******************************************************************************
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
Descritivo: Cálculo da conta de consumo de energia elétrica
******************************************************************************/

// Explicação: Lê o código do consumidor, o preço do kWh e o consumo. Calcula o valor do consumo e garante a cobrança mínima de R$ 11,20.

$codigo = readline("Digite o código do consumidor: ");
$precoKwh = (float) readline("Digite o preço do kWh: ");
$quantidadeKwh = (float) readline("Digite a quantidade de kWh consumida: ");

$total = $precoKwh * $quantidadeKwh;

if ($total < 11.20) {
    $total = 11.20;
}

echo "\nCódigo do consumidor: $codigo\n";
echo "Total a pagar: R$ " . number_format($total, 2, ',', '.') . "\n";
