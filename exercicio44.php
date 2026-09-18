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
Descritivo: Validar ano de nascimento e calcular idade
******************************************************************************/

// Explicação: Lê o ano de nascimento e o ano atual, valida o intervalo e calcula a idade.

$anoNascimento = (int) readline("Digite o ano de nascimento: ");
$anoAtual = (int) readline("Digite o ano atual: ");

if ($anoNascimento > 1900 && $anoNascimento <= $anoAtual) {
    $idade = $anoAtual - $anoNascimento;
    echo "Ano válido. Idade: $idade anos.\n";
} else {
    echo "Ano de nascimento inválido.\n";
}