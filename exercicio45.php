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
Descritivo: Calculadora básica com dois números reais e um operador
******************************************************************************/

// Explicação: Lê dois números e um operador, usa switch para escolher a operação e exibe o resultado.

$a = (float) readline("Digite o primeiro número: ");
$b = (float) readline("Digite o segundo número: ");
$operador = readline("Digite o operador (+, -, *, /): ");

switch ($operador) {
    case "+":
        $resultado = $a + $b;
        break;
    case "-":
        $resultado = $a - $b;
        break;
    case "*":
        $resultado = $a * $b;
        break;
    case "/":
        if ($b != 0) {
            $resultado = $a / $b;
        } else {
            $resultado = "Erro: divisão por zero";
        }
        break;
    default:
        $resultado = "Operador inválido";
}

echo "Resultado: $resultado\n";