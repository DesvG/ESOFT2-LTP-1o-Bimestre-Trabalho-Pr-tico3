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
Descritivo: Calcular conta final de hóspede de hotel
******************************************************************************/

// Explicação: Lê os dados do hóspede, define o valor da diária por tipo de apartamento e calcula a fatura completa.

$nome = readline("Digite o nome do hóspede: ");
$tipo = strtoupper(readline("Digite o tipo do apartamento (A/B/C/D): "));
$diarias = (int) readline("Digite a quantidade de diárias: ");
$consumo = (float) readline("Digite o valor do consumo interno: ");

if ($tipo == "A") {
    $valorDiaria = 150.00;
} elseif ($tipo == "B") {
    $valorDiaria = 100.00;
} elseif ($tipo == "C") {
    $valorDiaria = 75.00;
} else {
    $valorDiaria = 50.00;
}

$totalDiarias = $diarias * $valorDiaria;
$subtotal = $totalDiarias + $consumo;
$taxaServico = $subtotal * 0.10;
$totalGeral = $subtotal + $taxaServico;

echo "Hóspede: $nome\n";
echo "Tipo do apartamento: $tipo\n";
echo "Valor das diárias: R$ " . number_format($totalDiarias, 2, ',', '.') . "\n";
echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "\n";
echo "Taxa de serviço: R$ " . number_format($taxaServico, 2, ',', '.') . "\n";
echo "Total geral: R$ " . number_format($totalGeral, 2, ',', '.') . "\n";