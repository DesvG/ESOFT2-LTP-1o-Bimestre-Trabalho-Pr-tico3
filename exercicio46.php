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
Descritivo: Identificar a naturalidade a partir da sigla do estado
******************************************************************************/

// Explicação: Lê a sigla do estado, normaliza para maiúsculas e usa switch para identificar a naturalidade.

$sigla = strtoupper(readline("Digite a sigla do estado: "));

switch ($sigla) {
    case "RJ":
        echo "Carioca\n";
        break;
    case "SP":
        echo "Paulista\n";
        break;
    case "MG":
        echo "Mineira\n";
        break;
    default:
        echo "Outro estado\n";
}