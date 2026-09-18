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
Descritivo: Ler nome, endereço e telefone e exibir em linhas separadas
******************************************************************************/

// Explicação: Lê três dados com readline e exibe cada um em sua própria linha.

$nome = readline("Digite o nome: ");
$endereco = readline("Digite o endereço: ");
$telefone = readline("Digite o telefone: ");

echo "Nome: $nome\n";
echo "Endereço: $endereco\n";
echo "Telefone: $telefone\n";