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
Descritivo: Calcular imposto de renda anual com deduções
******************************************************************************/

// Explicação: Lê os dados do contribuinte, calcula a base de cálculo, aplica a alíquota e informa se há imposto a pagar ou a restituir.

$cpf = readline("Digite o CPF: ");
$nome = readline("Digite o nome: ");
$rendimento = (float) readline("Digite o rendimento anual: ");
$impostoRetido = (float) readline("Digite o imposto retido na fonte: ");
$contribuicao = (float) readline("Digite a contribuição previdenciária: ");
$despesasMedicas = (float) readline("Digite as despesas médicas: ");
$dependentes = (int) readline("Digite o número de dependentes: ");

$deducaoDependentes = $dependentes * 1080.00;
$totalDeducoes = $contribuicao + $despesasMedicas + $deducaoDependentes;
$baseCalculo = $rendimento - $totalDeducoes;

if ($baseCalculo <= 10800.00) {
    $impostoDevido = 0.00;
} elseif ($baseCalculo <= 21600.00) {
    $impostoDevido = ($baseCalculo * 0.15) - 1620.00;
} else {
    $impostoDevido = ($baseCalculo * 0.25) - 3780.00;
}

$diferenca = $impostoDevido - $impostoRetido;

if ($diferenca > 0) {
    $situacao = "PAGAR";
} else {
    $situacao = "RESTITUIR";
}

echo "CPF: $cpf\n";
echo "Nome: $nome\n";
echo "Base de cálculo: R$ " . number_format($baseCalculo, 2, ',', '.') . "\n";
echo "Imposto devido: R$ " . number_format($impostoDevido, 2, ',', '.') . "\n";
echo "Imposto retido: R$ " . number_format($impostoRetido, 2, ',', '.') . "\n";
echo "Situação: $situacao R$ " . number_format(abs($diferenca), 2, ',', '.') . "\n";