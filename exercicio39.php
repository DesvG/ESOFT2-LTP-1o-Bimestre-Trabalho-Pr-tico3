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
Descritivo: Calcular reajuste salarial conforme faixa de salário
******************************************************************************/

// Explicação: Lê nome e salário, aplica percentual de reajuste conforme a faixa e exibe o novo salário.

$nome = readline("Digite o nome do funcionário: ");
$salario = (float) readline("Digite o salário atual: ");

if ($salario <= 1000.00) {
    $novoSalario = $salario * 1.20;
} elseif ($salario <= 5000.00) {
    $novoSalario = $salario * 1.10;
} else {
    $novoSalario = $salario;
}

echo "Funcionário: $nome\n";
echo "Novo salário: R$ " . number_format($novoSalario, 2, ',', '.') . "\n";